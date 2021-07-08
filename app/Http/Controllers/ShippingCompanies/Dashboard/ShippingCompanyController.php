<?php

namespace App\Http\Controllers\ShippingCompanies\Dashboard;

use App\Models\ShippingCompany;
use Illuminate\Routing\Controller;
use App\Http\Requests\ShippingCompanies\ShippingCompanyRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;

class ShippingCompanyController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ShippingCompanyController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(ShippingCompany::class, 'shipping_company');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipping_companies = ShippingCompany::filter()->paginate();

        return view('dashboard.shipping_companies.index', compact('shipping_companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.shipping_companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ShippingCompanies\ShippingCompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShippingCompanyRequest $request)
    {
        $shipping_company = ShippingCompany::create($request->all());

        foreach ($request->input('prices', []) as $price) {
            $shipping_company->prices()->create(Arr::wrap($price));
        }

        $shipping_company->addAllMediaFromTokens();

        flash(trans('shipping_companies.messages.created'));

        return redirect()->route('dashboard.shipping_companies.show', $shipping_company);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ShippingCompany $shipping_company
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingCompany $shipping_company)
    {
        return view('dashboard.shipping_companies.show', compact('shipping_company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ShippingCompany $shipping_company
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingCompany $shipping_company)
    {
        return view('dashboard.shipping_companies.edit', compact('shipping_company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ShippingCompanies\ShippingCompanyRequest $request
     * @param \App\Models\ShippingCompany $shipping_company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ShippingCompanyRequest $request, ShippingCompany $shipping_company)
    {
        $shipping_company->update($request->all());

        $shipping_company->prices()->delete();
        foreach ($request->input('prices', []) as $price) {
            $shipping_company->prices()->create(Arr::wrap($price));
        }

        $shipping_company->addAllMediaFromTokens();

        flash(trans('shipping_companies.messages.updated'));

        return redirect()->route('dashboard.shipping_companies.show', $shipping_company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ShippingCompany $shipping_company
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ShippingCompany $shipping_company)
    {
        $shipping_company->delete();

        flash(trans('shipping_companies.messages.deleted'));

        return redirect()->route('dashboard.shipping_companies.index');
    }
}
