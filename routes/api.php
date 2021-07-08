<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwaggerController;
use App\Http\Controllers\Accounts\Api\LoginController;
use App\Http\Controllers\Products\Api\ProductController;
use App\Http\Controllers\Accounts\Api\ProfileController;
use App\Http\Controllers\Accounts\Api\RegisterController;
use App\Http\Controllers\Countries\Api\CountryController;
use App\Http\Controllers\Categories\Api\CategoryController;
use App\Http\Controllers\Classifications\Api\ClassificationController;
use App\Http\Controllers\Currencies\Api\CurrencyController;
use App\Http\Controllers\Accounts\Api\ResetPasswordController;
use App\Http\Controllers\Accounts\SelectController as AccountSelectController;
use App\Http\Controllers\Countries\SelectController as CountrySelectController;
use App\Http\Controllers\Locations\SelectController as LocationSelectController;
use App\Http\Controllers\Categories\SelectController as CategorySelectController;
use App\Http\Controllers\Classifications\SelectController as ClassificationSelectController;
use App\Http\Controllers\Accounts\Api\MyOrderController;
use App\Http\Controllers\Accounts\Api\MyWishlistController;
use App\Http\Controllers\Accounts\Api\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/docs/{file?}', [SwaggerController::class, 'index'])->name('l5-swagger.default.docs');
Route::post('/register', [RegisterController::class, 'register'])->name('sanctum.register');
Route::post('/login', [LoginController::class, 'login'])->name('sanctum.login');
Route::post('/firebase/login', [LoginController::class, 'firebase'])->name('sanctum.login.firebase');
Route::post('/social/login/{provider}', [LoginController::class, 'handleSocialLogin'])->name('sanctum.login.social');

Route::post('/password/forget', [ResetPasswordController::class, 'forget'])->name('api.password.forget');
Route::post('/password/code', [ResetPasswordController::class, 'code'])->name('api.password.code');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('api.password.reset');
Route::get('/select/users', [AccountSelectController::class, 'index'])->name('users.select');

Route::middleware('auth:sanctum')->group(
    function () {
        Route::get('profile', [ProfileController::class, 'show'])->name('api.profile.show');
        Route::post('profile', [ProfileController::class, 'update'])
            ->name('api.profile.update');

        Route::get('my-cart', [\App\Http\Controllers\Accounts\Api\CheckoutController::class, 'myCart']);
        Route::get('/select/payment-methods', [\App\Http\Controllers\Accounts\Api\CheckoutController::class, 'paymentMethods'])->name('shipping_prices.select');
        Route::post('/payment', [\App\Http\Controllers\Accounts\Api\CheckoutController::class, 'makePayment']);

        Route::get('my-orders', [MyOrderController::class, 'index']);

        Route::post('/add-address', [ProfileController::class, 'addAddress']);
        Route::post('/delete-address', [ProfileController::class, 'deleteAddress']);
        Route::post('/update-address', [ProfileController::class, 'updateAddress']);
        Route::get('/my-addresses', [ProfileController::class, 'getAddresses']);
    }
);
Route::post('/checkout', [\App\Http\Controllers\Accounts\Api\CheckoutController::class, 'store']);
// Countries
Route::get('/select/countries', [CountrySelectController::class, 'countries'])->name('countries.select');
Route::get('/select/cities', [CountrySelectController::class, 'cities'])->name('cities.select');
Route::apiResource('countries', CountryController::class)->only('index', 'show');

Route::get('/select/locations', [LocationSelectController::class, 'index'])->name('locations.select');

Route::apiResource('currencies', CurrencyController::class)->only('index', 'show');
Route::get('/select/categories', [CategorySelectController::class, 'index'])->name('categories.select');
Route::get('/select/api/categories', [CategorySelectController::class, 'index_api']);
Route::get('/products/category/{id}', [CategorySelectController::class, 'products']);
Route::get('/menu', [CategorySelectController::class, 'menu']);

Route::get('/select/classifications', [ClassificationSelectController::class, 'index'])->name('classifications.select');
Route::get('/select/api/classifications', [ClassificationSelectController::class, 'index_api']);
Route::get('/products/classification/{id}', [ClassificationSelectController::class, 'products']);

Route::apiResource('categories', CategoryController::class)->only('index', 'show');
Route::apiResource('classifications', ClassificationController::class)->only('index', 'show');
Route::apiResource('/products', ProductController::class)->only('index', 'show');
Route::get('/select/web/products', [\App\Http\Controllers\Products\SelectController::class, 'select'])->name('products.select');
Route::get('/select/products', [\App\Http\Controllers\Products\SelectController::class, 'index']);
Route::get('/filter/products', [\App\Http\Controllers\Products\SelectController::class, 'index']);
Route::post('/search/products', [\App\Http\Controllers\Products\SelectController::class, 'search']);
Route::get('country/default', [CountryController::class, 'default'])->name('countries.default');
Route::apiResource('brands', \App\Http\Controllers\Brands\Api\BrandController::class);
Route::get('/select/brands', [\App\Http\Controllers\Brands\SelectController::class, 'index'])->name('brands.select');
Route::get('/products/brand/{id}', [\App\Http\Controllers\Brands\SelectController::class, 'products']);
Route::apiResource('coupons', \App\Http\Controllers\Coupons\Api\CouponController::class);
Route::get('/select/coupons', [\App\Http\Controllers\Coupons\SelectController::class, 'index']);
Route::post('apply/coupon', [\App\Http\Controllers\Coupons\Api\CouponController::class, 'apply']);
Route::apiResource('collections', \App\Http\Controllers\Collections\Api\CollectionController::class);
Route::get('/select/collections', [\App\Http\Controllers\Collections\SelectController::class, 'index']);
Route::apiResource('testers', \App\Http\Controllers\Testers\Api\TesterController::class);
Route::get('/select/testers', [\App\Http\Controllers\Testers\SelectController::class, 'index']);
Route::apiResource('pages', \App\Http\Controllers\Pages\Api\PageController::class);
Route::get('/select/pages', [\App\Http\Controllers\Pages\SelectController::class, 'index'])->name('pages.select');
Route::apiResource('sizes', \App\Http\Controllers\Sizes\Api\SizeController::class);
Route::get('/select/sizes', [\App\Http\Controllers\Sizes\SelectController::class, 'index'])->name('sizes.select');
Route::apiResource('shipping-companies', \App\Http\Controllers\ShippingCompanies\Api\ShippingCompanyController::class);
Route::get('/select/shipping-companies', [\App\Http\Controllers\ShippingCompanies\SelectController::class, 'index'])->name('shipping_companies.select');
Route::apiResource('shipping-prices', \App\Http\Controllers\ShippingPrices\Api\ShippingPriceController::class);
Route::get('/select/shipping-prices', [\App\Http\Controllers\ShippingPrices\SelectController::class, 'index'])->name('shipping_prices.select');

Route::post('/add-product-review', [ProductController::class, 'addReview']);
Route::get('/get-product-reviews', [ProductController::class, 'getReviews']);

Route::get('/home-api', [\App\Http\Controllers\Api\HomeController::class, 'index']);
