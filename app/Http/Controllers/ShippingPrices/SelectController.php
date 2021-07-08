<?php

namespace App\Http\Controllers\ShippingPrices;

use App\Models\ShippingPrice;
use Illuminate\Routing\Controller;
use App\Http\Filters\ShippingPrices\SelectFilter;
use App\Http\Resources\ShippingPrices\SelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\ShippingPrices\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $shipping_prices = ShippingPrice::filter($filter)->paginate();

        return SelectResource::collection($shipping_prices);
    }
}
