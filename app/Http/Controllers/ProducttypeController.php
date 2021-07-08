<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\ProducttypeRequest;
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

class ProducttypeController extends Controller
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

        $products = Producttype::latest()->get();

        return view('dashboard.producttypes.index', compact('products'));

    }

    public function deleteAlltypeproducts(Request $request)
    {

        $ids = $request->ids;
        Producttype::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'this data deleted']);


    }

    public function create()
    {

        return view('dashboard.producttypes.create');

    }

    public function store(ProducttypeRequest $request)
    {

        $product = Producttype::create($request->all());

        flash(trans('product_types.messages.created'));

        return redirect()->route('dashboard.producttypes.index');

    }

    public function edit($id)
    {
        $product = Producttype::find($id);

        return view('dashboard.producttypes.edit', compact('product'));


    }


    public function show($id)
    {
        $product = Producttype::find($id);

        return view('dashboard.producttypes.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\UserRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProducttypeRequest $request, $id)
    {
        $product = Producttype::find($id);
        $product->update($request->all());


        flash(trans('product_types.messages.updated'));

        return redirect()->route('dashboard.producttypes.index', $product);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Producttype::find($id);

        $product->delete();

        flash(trans('product_types.messages.deleted'));

        return redirect()->route('dashboard.producttypes.index');
    }
}
