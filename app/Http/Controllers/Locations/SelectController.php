<?php

namespace App\Http\Controllers\Locations;

use App\Models\Location;
use Illuminate\Routing\Controller;
use App\Http\Resources\Locations\LocationSelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Locations\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $locations = Location::paginate();

        return LocationSelectResource::collection($locations);
    }
}
