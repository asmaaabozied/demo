<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Tester;
use App\Models\Slider;
use App\Models\HomeOffer;
use App\Models\Page;
use App\Models\Brand;
use App\Support\Cache\CacheFactory;
use App\Http\Resources\Slider\SliderResource;
use App\Http\Resources\Products\ProductResource;
use App\Http\Resources\Collections\CollectionResource;
use App\Http\Resources\Categories\CategoryResource2;
use App\Http\Resources\Brands\SelectResource as BrandResource;
use App\Http\Resources\Categories\SelectResource as CateoryResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\Controller;
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
    public function index(Request $request)
    {

        $country = Country::where('code', request()->header('accept-country', request('country')))->firstOrFail();
        $products = Product::where('in_stock', true)->filter()
            ->whereIn(
                'category_id',
                Category::where('country_id', $country->id)->pluck('id')
            );
        $bestSellerProducts = (clone $products)->limit(10)->get();
        $featuredProducts = (clone $products)->limit(10)->get();
        $latestProducts = (clone $products)->latest()->limit(10)->get();
        $collections = Collection::latest()->limit(10)->get();
        $testers = Tester::latest()->limit(10)->get();
        $slider = optional(Settings::instance('slider'))->getMedia('slider') ?: collect();
        $brands = Brand::all();

        //$home_offers = HomeOffer::get();
        //$collections = Collection::with('products')->where('active', true)->latest()->limit(10)->get();
        $offers = Offer::where('from', '<=', date('Y-m-d H:i:s'))
                ->where('to', '>=', date('Y-m-d H:i:s'))
                ->where('target_type', 'App\Models\Product')
                ->latest()->limit(10)->get();
        $hf = collect([]);
        foreach($offers as $product) {
            $hf->push($product->target);
        }

        $categories = Category::with('products')->parentsOnly()->where('country_id',$country->id)->get();
        $cats = collect([]);
        foreach($categories as $cat) {
            $dat['title'] = $cat->name;
            $dat['arr'] = ProductResource::collection($cat->products);
            $cats->push($dat);
        }


        $bs = [
            'title' => request()->header('accept-language', request('language'))=="ar" ? 'الأكثر مبيعا' : 'Best Sellers',
            'id' => '2000',
            'arr' => ProductResource::collection($bestSellerProducts)
        ];
        $ho = [
            'title' => request()->header('accept-language', request('language'))=="ar" ? 'العروض' : 'Home Offers',
            'id' => '3000',
            //'arr' => CollectionResource::collection($collections),
            'arr' => ProductResource::collection($hf),
        ];
        $ddd = collect([$ho,$bs]);
        $ccc = CategoryResource2::collection($categories);
        $result = $ddd->merge($ccc);

        return [
            'top_slider'=>SliderResource::collection($slider),
            'data' => $result,
            'brands'=>BrandResource::collection($brands),
        ];
    }

}
