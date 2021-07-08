<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $subcategories = Category::where('parent_id', $product->category->parent_id)->latest()->get();
        return view('products.show', get_defined_vars());
    }

    /**
     * Add the specified product to favorite.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function addToFavorite(Request $request, Product $product)
    {
        $this->authorize('addToFavorite', $product);

        $request->user()->favorites()->syncWithoutDetaching($product);

        return back();
    }

    /**
     * Remove the specified product from favorite.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function removeFromFavorite(Request $request, Product $product)
    {
        $this->authorize('removeFromFavorite', $product);

        $request->user()->favorites()->detach($product);

        return back();
    }

    public function addReview(Request $request)
    {
        $product = Product::findOrfail($request->product_id);
        $review = ProductReview::create($request->all());

        flash(__('Review has been added successfully.'));
        return back();
    }
}
