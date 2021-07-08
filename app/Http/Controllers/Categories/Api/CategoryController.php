<?php

namespace App\Http\Controllers\Categories\Api;

use App\Models\Category;
use App\Models\Country;
use Illuminate\Routing\Controller;
use App\Http\Resources\Categories\CategoryResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $categories = country()->categories()->filter()->paginate();

        return CategoryResource::collection($categories);
    }

    /**
     * Display the specified category.
     *
     * @param \App\Models\Category $category
     * @return \App\Http\Resources\Categories\CategoryResource
     */
    public function show(Category $category)
    {
        return new CategoryResource(
            $category->load('subcategories')
        );
    }
}
