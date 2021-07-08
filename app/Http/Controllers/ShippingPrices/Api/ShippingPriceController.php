<?php

namespace App\Http\Controllers\ShippingPrices\Api;

use App\Models\ShippingPrice;
use Illuminate\Routing\Controller;
use App\Http\Resources\ShippingPrices\ShippingPriceResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ShippingPriceController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the shipping_prices.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $shipping_prices = ShippingPrice::filter()->paginate();

        return ShippingPriceResource::collection($shipping_prices);
    }

    /**
     * Display the specified shipping_price.
     *
     * @param \App\Models\ShippingPrice $shipping_price
     * @return \App\Http\Resources\ShippingPrices\ShippingPriceResource
     */
    public function show(ShippingPrice $shipping_price)
    {
        return new ShippingPriceResource($shipping_price);
    }
}
