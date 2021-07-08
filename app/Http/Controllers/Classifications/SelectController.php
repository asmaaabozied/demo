<?php

namespace App\Http\Controllers\Classifications;

use App\Models\Classification;
use App\Models\Country;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Offer;
use Illuminate\Routing\Controller;
use App\Http\Filters\Classifications\SelectFilter;
use App\Http\Resources\Classifications\SelectResource;
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
     * @param \App\Http\Filters\Classifications\SelectFilter $filter
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
        $classifications = Classification::where('country_id', $country)->filter($filter)->paginate();

        return SelectResource::collection($classifications);

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
        $classifications = Classification::where('country_id', $country)->parentsOnly()->filter($filter)->paginate();
        $classification_slider = Slider::where(['country_id'=>$country, 'active' => true])->get();

        return [
            'sliders' => SelectResource::collection($classification_slider),
            'data' => SelectResource::collection($classifications)
        ];
    }

    public function products($classification_id, SelectFilter $filter)
    {
        if($classification_id) {
            $country = Country::where('code', request()->header('accept-country', request('country')))->firstOrFail();
            $products = Product::whereIn(
                    'classification_id',
                    Classification::where('country_id', $country->id)->pluck('id')
                );
            if($classification_id==2000 || $classification_id==3000) {
                if($classification_id==2000) {
                    //best sellers
                    $products = (clone $products)->filter($filter)->paginate();
                    return ProductResource::collection($products);

                } elseif($classification_id==3000) {
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
                $classification = Classification::find($classification_id);
                if($classification) {
                    $products = (clone $products)->where('classification_id', $classification_id)->filter($filter)->paginate();
                    return ProductResource::collection($products);
                } else {
                    throw ValidationException::withMessages([
                        'classification_id' => [trans('validation.custom.classification.error')],
                    ]);
                }
            }
        } else {
            throw ValidationException::withMessages([
                'classification_id' => [trans('validation.custom.classification.required')],
            ]);
        }
    }

}
