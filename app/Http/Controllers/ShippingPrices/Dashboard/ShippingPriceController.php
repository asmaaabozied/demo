<?php

namespace App\Http\Controllers\ShippingPrices\Dashboard;

use App\Models\ShippingPrice;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ShippingPrices\ShippingPriceRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ShippingPriceController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ShippingPriceController constructor.
     */
    public function __construct()
    {
//        $this->authorizeResource(ShippingPrice::class, 'shipping_price');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request->status == 1) {


            $shipping_prices = ShippingPrice::whereStatus(1)->latest()->paginate(30);


        } elseif ($request->status == 2) {
            $shipping_prices = ShippingPrice::whereStatus(0)->latest()->paginate(30);


        } else {


            $shipping_prices = ShippingPrice::get();
        }


        return view('dashboard.shipping_prices.index', compact('shipping_prices'));
    }

    public function status($id)
    {
        $Shipping = ShippingPrice::find($id);

        $status = ($Shipping->status == 1) ? 0 : 1;


        $Shipping->status = $status;

        $Shipping->save();

        return back();

    }

    public function deleteAllships(Request $request)
    {

        $id = $request->ids;

        ShippingPrice::whereIn('id', $id)->delete();

        return response()->json(['success' => 'this data deleted']);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.shipping_prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ShippingPrices\ShippingPriceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShippingPriceRequest $request)
    {
        $shipping_price = ShippingPrice::create($request->all());
        $shipping_price->addAllMediaFromTokens();


        flash(trans('shipping_prices.messages.created'));

        return redirect()->route('dashboard.shipping_prices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ShippingPrice $shipping_price
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingPrice $shipping_price)
    {
        return view('dashboard.shipping_prices.show', compact('shipping_price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ShippingPrice $shipping_price
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingPrice $shipping_price)
    {
        return view('dashboard.shipping_prices.edit', compact('shipping_price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ShippingPrices\ShippingPriceRequest $request
     * @param \App\Models\ShippingPrice $shipping_price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ShippingPriceRequest $request, ShippingPrice $shipping_price)
    {
        $shipping_price->update($request->all());
        $shipping_price->addAllMediaFromTokens();


        flash(trans('shipping_prices.messages.updated'));

        return redirect()->route('dashboard.shipping_prices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ShippingPrice $shipping_price
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(ShippingPrice $shipping_price)
    {
        $shipping_price->delete();

        flash(trans('shipping_prices.messages.deleted'));

        return redirect()->route('dashboard.shipping_prices.index');
    }
}
