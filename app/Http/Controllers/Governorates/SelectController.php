<?php

namespace App\Http\Controllers\Governorates;

use App\Models\Area;
use App\Models\Governorate;
use Illuminate\Routing\Controller;
use App\Http\Filters\Governorates\SelectFilter;
use App\Http\Resources\Governorates\AreaSelectResource;
use App\Http\Resources\Governorates\GovernorateSelectResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Governorates\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function governorates(SelectFilter $filter)
    {
        $governorates = Governorate::filter($filter)->paginate();

        return GovernorateSelectResource::collection($governorates);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Governorates\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function areas(SelectFilter $filter)
    {
        $governorates = Area::with('governorate')->filter($filter)->paginate();

        return AreaSelectResource::collection($governorates);
    }
}
