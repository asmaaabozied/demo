<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */


    public function show(Brand $brand)
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('country_id', country()->id);
        })->where('brand_id', $brand->id);

        $maxPrice = (int) (clone $products)->max('price');

        $maxPrice = $maxPrice == 0 ? 1000 : $maxPrice;

        if(request()->get('order')!="") {
            $sort = request()->get('order');
            $products = $products->filter()->orderBy('price', $sort)->paginate();
        } else {
            $products = $products->filter()->paginate();
        }

        return view('brands.show', get_defined_vars());
    }
}
