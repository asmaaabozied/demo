<?php

namespace App\Providers;

use App\Models\Country;
use App\Support\Cache\CacheFactory;
use App\Support\Cart;
use App\Support\Money;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\View\Forms\Components\ColorComponent;
use App\View\Forms\Components\PriceComponent;
use Illuminate\Support\Str;
use Laraeast\LaravelBootstrapForms\Facades\BsForm;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        BsForm::registerComponent('price', PriceComponent::class);
        BsForm::registerComponent('color', ColorComponent::class);

        $this->app->bind('cart', function () {
            return new Cart();
        });

        $this->app->singleton('country', function () {
            if ($country = optional(Route::current())->parameter('country')) {
                if ($country instanceof Country) {
                    return $country;
                }
            }
            $clientCountryCode = Str::lower(
                geoip()->getLocation()->getAttribute('iso_code')
            );

            $code = session('country', request()->header('accept-country', $clientCountryCode));

            return Country::whereCode($code)->orWhere('is_default', true)->firstOrNew();
        });

        $this->app->singleton('currency', function () {
            if ($code = session('currency', request()->header('accept-currency', request('currency')))) {
                return \App\Models\Currency::whereCode($code)->firstOrNew();
            }

            return \App\Models\Currency::default()->firstOrNew();
        });

        $this->app->singleton(Money::class, Money::class);

    }

}
