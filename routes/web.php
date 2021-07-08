<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Countries\SelectController as CountrySelectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    Artisan::call('config:cache');
    Artisan::call('optimize:clear');

    Artisan::call('serve');

    return "Cache is cleared";
});
Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->group(function () {
    Auth::routes();

    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);
    Route::post('/cart', [\App\Http\Controllers\CartController::class, 'add']);
    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'show']);
    Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store']);
    Route::get('/pay', [\App\Http\Controllers\OrderController::class, 'pay']);
    Route::get('order status', function () {
        return view('frontend.order status');

    })->name('order status')->middleware(['auth:web']);
    Route::get('pickup', function () {
        return view('frontend.pickup');

    })->name('pickup');
    Route::get('productall/favouritproduct/{id}', [\App\Http\Controllers\AuthController::class, 'favouritproduct'])->name('productall.favouritproduct');


    Route::get('/getcities/{id}', [\App\Http\Controllers\AuthController::class, 'getcities'])->name('getcities');

    Route::get('/favouritproduct/{id}', [\App\Http\Controllers\AuthController::class, 'favouritproduct'])->name('favouritproduct');
    Route::get('/logins', [\App\Http\Controllers\LoginController::class, 'login'])->name('logins');

//    Route::post('/post-logins', [\App\Http\Controllers\Auth\LoginController::class, 'postLogins'])->name('post_logins');
    Route::middleware('auth:sanctum')->put('profile-update', [\App\Http\Controllers\UserController::class, 'update'])->name('profile_update');

