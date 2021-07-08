<?php

namespace App\Http\Controllers\Classifications\Api;

use App\Models\Classification;
use App\Models\Country;
use Illuminate\Routing\Controller;
use App\Http\Resources\Classifications\ClassificationResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClassificationController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the classifications.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $classifications = country()->classifications()->filter()->paginate();

        return ClassificationResource::collection($classifications);
    }

    /**
     * Display the specified classification.
     *
     * @param \App\Models\Classification $classification
     * @return \App\Http\Resources\classifications\ClassificationResource
     */
    public function show(Classification $classification)
    {
        return new ClassificationResource(
            $classification->load('subclassifications')
        );
    }
}
