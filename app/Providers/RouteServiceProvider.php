<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/admin360';

    /**
     * If specified, this namespace is automatically applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = null;

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('dashboard.locales')
                ->middleware('web')
                ->as('dashboard.')
                ->namespace('App\Http\Controllers\Dashboard')
                ->prefix('admin360')
                ->group(function () {
                    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
                    Route::post('login', 'Auth\LoginController@login');
                    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
                    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
                    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
                    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
                    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
                    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
                    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');
                    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
                    Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
                    Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
                });

            Route::prefix('admin360')
                ->middleware('dashboard')
                ->as('dashboard.')
                ->group(base_path('routes/dashboard.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }
}
