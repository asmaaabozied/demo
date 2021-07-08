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

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:web']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Country|null $country
     * @return \Illuminate\Http\Response
     */


    public function profile()
    {
        return view('frontend.profile');


    }

    public function getcities($id)
    {


        $cities = City::where('country_id', $id)->get();


        return response()->json(['status' => 200, 'data' => $cities]);
    }

    public function account()
    {
        $user = User::find(Auth::id());

        return view('frontend.account', compact('user'));


    }

    public function updateprofile(account $request)
    {
        $user = User::find(Auth::id());

        $user->update($request->except('password') + ['type' => 'customer']);
        $user['password'] = bcrypt($request->password);
        return back();

    }


    public function createaddresss()
    {
        return view('frontend.createaddress');


    }

    public function createaddress(AddressesRequest $request)
    {

        $address = Address::create($request->all() + ['user_id' => Auth::id()]);

        return redirect('showaddress');


    }

    public function showaddress()
    {

        $address = Address::where('user_id', Auth::id())->get();


        return view('frontend.showaddress', compact('address'));


    }

    public function editaddress($id)
    {

        $address = Address::find($id);

        return view('frontend.editaddress', compact('address'));


    }

    public function deleteaddress($id)
    {
        $address = Address::find($id);
        $address->delete();

        return back();

    }


    public function favoriteproduct()
    {
        $user = Auth::user();

        $products = $user->products;

        return view('frontend.favoriteproduct', compact('products'));


    }

    public function favouritproduct($id)
    {


        $user_id = Auth::id();

        $users = User::find($user_id);

        $user = $users->products()->toggle($id);

        $status = ($user['attached'] !== []) ? 'added' : 'deleted';

        return response()->json(['status' => $status, 'content' => 'success']);

    }

    public function logouts()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function myorder()
    {

        $orders = Order::whereUserId(Auth::id())->get();


        return view('frontend.myorder', compact('orders'));


    }

    public function deleteproduct($id)
    {

        $product = Product::find($id);


        $products = Prdouct_user::where('user_id', Auth::id())->where('product_id', $id)->first();

        $products->delete();

        return back();
    }


    public
    function updateaddress(AddressesRequest $request, $id)
    {
        $address = Address::find($id);

        $address->update($request->all() + ['user_id' => Auth::id()]);

        return redirect('showaddress');


    }


}
