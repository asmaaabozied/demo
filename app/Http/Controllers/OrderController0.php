<?php

namespace App\Http\Controllers;

use App\Models\Order;
use bawes\myfatoorah\MyFatoorah;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
    public function pay()
    {
        $order = Order::where('id', request('order_id'))->first();
        if($order) {
            if (request('payment') == 'success') {
                $order->update([
                    'payment_id' => request('paymentId'),
                ]);
                return view('order-done', ['order' => $order, 'payment'=>'success']);
            } else {
                $order->delete();
                return view('order-done', ['order' => $order, 'payment'=>'failed']);
            }
        } else {
            return redirect('/');
        }
    }
}
