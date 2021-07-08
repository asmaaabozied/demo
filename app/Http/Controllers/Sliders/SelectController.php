<?php

namespace App\Http\Controllers\Sliders;

use App\Models\Slider;
use Illuminate\Routing\Controller;
use App\Http\Filters\Sliders\SelectFilter;
use App\Http\Resources\Sliders\SelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Sliders\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $sliders = country()->sliders()->leafsOnly()->filter($filter)->paginate();

        return SelectResource::collection($sliders);
    }
}
