<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accounts\account;
use App\Http\Requests\Accounts\AddressesRequest;
use App\Http\Requests\Accounts\FrontUserRequest;
use App\Http\Requests\Auth\Login;
use App\Models\Address;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Prdouct_user;
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

class LoginController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Country|null $country
     * @return \Illuminate\Http\Response
     */
    public function registers(FrontUserRequest $request)
    {

        $user = User::create($request->except('password') + ['type' => 'customer']);
        $user['password'] = bcrypt($request->password);
        Auth::login($user, true);


        return redirect('/');


    }

    public function register()
    {
        return view('auth.register');

    }

    public function login()
    {
        return view('frontend.login');


    }









    public function logins(\App\Http\Requests\Accounts\Login $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('/');

        }

    }



    public function productall($id)
    {
        $catogery = Category::find($id);

        $products = $catogery->products;

        return view('frontend.products', compact('products'));
    }

    public function detailproduct($id)
    {

        $product = Product::find($id);

        return view('frontend.detailproduct', compact('product'));


    }









}
