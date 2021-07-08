<?php

namespace App\Http\Controllers\Producttypes;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Offer;
use Illuminate\Routing\Controller;
use App\Http\Filters\Categories\SelectFilter;
use App\Http\Resources\Categories\SelectResource;
use App\Http\Resources\Categories\CategoryResource2;
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
     * @param \App\Http\Filters\Categories\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter, Request $request)
    {
        if(request()->header('accept-country', request('country')) != "") {
            $country_code = request()->header('accept-country', request('country'));
            $get_country = Country::where('code', $country_code)->firstOrFail();
            $country = $get_country->id;
        } else {
            $country = country()->id;
        }
        $categories = Category::where('country_id', $country)->filter($filter)->paginate();

        return SelectResource::collection($categories);

    }

    public function index_api(SelectFilter $filter, Request $request)
    {
        if(request()->header('accept-country', request('country')) != "") {
            $country_code = request()->header('accept-country', request('country'));
            $get_country = Country::where('code', $country_code)->firstOrFail();
            $country = $get_country->id;
        } else {
            $country = country()->id;
        }
        $categories = Category::where('country_id', $country)->parentsOnly()->filter($filter)->paginate();
        $category_slider = Slider::where(['country_id'=>$country, 'active' => true])->get();

        return [
            'sliders' => SelectResource::collection($category_slider),
            'data' => SelectResource::collection($categories)
        ];

    }

    public function menu(SelectFilter $filter, Request $request)
    {
        if(request()->header('accept-country', request('country')) != "") {
            $country_code = request()->header('accept-country', request('country'));
            $get_country = Country::where('code', $country_code)->firstOrFail();
            $country = $get_country->id;
        } else {
            $country = country()->id;
        }
        $categories = Category::where('country_id', $country)->parentsOnly()->filter($filter)->paginate();
        $category_slider = Slider::where(['country_id'=>$country, 'active' => true])->get();

        return CategoryResource2::collection($categories);

    }

    public function products($category_id, SelectFilter $filter)
    {
        if($category_id) {
            $country = Country::where('code', request()->header('accept-country', request('country')))->firstOrFail();
            $products = Product::whereIn(
                    'category_id',
                    Category::where('country_id', $country->id)->pluck('id')
                );
            if($category_id==2000 || $category_id==3000) {
                if($category_id==2000) {
                    //best sellers
                    $products = (clone $products)->filter($filter)->paginate();
                    return ProductResource::collection($products);

                } elseif($category_id==3000) {
                    //home offers
                    $offers = Offer::where('from', '<=', date('Y-m-d H:i:s'))
                            ->where('to', '>=', date('Y-m-d H:i:s'))
                            ->where('target_type', 'App\Models\Product')
                            ->paginate();
                    $hf = collect([]);
                    foreach($offers as $product) {
                        $hf->push($product->target);
                    }
                    return ProductResource::collection($hf);
                }
            } else {
                $category = Category::find($category_id);
                if($category) {
                    $products = (clone $products)->where('category_id', $category_id)->filter($filter)->paginate();
                    //return ProductResource::collection($products);
                    return new SelectResource($category);
                } else {
                    throw ValidationException::withMessages([
                        'category_id' => [trans('validation.custom.category.error')],
                    ]);
                }
            }
        } else {
            throw ValidationException::withMessages([
                'category_id' => [trans('validation.custom.category.required')],
            ]);
        }
    }

}
