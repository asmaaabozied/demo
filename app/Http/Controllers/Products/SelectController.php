<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Routing\Controller;
use App\Http\Filters\Products\SelectFilter;
use App\Http\Resources\Products\SelectResource;
use App\Http\Resources\Products\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SelectController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Products\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $country = country()->id;
        $products = Product::whereHas('category', function ($query) use ($country) {
            $query->where('country_id', $country);
        })->filter($filter)->paginate();

        return ProductResource::collection($products);
    }

    public function select(SelectFilter $filter)
    {
        $country = country()->id;
        $products = Product::whereHas('category', function ($query) use ($country) {
            $query->where('country_id', $country);
        })->filter($filter)->paginate();

        return SelectResource::collection($products);
    }


    public function search(Request $request)
    {
        if($request->name) {
            $products = Product::whereTranslationLike('name', "%$request->name%")->paginate();
            return ProductResource::collection($products);
        } else {
            throw ValidationException::withMessages([
                'brand_id' => [trans('validation.custom.brand.required')],
            ]);
        }
    }

}
