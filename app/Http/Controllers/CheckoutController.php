<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\ShippingCompany;
//use App\Models\User;
//use App\Models\Order;
//use App\Models\Country;
//use App\Models\Product;
//use App\Models\Customer;
//use Illuminate\Support\Arr;
//use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Str;
//use Illuminate\Validation\ValidationException;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Tap\TapPayment\Facade\TapPayment;
//
//class CheckoutController extends Controller
//{
//    use AuthorizesRequests;
//    use ValidatesRequests;
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function show()
//    {
//        if (app('cart')->getItems()->count() == 0) {
//            return redirect('/');
//        }
//
//        $carts=app('cart')->getItems();
//
//        return view('frontend.checkout', get_defined_vars(),compact('carts'));
//    }
//    public function index(){
//
//        return view('frontend.checkout');
//
//    }
//
//    /**
//     * @param \Illuminate\Http\Request $request
//     * @throws \Throwable
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function store(Request $request)
//    {
//        if (app('cart')->getItems()->count() == 0) {
//            return redirect('/');
//        }
//        DB::beginTransaction();
//        $data = $request->except('user');
//        $data['user_id'] = auth()->id();
//        $data['coupon_id'] = data_get(session('coupon'), 'id');
//        $data['sub_total'] = app('cart')->getSubTotal();
//        $data['discount'] = app('cart')->getDiscount();
//        $data['total'] = app('cart')->getTotal();
//        $data['pickup'] = $request->pickup;
//
//        if ($userData = data_get($request->all(), 'user')) {
//            if (isset($userData['email']) && User::whereEmail($userData['email'])->exists()) {
//                $customer = User::firstOrCreate([
//                    'email' => $userData['email'],
//                ], $userData);
//            } else {
//                $customer = User::firstOrCreate([
//                    'phone' => $userData['phone'],
//                    'email' => $userData['email'],
//                    'name'=>auth()->user()->name ?? '',
//                ], $userData);
//            }
////            if($request->country) {
////                $country = Country::where('id', $request->country)->first();
////                $country_name=$country->name ?? '';
////            } else {
////                $country_name="";
////            }
//            $data['user_id'] = $customer->id;
//            $data['name'] = $userData['name'] ?? '';
//            $data['phone'] = $userData['phone'];
//            $data['country'] =$request->country?? '';
//            $data['city'] = $userData['city'] ?? '';
//            $data['area'] = $userData['area'] ?? '';
//            $data['address'] = $userData['address'] ?? '';
//        }
//
//        $order = Order::create($data);
//
//        foreach (session('cart', []) as $item) {
//            $order->items()->create($item);
//        }
//
//        DB::commit();
//
//        if($request->payment_method=='كاش') {
//            //flash(__('Order has been added successfully.'));
//            session()->forget('cart');
//            session()->forget('coupon');
//            return $this->orderDone($order);
//        } else {
//            return $this->executePayment($order);
//        }
//
//    }
//
//    public function InitiatePayment()
//    {
//        $total = app('cart')->getTotal();
//
//        $token = $this->getToken();
//
//        $basURL = "https://apitest.myfatoorah.com/";
//
//        $response = Http::withToken($token)
//            ->post("$basURL/v2/InitiatePayment", [
//                'InvoiceAmount' => $total,
//                'CurrencyIso' => currency()->code ?: 'KWD',
//            ])
//            ->onError(function () {
//                throw ValidationException::withMessages([
//                    'payment' => [__('لا يمكنك الدفع عن طرق ماى فاتوره من فضلك راجع البائع')],
//                ]);
//            });
//
//        return $response;
//    }
//
//    /**
//     * @param \App\Models\Order $order
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function executePayment($order)
//    {
//        $price = $order->sub_total+$order->shipping_price;
//
//        switch($order->payment_method) {
//            case 'knet':
//                $source = "src_kw.knet";
//            break;
//            case "mada":
//                $source = "src_sa.mada";
//            break;
//            case "benefit":
//                $source = "src_bh.benefit";
//            break;
//            case "visa":
//                $source = "src_card";
//            break;
//            default:
//                $source = "src_kw.knet";
//        }
//
//        $curl = curl_init();
//        $url = url('/pay/?order_id='.$order->id);
//        curl_setopt_array($curl, array(
//        CURLOPT_URL => "https://api.tap.company/v2/charges",
//        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_ENCODING => "",
//        CURLOPT_MAXREDIRS => 10,
//        CURLOPT_TIMEOUT => 30,
//        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//        CURLOPT_CUSTOMREQUEST => "POST",
//        CURLOPT_POSTFIELDS => "{\"amount\":\"$price\",\"currency\":\"KWD\",\"threeDSecure\":true,\"save_card\":false,\"\":\"\",\"statement_descriptor\":\"Sample\",\"metadata\":{\"udf1\":\"test 1\",\"udf2\":\"test 2\"},\"reference\":{\"transaction\":\"txn_0001\",\"order\":\"ord_0001\"},\"receipt\":{\"email\":false,\"sms\":true},\"customer\":{\"first_name\":\"test\",\"middle_name\":\"test\",\"last_name\":\"test\",\"email\":\"test@test.com\",\"phone\":{\"country_code\":\"965\",\"number\":\"50000000\"}},\"merchant\":{\"id\":\"\"},\"source\":{\"id\":\"$source\"},\"post\":{\"url\":\"http://your_website.com/post_url\"},\"redirect\":{\"url\":\"$url\"}}",
//        CURLOPT_HTTPHEADER => array(
//            "authorization: Bearer sk_test_gr4MzOx3RTFlNAXmJK2UWkGY",
//            "content-type: application/json"
//        ),
//        ));
//
//        $serverOutput = curl_exec($curl);
//        $decodeOutput = json_decode($serverOutput, true);
//        $err = curl_error($curl);
//
//        curl_close($curl);
//
//        if ($err) {
//            return "error";
//        } else {
//            if (isset($decodeOutput['transaction']['url'])) {
//                if($decodeOutput['transaction']['url'] == '') {
//                    return "error";
//                }else{
//                    return redirect()->away($decodeOutput['transaction']['url']);
//                }
//            }else{
//                return "error";
//            }
//        }
//
///*
//        $items = [];
//        foreach ($order->items as $item) {
//            $items[] = [
//                'ItemName' => $item->item->name,
//                'Quantity' => $item->qty,
//                'UnitPrice' => $item->item->getPrice(),
//            ];
//        }
//        $token = $this->getToken();
//        $basURL = "https://apitest.myfatoorah.com/";
//        $data = [
//            'PaymentMethodId' => $order->payment_method,
//            'CustomerName' => $order->customer->name,
//            'DisplayCurrencyIso' => currency()->code,
//            'MobileCountryCode' => '+965',
//            'CustomerMobile' => substr($order->customer->phone, 0, 11),
//            'CustomerEmail' => $order->customer->email,
//            'InvoiceValue' => $order->sub_total,
//            'CallBackUrl' => url('/pay/?payment=success&order_id='.$order->id),
//            'ErrorUrl' => url('/pay/?payment=error&order_id='.$order->id),
//            'Language' => app()->getLocale(),
//            'CustomerReference' => $order->user_id,
//            'CustomerCivilId' => 12345678,
//            'UserDefinedField' => 'Custom field',
//            'ExpireDate' => '',
//            'CustomerAddress' => [
//                'Block' => '',
//                'Street' => $order->street,
//                'HouseBuildingNo' => $order->area,
//                'Address' => $order->address,
//                'AddressInstructions' => $order->city,
//            ],
//            'InvoiceItems' => $items,
//        ];
//        $response = Http::withToken($token)
//            ->post("$basURL/v2/ExecutePayment", $data)
//            ->onError(function () {
//                return redirect('/')->withErrors([
//                    'payment' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
//                ]);
//            });
//
//        if ($response->successful() && $response->json('IsSuccess')) {
//            flash(__('Order has been added successfully.'));
//
//            return redirect()->away($response->json('Data.PaymentURL'));
//        }
//
//        $order->delete();
//
//        return "error";
//        */
//    }
//
//    public function orderDone($order)
//    {
//        return view('order-done', ['order'=>$order]);
//    }
//
//    public function paymentFailed()
//    {
//        return redirect('/')->withErrors([
//            'payment' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
//        ]);
//    }
//
//    /**
//     * @return string
//     */
//    private function getToken()
//    {
//        return "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL";
//    }
//}


