<?php

namespace App\Http\Controllers\Collections;

use App\Models\Collection;
use Illuminate\Routing\Controller;
use App\Http\Filters\Collections\SelectFilter;
use App\Http\Resources\Collections\CollectionResource;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Filters\Collections\SelectFilter $filter
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(SelectFilter $filter)
    {
        $collections = Collection::filter($filter)->paginate();

        return CollectionResource::collection($collections);
    }
}
