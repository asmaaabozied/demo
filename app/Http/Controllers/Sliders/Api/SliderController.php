<?php

namespace App\Http\Controllers\Sliders\Api;

use App\Models\Country;
use Illuminate\Routing\Controller;
use App\Http\Resources\Sliders\SliderResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SliderController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the sliders.
     *
     * @param \App\Models\Slider $country
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Country $country)
    {
        $sliders = $country->sliders()->filter()->paginate();

        return SliderResource::collection($sliders);
    }

    /**
     * Display the specified slider.
     *
     * @param \App\Models\Slider $country
     * @param mixed $slider
     * @return \App\Http\Resources\Sliders\SliderResource
     */
    public function show(Country $country, $slider)
    {
        return new SliderResource(
            $country->sliders()->findOrFail($slider)
        );
    }
}
