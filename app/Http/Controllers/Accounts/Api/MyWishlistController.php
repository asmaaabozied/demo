<?php

namespace App\Http\Controllers\Accounts\Api;

use App\Models\Order;
use bawes\myfatoorah\MyFatoorah;
use Illuminate\Routing\Controller;
use App\Http\Resources\Products\ProductResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyWishlistController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('viewAny', Order::class);

        $favoriteProducts = auth()->user()->favorites()->latest()->paginate();

        return ProductResource::collection($favoriteProducts);
    }
}
