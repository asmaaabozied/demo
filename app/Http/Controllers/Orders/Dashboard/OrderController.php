<?php

namespace App\Http\Controllers\Orders\Dashboard;

use App\Http\Requests\Products\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrderController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * OrderController constructor.
     */
//    public function __construct()
//    {
////        $this->authorizeResource(Order::class, 'order');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dashboard.orders.create');


    }

    public function index(Request $request)
    {


        if ($request->status == 1) {


            $orders = Order::whereStatus(0)->latest()->paginate(30);


        } elseif ($request->status == 2) {
            $orders = Order::whereStatus(0)->latest()->paginate(30);


        } elseif ($request->status == 3) {

            $orders = Order::whereStatus(1)->latest()->paginate(30);


        } elseif ($request->status == 4) {
            $orders = Order::whereStatus(2)->latest()->paginate(30);


        } else {
            $orders = Order::latest()->paginate(30);

        }


        return view('dashboard.orders.index', compact('orders'));
    }

    public function status($id)
    {


        $order = Order::find($id);
        $status = ($order->status == 2) ? 0 : 1;

        $status = ($order->status == 1) ? 0 : 1;


//        $status = ($order->status == 'progress') ? 'delivery' : 'progress';
//        $status = ($order->status == 'delivery') ? 'cancelled' : 'delivery';
        $order->status = $status;

        $order->save();

        return back();
    }


    public function search(Request $request)
    {
        if ($request->name && $request->user_id && $request->phone) {
            $orders = Order::where('name', $request->name)
                ->where('user_id', $request->user_id)
                ->where('phone', $request->phone)->latest()->paginate(30);
        } elseif ($request->name) {
            $orders = Order::where('name', $request->name)
                ->latest()->paginate(30);

        } elseif ($request->phone) {

            $orders = Order::where('phone', $request->phone)
                ->latest()->paginate(30);
        } elseif ($request->user_id) {

            $orders = Order::where('user_id', $request->user_id)
                ->latest()->paginate(30);
        } elseif ($request->name && $request->phone) {
            $orders = Order::where('name', $request->name)
                ->where('phone', $request->phone)->latest()->paginate(30);

        } elseif ($request->name && $request->user_id) {

            $orders = Order::where('name', $request->name)
                ->where('user_id', $request->user_id)->latest()->paginate(30);
        }

        return view('dashboard.orders.index', compact('orders'));


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if ($order->opened_at == "") {
            $order->opened_at = date('Y-m-d H:i:s');
            $order->save();
        }
        return view('dashboard.orders.show', compact('order'));
    }

    public function invoice($order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('dashboard.orders.invoice', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

        return view('dashboard.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {

//        $request->validate([
//            'name' => ['required'],
//            'country' => ['required'],
//            'address' => ['required'],
//            'payment_method' => ['required'],
//            'total' => ['required'],
//            'opened_at' => ['required'],
//            'user_id' => ['required'],
//
//        ]);
//        $orders=Order::create([
//
//            'name'=>$request->name ?? '',
//            'country'=>$request->country ?? '',
//            'address'=>$request->address ?? '',
//            'discount'=>$request->discount ?? '',
//            'opened_at'=>$request->opened_at ?? '',
//            'status'=>$request->status ?? '',
//            'shipping_price'=>$request->shipping_price2 ?? '',
//            'total'=>$request->total ?? '',
//            'payment_method'=>$request->payment_method ?? '',
//            'user_id'=>$request->user_id ?? '',
//            'gift_message'=>$request->gift_message ?? '',
//        ]);
        $orders = Order::create($request->only('name', 'country', 'address', 'discount', 'opened_at', 'status', 'total', 'payment_method', 'user_id', 'gift_message') + ['shipping_price' => $request->shipping_price2]);

        if ($request->sku) {

            foreach ($request->sku as $key => $value)


                $product = Product::create([

                    'name:en' => $request['name:en'][$key],
                    'name:ar' => $request['name:ar'][$key],
                    'sku' => $request['sku'][$key] ?? '',

                    'brand_id' => $request['brand_id'][$key] ?? '',

                    'category_id' => $request['category_id'][$key] ?? '',
                    'producttype_id' => $request['producttype_id'][$key] ?? '',
                    'price' => $request['price'][$key] ?? '',
                    'price2' => $request['price2'][$key] ?? '',
                    'quantity' => $request['quantity'][$key] ?? '',

                ]);

            OrderItem::create([
                'order_id' => $orders->id,
                'item_id' => $product->id,
                'item_type' => 'App\Models\Product',
            ]);


        }

        flash(trans('orders.messages.created'));

        return redirect()->route('dashboard.orders.index');


    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $orders = $order->update($request->only('name', 'country', 'address', 'discount', 'opened_at', 'status', 'total', 'payment_method', 'user_id', 'gift_message') + ['shipping_price' => $request->shipping_price2]);

        if ($request->sku) {


            foreach ($request->sku as $key => $value)


                $product = Product::create([

                    'name:en' => $request['name:en'][$key],
                    'name:ar' => $request['name:ar'][$key],
                    'sku' => $request['sku'][$key],

                    'brand_id' => $request['brand_id'][$key],

                    'category_id' => $request['category_id'][$key],
                    'producttype_id' => $request['producttype_id'][$key],
                    'price' => $request['price'][$key],
                    'price2' => $request['price2'][$key],
                    'quantity' => $request['quantity'][$key],

                ]);

            OrderItem::updateOrCreate(['order_id' => $id], [
                'order_id' => $id,
                'item_id' => $product->id,
                'item_type' => 'App\Models\Product',
            ]);


        }
//        $order->forceFill($request->only('status'))->save();

        flash(trans('orders.messages.updated'));

        return redirect()->route('dashboard.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        $order->delete();

        flash(trans('orders.messages.deleted'));

        return redirect()->route('dashboard.orders.index');
    }


    public function deleteAllOrders(Request $request)
    {
        $ids = $request->ids;
        Order::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'this data deleted']);

    }
}
