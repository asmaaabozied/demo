<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Collection;
use App\Support\Cache\CacheFactory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $categories = CacheFactory::make('categories')
                ->get(country()->id.'.categories', function () {
                    return country()
                        ->categories()
                        ->parentsOnly()
                        ->where('display_in_navbar', true)
                        ->orderBy('order', 'asc')
                        ->get();
                });

            $brands = Brand::all();
            $all_collections = Collection::latest()->paginate();
            $collections = Collection::where('active', true)->latest()->paginate();
            if(auth()->check()) {
                $favoriteProducts = auth()->user()->favorites()->latest()->paginate();
                $num_favorites = auth()->user()->favorites()->count();
            }else {
                $favoriteProducts = [];
                $num_favorites = 0;
            }

            $view->with(compact('categories', 'brands', 'collections', 'all_collections', 'favoriteProducts', 'num_favorites'));
        });
    }
}
