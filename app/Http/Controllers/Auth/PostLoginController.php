<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Auth\Login;
use Auth;
use Hash;
use Str;

class PostLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ], [], trans('dashboard.auth.login'));
    }

    public function redirectPath()
    {
        if (auth()->user()->isAdmin()) {
            return RouteServiceProvider::HOME;
        }

        return '/';
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'type' => User::CUSTOMER_TYPE,
        ];
    }

    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function handleRedirectCallback($provider) {
        $user = Socialite::driver($provider)->user();

        $authUser = User::firstOrCreate([
            'email' => $user->email,
        ],[
            'name' => $user->name,
            'type' => 'customer',
            'password' => Hash::make(Str::random(24))
        ]);
        Auth::login($authUser, true);

        return redirect('/');
    }

    public function postLogin(Login $request)
    {

        if (Auth::attempt(array('email' => $request->input('log_email'), 'password' => $request->input('log_pass')),true)) {
            return response()->json(['status' => 1, 'message' => 'تم تسجيل دخولك بنجاح']);
        }
        return response()->json(['status' => 0, 'message' => 'خطأ في بيانات الدخول']);

    }

}
