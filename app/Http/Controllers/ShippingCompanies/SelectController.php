<?php

namespace App\Http\Controllers\ShippingCompanies;

use App\Models\ShippingCompany;
use Illuminate\Routing\Controller;
use App\Http\Filters\ShippingCompanies\SelectFilter;
use App\Http\Resources\ShippingCompanies\SelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\ShippingCompanies\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $shipping_companies = ShippingCompany::filter($filter)->paginate();

        return SelectResource::collection($shipping_companies);
    }
}
