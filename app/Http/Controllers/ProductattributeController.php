<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\status;
use App\Http\Requests\Products\ProducttypeRequest;
use App\Models\Attribueproduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Producttype;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Http\Requests\Accounts\FrontUserRequest;
use Illuminate\Http\Request;

class ProductattributeController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;


    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Attribueproduct::paginate(25);


        return view('dashboard.attributeproducts.index', compact('products'));

    }

    public function create()
    {

        return view('dashboard.attributeproducts.create');

    }

    public function store(status $request)
    {

        $product = Attribueproduct::create($request->all());

        flash(trans('products_attribute.messages.created'));

        return redirect()->route('dashboard.attributeproducts.index');

    }

    public function edit($id)
    {
        $product = Attribueproduct::find($id);

        return view('dashboard.attributeproducts.edit', compact('product'));


    }


    public function show($id)
    {
        $product = Attribueproduct::find($id);

        return view('dashboard.attributeproducts.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\UserRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(status $request, $id)
    {
        $product = Attribueproduct::find($id);
        $product->update($request->all());


        flash(trans('products_attribute.messages.updated'));

        return redirect()->route('dashboard.attributeproducts.index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Attribueproduct::find($id);

        $product->delete();

        flash(trans('product_types.messages.deleted'));

        return redirect()->route('dashboard.attributeproducts.index');
    }
}
