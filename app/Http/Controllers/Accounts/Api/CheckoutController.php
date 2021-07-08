<?php

namespace App\Http\Controllers\Accounts\Api;

use App\Models\ShippingCompany;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\CartItem;
use App\Http\Resources\Cart\CartResource;
use App\Http\Resources\Orders\OrderResource;
use App\Models\Customer;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CheckoutController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function myCart()
    {
        $user = auth()->user();
        $cart = CartItem::where('user_id', $user->id)->get();

        return CartResource::collection($cart);
    }

    public function paymentMethods()
    {
        $paymentMethods = $this->InitiatePayment()->json('Data.PaymentMethods', []);

        return $paymentMethods;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @throws \Throwable
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store0(Request $request)
    {
        return [
            'coupon_id'=>$request->coupon
        ];
    }
    public function store(Request $request)
    {

        $user = auth()->user();
        $cart = $request->cart;
        DB::beginTransaction();
        $data = $request->except('user');
        if(auth()->user()) {
            $data['user_id'] = auth()->id();
        }
        if($request->has('coupon') && ($request->coupon!=[] || $request->coupon!=null)) {
            $data['coupon_id'] = $request->coupon['id'];
            $data['discount'] = $request->coupon['discount'];
            $data['sub_total'] = $request->total_cart;
            $data['sub_total'] = $request->coupon['total'];
            $data['total'] = $request->coupon['total'];
        } else {
            $data['sub_total'] = $request->total_cart;
            $data['total'] = $request->total_cart;
        }

        if ($userData = data_get($request->all(), 'user')) {
            if (isset($userData['email']) && User::whereEmail($userData['email'])->exists()) {
                $customer = Customer::firstOrCreate([
                    'email' => $userData['email'],
                ], $userData);
            } else {
                $customer = Customer::firstOrCreate([
                    'phone' => $userData['phone'],
                ], $userData);
            }

            $data['user_id'] = $customer->id;
            $data['name'] = $userData['name'];
            $data['phone'] = $userData['phone'];
        }

        $order = Order::create($data);

        foreach ($cart as $item) {
            $order->items()->create([
                'item_type' => "App\Models\Product",
                'item_id' => $item['item_id'],
                'price' => $item['price'],
                'qty' => $item['qty'],
                'total' => $item['total'],
            ]);
        }

        DB::commit();

        return new OrderResource($order);
    }

    public function InitiatePayment()
    {
        $user = auth()->user();
        $total = 0;

        $token = $this->getToken();

        $basURL = "https://apitest.myfatoorah.com/";

        $response = Http::withToken($token)
            ->post("$basURL/v2/InitiatePayment", [
                'InvoiceAmount' => $total,
                'CurrencyIso' => currency()->code ?: 'KWD',
            ])
            ->onError(function () {
                throw ValidationException::withMessages([
                    'payment' => [__('لا يمكنك الدفع عن طرق ماى فاتوره من فضلك راجع البائع')],
                ]);
            });

        return $response;
    }

    /**
     * @param \App\Models\Order $order
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function executePayment($order)
    {
        $items = [];
        foreach ($order->items as $item) {
            $items[] = [
                'ItemName' => $item->item->name,
                'Quantity' => $item->qty,
                'UnitPrice' => $item->item->getPrice(),
            ];
        }
        $token = $this->getToken();
        $basURL = "https://apitest.myfatoorah.com/";
        $data = [
            'PaymentMethodId' => $order->payment_method,
            'CustomerName' => $order->customer->name,
            'DisplayCurrencyIso' => currency()->code,
            'MobileCountryCode' => '+965',
            'CustomerMobile' => substr($order->customer->phone, 0, 11),
            'CustomerEmail' => $order->customer->email,
            'InvoiceValue' => $order->sub_total,
            'CallBackUrl' => url('/pay/?payment=success&order_id='.$order->id),
            'ErrorUrl' => url('/?payment=error'),
            'Language' => app()->getLocale(),
            'CustomerReference' => $order->user_id,
            'CustomerCivilId' => 12345678,
            'UserDefinedField' => 'Custom field',
            'ExpireDate' => '',
            'CustomerAddress' => [
                'Block' => '',
                'Street' => $order->street,
                'HouseBuildingNo' => $order->area,
                'Address' => $order->address,
                'AddressInstructions' => $order->city,
            ],
            'InvoiceItems' => $items,
        ];
        $response = Http::withToken($token)
            ->post("$basURL/v2/ExecutePayment", $data)
            ->onError(function () {
                return [
                    'error' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
                ];
            });

        if ($response->successful() && $response->json('IsSuccess')) {

            $parts = parse_url($response->json('Data.PaymentURL'));
            parse_str($parts['query'], $query);

            return [
                'status' => true,
                'invoiceKey' => $query['invoiceKey'],
                'paymentGatewayId' => $query['paymentGatewayId'],
                'order_id' => $order->id
            ];
        }

        $order->delete();

        return [
            'error' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
        ];
    }

    public function makePayment(Request $request) {

        $invoiceKey = $request->invoiceKey;
        $paymentGatewayId = $request->paymentGatewayId;

        $CardHolderName = $request->CardHolderName;
        $CardNumber = $request->CardNumber;
        $expiryMonth = $request->expiryMonth;
        $expiryYear = $request->expiryYear;
        $securityCode = $request->securityCode;
        $order_id = $request->order_id;

        $token = $this->getToken();
        $basURL = "https://apitest.myfatoorah.com/";
        $data = [
            'paymentType' => "card",
            'card' => [
                'CardHolderName' => $CardHolderName,
                'Number' => $CardNumber,
                'expiryMonth' => $expiryMonth,
                'expiryYear' => $expiryYear,
                'securityCode' => $securityCode,
            ],
            'saveToken' => false,
        ];
        $response = Http::withToken($token)
            ->post("$basURL/v2/DirectPayment/$invoiceKey/$paymentGatewayId", $data)
            ->onError(function () {
                return [
                    'error' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
                ];
            });

        if ($response->successful() && $response->json('IsSuccess')) {

            //update order with payment_id
            Order::where('id', $order_id)->update([
                'payment_id' => $response->json('Data.PaymentId'),
            ]);

            return [
                'status' => true,
                'message' => '',
                'data' => $response->json('Data')
            ];
        } else {

            //$order->delete();

            return [
                'status' => false,
                'message' => $response->json('Message'),
                'data' => ''
            ];
        }
    }


    public function paymentFailed()
    {
        return [
            'error' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
        ];
    }

    /**
     * @return string
     */
    private function getToken()
    {
        return "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL";
    }
}
