<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Tester;
use App\Models\HomeOffer;
use App\Models\Page;
use App\Models\Location;
use App\Models\User;
use App\Support\Cache\CacheFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laraeast\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Country|null $country
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('frontend.index', compact('categories'));
    }


//    public function index(Country $country = null)
//    {
//        if (request('payment') == 'success') {
//            Order::where('id', request('order_id'))->update([
//                'payment_id' => request('paymentId'),
//            ]);
//        } else {
//            Order::where('id', request('order_id'))->delete();
//        }
//        if ($country) {
//            session()->put('country', $country->code);
//
//            return back();
//        }
//        $country = $country ?: Country::default()->firstOrFail();
//
//        $products = Product::filter()
//            ->whereIn(
//                'category_id',
//                Category::where('country_id', $country->id)->pluck('id')
//            );
//        $bestSellerProducts = (clone $products)->paginate(10);
//        $outOfStockProducts = (clone $products)->where('in_stock', false)->paginate(10);
//        $featuredProducts = (clone $products)->paginate(10);
//        $latestProducts = (clone $products)->latest()->limit(3)->paginate();
//        $collections = Collection::latest()->paginate();
//        $testers = Tester::latest()->paginate();
//
//        $offers = Offer::where('from', '<=', date('Y-m-d H:i:s'))
//                ->where('to', '>=', date('Y-m-d H:i:s'))
//                ->where('target_type', 'App\Models\Product')
//                ->latest()->paginate();
//
//        $slider = optional(Settings::instance('slider'))->getMedia('slider') ?: collect();
//
//        $home_offers = HomeOffer::get();
//
//        return view('home', get_defined_vars());
//    }

    public function shop()
    {
        $products = Product::filter()->paginate();

        $slider = optional(Settings::instance('slider'))->getMedia('slider') ?: collect();

        return view('shop', get_defined_vars());
    }

    public function page($id, $slug = null)
    {
        $page = Page::findOrFail($id);
        return view('page', compact('page'));
    }

    public function bestSellers()
    {
        $country = Country::default()->firstOrFail();
        $main_products = Product::filter()
            ->whereIn(
                'category_id',
                Category::where('country_id', $country->id)->pluck('id')
            );

        if (request()->get('min') != "" && request()->get('max') != "") {
            $min_price = request()->get('min');
            $max_price = request()->get('max');
            $products = (clone $main_products)->whereBetween('price', [$min_price, $max_price])->paginate();
        } else {
            $products = (clone $main_products)->paginate();
        }
        $title = __('Best Seller');
        return view('products', get_defined_vars());
    }

    public function offers()
    {
        $country = Country::default()->firstOrFail();
        if (request()->get('min') != "" && request()->get('max') != "") {
            $min_price = request()->get('min');
            $max_price = request()->get('max');
            $products = Offer::where('from', '<=', date('Y-m-d H:i:s'))
                ->where('to', '>=', date('Y-m-d H:i:s'))
                ->where('target_type', 'App\Models\Product')
                ->whereBetween('price', [$min_price, $max_price])
                ->latest()->paginate();
        } else {
            $products = Offer::where('from', '<=', date('Y-m-d H:i:s'))
                ->where('to', '>=', date('Y-m-d H:i:s'))
                ->where('target_type', 'App\Models\Product')
                ->latest()->paginate();
        }
        $title = __('offers.plural');
        $page = 'offers';
        return view('products', get_defined_vars());
    }

    public function outOfStock()
    {
        $country = Country::default()->firstOrFail();
        $main_products = Product::filter()
            ->whereIn(
                'category_id',
                Category::where('country_id', $country->id)->pluck('id')
            );

        if (request()->get('min') != "" && request()->get('max') != "") {
            $min_price = request()->get('min');
            $max_price = request()->get('max');
            $products = (clone $main_products)->where('in_stock', false)->whereBetween('price', [$min_price, $max_price])->paginate();
        } else {
            $products = (clone $main_products)->where('in_stock', false)->paginate();
        }
        return view('out-of-stock', get_defined_vars());
    }

    public function search(Request $request)
    {
        $products = Product::filter()->paginate();
        return view('search', get_defined_vars());
    }

    public function location(Request $request)
    {
        $locations = Location::get();
        return view('frontend.location', ['locations' => $locations]);
    }
}
