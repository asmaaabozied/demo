<?php

namespace App\Http\Controllers\Accounts\Api;

use App\Models\Order;
use bawes\myfatoorah\MyFatoorah;
use Illuminate\Routing\Controller;
use App\Http\Resources\Orders\OrderResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyOrderController extends Controller
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

        return OrderResource::collection($orders);
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

        return new OrderResource($order);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {
        if (request('payment') == 'success') {
            Order::where('id', request('order_id'))->update([
                'payment_id' => request('paymentId'),
            ]);
        }
        return redirect()->route('home', request()->all());
    }

    public function addAddress(Request $request)
    {
        $address = Address::create($request->all());

        return $address;
    }

    public function getAddresses(Request $request)
    {
        $addresses = Address::where('user_id', $request->user_id)->paginate();

        return AddressResource::collection($addresses);
    }
}
