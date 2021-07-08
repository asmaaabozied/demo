<?php

namespace App\Http\Controllers\Countries;

use App\Models\City;
use App\Models\Area;
use App\Models\Country;
use Illuminate\Routing\Controller;
use App\Http\Filters\Countries\SelectFilter;
use App\Http\Resources\Countries\CitySelectResource;
use App\Http\Resources\Countries\CountrySelectResource;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Countries\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function countries(SelectFilter $filter)
    {
        $countries = Country::filter($filter)->paginate();

        return CountrySelectResource::collection($countries);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Countries\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function cities(Request $request, SelectFilter $filter)
    {
        if($request->has('country_id')) {
            $countries = City::where('country_id', $request->country_id)->filter($filter)->paginate();
        } else {
            $countries = City::with('country')->filter($filter)->paginate();
        }

        return CitySelectResource::collection($countries);
    }

    public function getAreas($governorate)
    {
        $areas = Area::where('governorate_id', $governorate)->get();

        foreach($areas as $area) {
            echo '<option value="">'.__('orders.attributes.area').'</option>';
            echo '<option value="'.$area->id.'">'.$area->name.'</option>';
        }
    }

    public function calculateShipping($area)
    {
        $area = Area::where('id', $area)->first();
        return [
            'area' => $area->name,
            'price' => price2($area->shipping_price),
            'formatted' => price($area->shipping_price),
            'total_formatted' => price(app('cart')->getTotal()+$area->shipping_price-app('cart')->getDiscount()),
        ];
    }
}
