<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Http\Requests\Accounts\FrontUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\UserRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FrontUserRequest $request)
    {
        auth()->user()->update($request->allWithHashedPassword());
        //return $request->allWithHashedPassword();

        // $user->addAllMediaFromTokens();

        //flash(trans('customers.messages.updated'));

        //return redirect()->back();
        return response()->json(['status' => 1, 'message' => 'تم تسجيل دخولك بنجاح']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wishlist()
    {
        $favoriteProducts = auth()->user()->favorites()->latest()->paginate();

        return view('users.wishlist', get_defined_vars());
    }
}
