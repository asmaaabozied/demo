<?php

namespace App\Http\Controllers\Brands;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Routing\Controller;
use App\Http\Filters\Brands\SelectFilter;
use App\Http\Resources\Brands\SelectResource;
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
     * @param \App\Http\Filters\Brands\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $brands = Brand::filter($filter)->paginate();

        return SelectResource::collection($brands);
    }

    public function products($brand_id, SelectFilter $filter)
    {
        if($brand_id) {
            $brand = Brand::find($brand_id);
            if($brand) {
                $products = Product::where('brand_id', $brand_id)->filter($filter)->paginate();
                return ProductResource::collection($products);
            } else {
                throw ValidationException::withMessages([
                    'brand_id' => [trans('validation.custom.brand.error')],
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'brand_id' => [trans('validation.custom.brand.required')],
            ]);
        }
    }

}
