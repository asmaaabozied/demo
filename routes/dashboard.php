<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Accounts\Dashboard\AdminController;
use App\Http\Controllers\Countries\Dashboard\CityController;
use App\Http\Controllers\Governorates\Dashboard\AreaController;
use App\Http\Controllers\Accounts\Dashboard\AddressController;
use App\Http\Controllers\Products\Dashboard\ProductController;
use App\Http\Controllers\Accounts\Dashboard\CustomerController;
use App\Http\Controllers\Countries\Dashboard\CountryController;
use App\Http\Controllers\Governorates\Dashboard\GovernorateController;
use App\Http\Controllers\Locations\Dashboard\LocationController;
use App\Http\Controllers\Milks\Dashboard\MilkController;
use App\Http\Controllers\Categories\Dashboard\ProducttypeController;
use App\Http\Controllers\Classifications\Dashboard\ClassificationController;
use App\Http\Controllers\HomeOffers\Dashboard\HomeOffersController;
use App\Http\Controllers\Currencies\Dashboard\CurrencyController;
use App\Http\Controllers\Currencies\Dashboard\CurrencyRateController;
use App\Http\Controllers\Sliders\Dashboard\SliderController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', [LocaleController::class, 'update'])
    ->name('locale')
    ->where('locale', '(ar|en)');

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::prefix('accounts')->group(function () {
    Route::resource('admins', AdminController::class);
    Route::resource('customers', CustomerController::class);
    Route::post('customers/send-push/1', [CustomerController::class, 'sendPush']);
    Route::resource('customers.addresses', AddressController::class);
});

// Settings
Route::resource('settings', SettingController::class)->only('index', 'store');

// Countries
Route::resource('countries', CountryController::class);
Route::resource('countries.cities', CityController::class)->except('create', 'show');

// Governorates
Route::resource('governorates', GovernorateController::class);
Route::resource('governorates.areas', AreaController::class)->except('create', 'show');

// Locations
Route::resource('locations', LocationController::class);


// Currencies
Route::resource('currencies', CurrencyController::class);
Route::resource('currencies.rates', CurrencyRateController::class)->except('create', 'show');

// Categories
Route::resource('categories', App\Http\Controllers\Categories\Dashboard\CategoryController::class);
Route::delete('categories/status/{id}', 'App\Http\Controllers\Categories\Dashboard\CategoryController@status')->name('categories.status');
Route::delete('categories/deletes/{id}', 'App\Http\Controllers\Categories\Dashboard\CategoryController@destroy')->name('categories.deletes');


// Classifications
Route::resource('classifications', ClassificationController::class);


// HomeOffersController
Route::resource('home-offers', HomeOffersController::class);

Route::delete('deleteAlls', 'App\Http\Controllers\Products\Dashboard\ProductController@deleteAll')->name('deleteAlls');

Route::delete('deleteAllOrders', 'App\Http\Controllers\Orders\Dashboard\OrderController@deleteAllOrders')->name('deleteAllOrders');


Route::delete('deleteAllcatogerries', 'App\Http\Controllers\Categories\Dashboard\CategoryController@deleteAllcatogerries')->name('deleteAllcatogerries');

Route::delete('deleteAllcustomers', 'App\Http\Controllers\Accounts\Dashboard\CustomerController@deleteAllcustomers')->name('deleteAllcustomers');


Route::delete('deleteAllcountries', 'App\Http\Controllers\Countries\Dashboard\CountryController@deleteAllcountries')->name('deleteAllcountries');
Route::delete('deleteAllships', 'App\Http\Controllers\ShippingPrices\Dashboard\ShippingPriceController@deleteAllships')->name('deleteAllships');
Route::delete('deleteAllpages', 'App\Http\Controllers\Pages\Dashboard\PageController@deleteAllpages')->name('deleteAllpages');

Route::delete('deleteAlladmins', 'App\Http\Controllers\Accounts\Dashboard\AdminController@deleteAlladmins')->name('deleteAlladmins');
Route::delete('deleteAllcurrencies', 'App\Http\Controllers\currencies\Dashboard\CurrencyController@deleteAllcurrencies')->name('deleteAllcurrencies');


Route::delete('deleteAlllocations', 'App\Http\Controllers\currencies\Dashboard\CurrencyController@deleteAlllocations')->name('deleteAlllocations');


Route::delete('deleteAlltypeproducts', 'App\Http\Controllers\ProducttypeController@deleteAlltypeproducts')->name('deleteAlltypeproducts');
Route::delete('deleteAllbrands', 'App\Http\Controllers\Brands\Dashboard\BrandController@deleteAllbrands')->name('deleteAllbrands');

Route::delete('deleteattributeproducts', 'App\Http\Controllers\Brands\Dashboard\BrandController@deleteattributeproducts')->name('deleteattributeproducts');


// Products .countries.status currencies deleteAllships
Route::resource('products', ProductController::class);
Route::post('searchproduct', 'App\Http\Controllers\Products\Dashboard\ProductController@searchproduct')->name('searchproduct');
Route::delete('products/status/{id}', 'App\Http\Controllers\Products\Dashboard\ProductController@status')->name('products.status');
Route::delete('countries/status/{id}', 'App\Http\Controllers\countries\Dashboard\CountryController@status')->name('countries.status');
Route::delete('currencies/status/{id}', 'App\Http\Controllers\currencies\Dashboard\CurrencyController@status')->name('currencies.status');


Route::delete('shipping_prices/status/{id}', 'App\Http\Controllers\ShippingPrices\Dashboard\ShippingPriceController@status')->name('shipping_prices.status');

Route::delete('customers/destroy/{id}', 'App\Http\Controllers\Accounts\Dashboard\CustomerController@destroy')->name('customers.destroy');


Route::post('deleteall/{id}', 'ProductController@deleteall')->name('deleteall');

// Productstype
Route::resource('producttypes', \App\Http\Controllers\ProducttypeController::class);

Route::resource('attributeproducts', \App\Http\Controllers\ProductattributeController::class);


Route::resource('milks', MilkController::class);

Route::resource('brands', \App\Http\Controllers\Brands\Dashboard\BrandController::class);

// Sliders
Route::resource('sliders', SliderController::class);
Route::post('orders/search', 'App\Http\Controllers\Orders\Dashboard\OrderController@search')->name('orders.search');
Route::delete('orders/delete/{id}', [\App\Http\Controllers\Orders\Dashboard\OrderController::class, 'destroy'])->name('orders.delete');
Route::delete('orders/status/{id}', 'App\Http\Controllers\Orders\Dashboard\OrderController@status')->name('orders.status');

Route::resource('orders', \App\Http\Controllers\Orders\Dashboard\OrderController::class);
Route::get('orders/{id}/invoice', [\App\Http\Controllers\Orders\Dashboard\OrderController::class, 'invoice'])->name('invoice');
Route::resource('offers', \App\Http\Controllers\Offers\Dashboard\OfferController::class);
Route::resource('coupons', \App\Http\Controllers\Coupons\Dashboard\CouponController::class);
Route::resource('collections', \App\Http\Controllers\Collections\Dashboard\CollectionController::class);
Route::resource('testers', \App\Http\Controllers\Testers\Dashboard\TesterController::class);
Route::resource('pages', \App\Http\Controllers\Pages\Dashboard\PageController::class);
Route::resource('sizes', \App\Http\Controllers\Sizes\Dashboard\SizeController::class);
Route::resource('shipping_companies', \App\Http\Controllers\ShippingCompanies\Dashboard\ShippingCompanyController::class);
Route::resource('shipping_prices', \App\Http\Controllers\ShippingPrices\Dashboard\ShippingPriceController::class);