//    Route::post('/post-login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post_login');
    Route::post('/registers', [\App\Http\Controllers\LoginController::class, 'registers'])->name('registerss');
    Route::get('/registers', [\App\Http\Controllers\LoginController::class, 'register'])->name('registers');

    Route::post('/logins', [\App\Http\Controllers\LoginController::class, 'logins'])->name('loginss');
    Route::get('/logouts', [\App\Http\Controllers\AuthController::class, 'logouts'])->name('logouts');
    Route::get('/profile', [\App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/account', [\App\Http\Controllers\AuthController::class, 'account'])->name('account');
    Route::get('/createaddresss', [\App\Http\Controllers\AuthController::class, 'createaddresss'])->name('createaddresss');
    Route::post('/createaddress', [\App\Http\Controllers\AuthController::class, 'createaddress'])->name('createaddress');

    Route::get('/showaddress', [\App\Http\Controllers\AuthController::class, 'showaddress'])->name('showaddress');
    Route::get('/editaddress/{id}/edit', [\App\Http\Controllers\AuthController::class, 'editaddress'])->name('editaddress.edit');
    Route::post('/editaddress/{id}/update', [\App\Http\Controllers\AuthController::class, 'updateaddress'])->name('editaddress.update');
    Route::get('/deleteaddress/{id}/delete', [\App\Http\Controllers\AuthController::class, 'deleteaddress'])->name('deleteaddress.delete');

    Route::get('/productall/{id}', [\App\Http\Controllers\LoginController::class, 'productall'])->name('productall');
    Route::get('/detailproduct/{id}', [\App\Http\Controllers\LoginController::class, 'detailproduct'])->name('detailproduct');
    Route::get('/favoriteproduct', [\App\Http\Controllers\AuthController::class, 'favoriteproduct'])->name('favoriteproduct');
    Route::get('/deleteproduct/{id}/delete', [\App\Http\Controllers\AuthController::class, 'deleteproduct'])->name('deleteproduct.delete');
    Route::get('/myorder', [\App\Http\Controllers\AuthController::class, 'myorder'])->name('myorder');
    Route::get('/location', [\App\Http\Controllers\HomeController::class, 'location'])
        ->name('front.location');
    Route::get('/search', function () {

        return view('frontend.search');

    })->name('search');

    Route::post('/updateprofile', [\App\Http\Controllers\AuthController::class, 'updateprofile'])->name('updateprofile');


    Route::get('/login/social/{provider}', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login.social');
    Route::get('/login/social/redirect/{provider}', [\App\Http\Controllers\Auth\LoginController::class, 'handleRedirectCallback']);


    Route::delete('/cart', [\App\Http\Controllers\CartController::class, 'destroy']);
    Route::post('/cart', [\App\Http\Controllers\CartController::class, 'add']);
    Route::put('/cart/update', [\App\Http\Controllers\CartController::class, 'update']);
     Route::get('/calculate-shipping/{id}', [CountrySelectController::class, 'calculateShipping']);


});

//Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
//    ->prefix(LaravelLocalization::setLocale())->group(function () {
//        Route::middleware('auth:sanctum')->get('wishlist', [\App\Http\Controllers\UserController::class, 'wishlist']);
//        Route::middleware('auth:sanctum')->put('profile-update', [\App\Http\Controllers\UserController::class, 'update'])->name('profile_update');
//        Route::middleware('auth:sanctum')->get('orders', [\App\Http\Controllers\OrderController::class, 'index']);
//        Route::middleware('auth:sanctum')->get(
//            'orders/{order}',
//            [\App\Http\Controllers\OrderController::class, 'show']
//        );
//        Route::middleware('auth:sanctum')->get(
//            'orders/{order}/pay',
//            [\App\Http\Controllers\OrderController::class, 'pay']
//        );
//
//        Route::get('/pay', [\App\Http\Controllers\OrderController::class, 'pay']);
//        Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'show']);
//        Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store']);
//        Route::get('/order-done', [\App\Http\Controllers\CheckoutController::class, 'orderDone'])->name('order-done');
//        Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);
//        Route::post('/cart', [\App\Http\Controllers\CartController::class, 'add']);
//        Route::put('/cart/update', [\App\Http\Controllers\CartController::class, 'update']);
//        Route::delete('/cart', [\App\Http\Controllers\CartController::class, 'destroy']);
//        Route::post('coupons', [\App\Http\Controllers\CouponController::class, 'apply']);
//        Route::get('/re-order/{order}', [\App\Http\Controllers\CartController::class, 'reOrder']);
//
//        Route::get('location', [\App\Http\Controllers\HomeController::class, 'location'])
//        ->name('front.location');
//
//        Route::get('search/product', [\App\Http\Controllers\HomeController::class, 'search'])
//        ->name('front.search');
//
//        Route::get('/shop', [\App\Http\Controllers\HomeController::class, 'shop']);
//        Route::get('/{country:code?}', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//        Route::get('currencies/{currency}', [\App\Http\Controllers\CurrencyController::class, 'change']);
//        Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])
//            ->name('web.categories.show');
//        Route::get('/classifications/{classification}', [\App\Http\Controllers\ClassificationController::class, 'show'])
//            ->name('web.classifications.show');
//        Route::get('/brands/{brand}', [\App\Http\Controllers\BrandController::class, 'show'])
//            ->name('web.brands.show');
//        Route::get('/products/{product}', [\App\Http\Controllers\ProductController::class, 'show'])
//            ->name('web.products.show');
//        Route::get('/collections', [\App\Http\Controllers\CollectionController::class, 'index'])
//            ->name('web.collections.index');
//        Route::get('/collections/{collection}', [\App\Http\Controllers\CollectionController::class, 'show'])
//            ->name('web.collections.show');
//        Route::get('/testers/{tester}', [\App\Http\Controllers\TesterController::class, 'show'])
//            ->name('web.testers.show');
//
//        Route::post(
//            'products/{product}/add-to-favorite',
//            [\App\Http\Controllers\ProductController::class, 'addToFavorite']
//        )
//            ->name('products.favorites.add');
//
//        Route::delete(
//            'products/{product}/remove-from-favorite',
//            [\App\Http\Controllers\ProductController::class, 'removeFromFavorite']
//        )
//            ->name('products.favorites.remove');
//
//        Route::get('best-sellers/1', [\App\Http\Controllers\HomeController::class, 'bestSellers'])
//        ->name('front.best-sellers');
//
//        Route::get('offers/1', [\App\Http\Controllers\HomeController::class, 'offers'])
//        ->name('front.offers');
//
//        Route::get('out-of-stock/1', [\App\Http\Controllers\HomeController::class, 'outOfStock'])
//        ->name('front.out-of-stock');
//
//        Route::get('page/{id}/{slug?}', [\App\Http\Controllers\HomeController::class, 'page'])
//        ->name('front.page');
//
//        Route::post('/add-product-review', [\App\Http\Controllers\ProductController::class, 'addReview'])->name('write_review');
//
//        Route::get('/select/areas/{id}', [CountrySelectController::class, 'getAreas']);
//
//        Route::get('/calculate-shipping/{id}', [CountrySelectController::class, 'calculateShipping']);
//
//    //social login google
//    Route::get('/login/social/{provider}', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
//    Route::get('/login/social/redirect/{provider}', [\App\Http\Controllers\Auth\LoginController::class, 'handleRedirectCallback']);
//    });

