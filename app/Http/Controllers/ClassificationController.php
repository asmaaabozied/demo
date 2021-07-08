<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Product;
use Illuminate\Routing\Controller;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Classification $classification
     * @return \Illuminate\Http\Response
     */
    public function show(Classification $classification)
    {
        $products = Product::whereHas('classifications', function ($query) use ($classification) {
            $query->where('classification_id', $classification->id);
        });

        $maxPrice = (int) (clone $products)->max('price');

        $maxPrice = $maxPrice == 0 ? 1000 : $maxPrice;
        if(request()->get('min')!="" && request()->get('max')!="") {
            $min_price = request()->get('min');
            $max_price = request()->get('max');
            $products = $products->whereBetween('price', [$min_price, $max_price])->filter()->paginate();
        } else {
            $products = $products->filter()->paginate();
        }

        return view('classifications.show', get_defined_vars());
    }
}
