<?php

namespace App\Http\Controllers\HomeOffers;

use App\Models\Slider;
use Illuminate\Routing\Controller;
use App\Http\Filters\HomeOffers\SelectFilter;
use App\Http\Resources\HomeOffers\SelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\HomeOffers\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $home_offers = country()->home_offers()->leafsOnly()->filter($filter)->paginate();

        return SelectResource::collection($home_offers);
    }
}
