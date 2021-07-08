<?php

namespace App\Http\Controllers;

use App\Models\Order;
use bawes\myfatoorah\MyFatoorah;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('viewAny', Order::class);

        $orders = auth()->user()->orders()->paginate();
        return view('orders.index', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $this->authorize('view', $order);

        return view('orders.show', compact('order'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        if($order) {
            $status = json_decode($this->checkPayment($request->tap_id), true);
            if($status['status']=="CAPTURED") {
                $order->update([
                    'payment_id' => request('paymentId'),
                ]);
                session()->forget('cart');
                session()->forget('coupon');
                return view('frontend.order-done', ['order' => $order, 'payment'=>'success']);
            } else {
                $order->delete();
                return view('frontend.order-done', ['order' => $order, 'payment'=>'failed']);
            }
        } else {
            return redirect('/');
        }
    }

    public function checkPayment($charge_id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.tap.company/v2/charges/$charge_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "{}",
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer sk_test_gr4MzOx3RTFlNAXmJK2UWkGY"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "error";
        } else {
            return $response;
        }
    }
}
