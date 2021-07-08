<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function index()
    {
        if (app('cart')->getItems()->count() == 0) {
            return redirect('/');
        }

        return view('frontend.cart');
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $this->validate($request, [
            'qty' => 'required|numeric',
            'item_id' => 'required',
            'item_type' => 'required',
        ]);

        $old_qty = 0;
        foreach(app('cart')->getItems() as $item) {
            if($request->item_type.$request->item_id==$item->item_type.$item->item->id) {
                $old_qty = $item->qty;
            }
        }

        $cart = session('cart', []);

        $cart[$request->item_type.$request->item_id] = [
            'item_id' => $request->item_id,
            'item_type' => $request->item_type,
            'size_id' => $request->size_id,
            'milk_size' => $request->milk_size,
            'additional' => $request->additional,
            'qty' => $old_qty+$request->qty,
        ];

        session()->put('cart', $cart);

        if($request->has('buy_now') && $request->buy_now==1) {
            return redirect('/checkout');
        } else {

            $hole_qty = 0;
            foreach(app('cart')->getItems() as $item) {
                $hole_qty += $item->qty;
            }
            return [
                'message' => 'Done',
                'cart_counter' => $hole_qty
            ];

            //return redirect()->back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cart = [];

        foreach ($request->cart as $item) {
            $type = $item['item_type'];
            if ($product = $type::find($item['item_id'])) {
                $cart[$product->getMorphClass().$product->id]['item_id'] = $product->id;
                $cart[$product->getMorphClass().$product->id]['item_type'] = $product->getMorphClass();
                $cart[$product->getMorphClass().$product->id]['size_id'] = $item['size_id'];
                $cart[$product->getMorphClass().$product->id]['milk_size'] = $item['milk_size'];
                $cart[$product->getMorphClass().$product->id]['additional'] = $item['additional'];
                $cart[$product->getMorphClass().$product->id]['qty'] = (int) $item['qty'] ?? 1;
            }
        }

        session()->put('cart', $cart);

        $hole_qty = 0;
        foreach(app('cart')->getItems() as $item) {
            $hole_qty += $item->qty;
        }
        return [
            'message' => 'Done',
            'cart_counter' => $hole_qty,
            'cart_total' => price(app('cart')->getSubTotal())
        ];
        //return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function reOrder(Order $order)
    {
        $order_items = OrderItem::where('order_id', $order->id)->get();

        $cart = session('cart', []);
        foreach($order_items as $item) {
            $cart[$item->item_type.$item->item_id] = [
                'item_id' => $item->item_id,
                'item_type' => $item->item_type,
                'size_id' => $item->size_id,
                'milk_size' => $item->milk_size,
                'additional' => $item->additional,
                'qty' => $item->qty,
            ];
        }
        session()->put('cart', $cart);

        return redirect('/checkout');
    }


    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->item_type.$request->item_id;

        $cart = session('cart', []);

        if (isset($cart[$id])) {
            $cart = Arr::except($cart, $id);
        }

        session()->put('cart', []);

        return back();
    }
}
