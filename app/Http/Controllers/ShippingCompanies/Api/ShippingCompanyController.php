<?php

namespace App\Http\Controllers\ShippingCompanies\Api;

use App\Models\ShippingCompany;
use Illuminate\Routing\Controller;
use App\Http\Resources\ShippingCompanies\ShippingCompanyResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ShippingCompanyController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the shipping_companies.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $shipping_companies = ShippingCompany::filter()->paginate();

        return ShippingCompanyResource::collection($shipping_companies);
    }

    /**
     * Display the specified shipping_company.
     *
     * @param \App\Models\ShippingCompany $shipping_company
     * @return \App\Http\Resources\ShippingCompanies\ShippingCompanyResource
     */
    public function show(ShippingCompany $shipping_company)
    {
        return new ShippingCompanyResource($shipping_company);
    }
}
