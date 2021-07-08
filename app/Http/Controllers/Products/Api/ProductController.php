<?php

namespace App\Http\Controllers\Products\Api;

use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Routing\Controller;
use App\Http\Resources\Products\ProductResource;
use App\Http\Resources\Products\ProductDetailsResource;
use App\Http\Resources\Products\ProductReviewResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $products = Product::where('in_stock', true)->filter()->paginate();

        return ProductResource::collection($products);
    }

    /**
     * Display the specified product.
     *
     * @param \App\Models\Product $product
     * @return \App\Http\Resources\Products\ProductResource
     */
    public function show(Product $product)
    {
        return new ProductDetailsResource($product->load('category'));
    }

    public function addReview(Request $request)
    {
        $product = Product::findOrfail($request->product_id);
        $review = ProductReview::create($request->all());

        return $review;
    }

    public function getReviews(Request $request)
    {
        $product = Product::findOrfail($request->product_id);
        $reviews = ProductReview::where('product_id', $request->product_id)->get();

        return ProductReviewResource::collection($reviews);
    }
}