namespace App\Http\Controllers;

use App\Models\ShippingCompany;
use App\Models\User;
use App\Models\Order;
use App\Models\Country;
use App\Models\Product;
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
use Tap\TapPayment\Facade\TapPayment;

class CheckoutController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (app('cart')->getItems()->count() == 0) {
            return redirect('/');
        }

        $carts = app('cart')->getItems();

        return view('frontend.checkout', get_defined_vars(), compact('carts'));
    }

    public function index()
    {

        return view('frontend.checkout');

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function store(Request $request)
    {
        if (app('cart')->getItems()->count() == 0) {
            return redirect('/');
        }
        DB::beginTransaction();
        $data = $request->except('user');
        $data['user_id'] = auth()->id();
        $data['coupon_id'] = data_get(session('coupon'), 'id');
        $data['sub_total'] = app('cart')->getSubTotal();
        $data['discount'] = app('cart')->getDiscount();
        $data['total'] = app('cart')->getTotal();
        $data['pickup'] = $request->pickup;

        if ($userData = data_get($request->all(), 'user')) {
            if (isset($userData['email']) && User::whereEmail($userData['email'])->exists()) {
                $customer = User::firstOrCreate([
                    'email' => $userData['email'],
                ], $userData);
            } else {
                $customer = User::firstOrCreate([
                    'phone' => $userData['phone'],
                    'email' => $userData['email'],
                    'name' => auth()->user()->name ?? '',
                ], $userData);
            }
//            if($request->country) {
//                $country = Country::where('id', $request->country)->first();
//                $country_name=$country->name ?? '';
//            } else {
//                $country_name="";
//            }
            $data['user_id'] = $customer->id;
            $data['name'] = $userData['name'] ?? '';
            $data['phone'] = $userData['phone'];
            $data['country'] = $request->country ?? '';
            $data['city'] = $userData['city'] ?? '';
            $data['area'] = $userData['area'] ?? '';
            $data['address'] = $userData['address'] ?? '';
        }

        $order = Order::create($data);

        //return $order;

        foreach (session('cart', []) as $item) {
            $order->items()->create($item);
        }

        DB::commit();

        if ($request->payment_method == 'كاش') {
            //flash(__('Order has been added successfully.'));
            session()->forget('cart');
            session()->forget('coupon');
            return $this->orderDone($order);
        } else {
            return $this->executePayment($order);
        }

    }

    public function InitiatePayment()
    {
        $total = app('cart')->getTotal();

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
        /*$price = $order->sub_total+$order->shipping_price;

        switch($order->payment_method) {
            case 'knet':
                $source = "src_kw.knet";
            break;
            case "mada":
                $source = "src_sa.mada";
            break;
            case "benefit":
                $source = "src_bh.benefit";
            break;
            case "visa":
                $source = "src_card";
            break;
            default:
                $source = "src_kw.knet";
        }

        $curl = curl_init();
        $url = url('/pay/?order_id='.$order->id);
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.tap.company/v2/charges",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"amount\":\"$price\",\"currency\":\"KWD\",\"threeDSecure\":true,\"save_card\":false,\"\":\"\",\"statement_descriptor\":\"Sample\",\"metadata\":{\"udf1\":\"test 1\",\"udf2\":\"test 2\"},\"reference\":{\"transaction\":\"txn_0001\",\"order\":\"ord_0001\"},\"receipt\":{\"email\":false,\"sms\":true},\"customer\":{\"first_name\":\"test\",\"middle_name\":\"test\",\"last_name\":\"test\",\"email\":\"test@test.com\",\"phone\":{\"country_code\":\"965\",\"number\":\"50000000\"}},\"merchant\":{\"id\":\"\"},\"source\":{\"id\":\"$source\"},\"post\":{\"url\":\"http://your_website.com/post_url\"},\"redirect\":{\"url\":\"$url\"}}",
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer sk_test_gr4MzOx3RTFlNAXmJK2UWkGY",
            "content-type: application/json"
        ),
        ));

        $serverOutput = curl_exec($curl);
        $decodeOutput = json_decode($serverOutput, true);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "error";
        } else {
            if (isset($decodeOutput['transaction']['url'])) {
                if($decodeOutput['transaction']['url'] == '') {
                    return "error";
                }else{
                    return redirect()->away($decodeOutput['transaction']['url']);
                }
            }else{
                return "error";
            }
        }*/


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
            'CallBackUrl' => url('/pay/?payment=success&order_id=' . $order->id),
            'ErrorUrl' => url('/pay/?payment=error&order_id=' . $order->id),
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
                return redirect('/')->withErrors([
                    'payment' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
                ]);
            });
        //return $response;

        if ($response->successful() && $response->json('IsSuccess')) {
            flash(__('Order has been added successfully.'));

            return redirect()->away($response->json('Data.PaymentURL'));
        }

        $order->delete();

        return "error";

    }

    public function orderDone($order)
    {
        return view('order-done', ['order' => $order]);
    }

    public function paymentFailed()
    {
        return redirect('/')->withErrors([
            'payment' => __('لا يمكن الدفع عن طريق ماى فاتورة حاليا'),
        ]);
    }

    /**
     * @return string
     */
    private function getToken()
    {
        return "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL";
    }
}

