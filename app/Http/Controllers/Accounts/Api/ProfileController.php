<?php

namespace App\Http\Controllers\Accounts\Api;

use Illuminate\Routing\Controller;
use App\Http\Requests\Accounts\Api\ProfileRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\City;
use App\Http\Resources\Orders\AddressResource;

class ProfileController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display the authenticated user resource.
     *
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function show()
    {
        return auth()->user()->getResource();
    }

    /**
     * Update the authenticated user profile.
     *
     * @param \App\Http\Requests\Accounts\Api\ProfileRequest $request
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function update(ProfileRequest $request)
    {
        $user = auth()->user();

        $request['name'] = $request->first_name." ".$request->last_name;
        $user->update($request->allWithHashedPassword());

        $user->addAllMediaFromTokens();

        return $user->getResource();
    }

    public function addAddress(Request $request)
    {
        if($request->has('city_id')) {
            if($request->has('address')) {
                $city = City::find($request->city_id);
                if($city) {
                    $address = auth()->user()->addresses()->create($request->all());
                    return $address;
                } else {
                    throw ValidationException::withMessages([
                        'brand_id' => [trans('validation.custom.city.error')],
                    ]);
                }
            } else {
                throw ValidationException::withMessages([
                    'brand_id' => [trans('validation.custom.address.required')],
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'brand_id' => [trans('validation.custom.city.required')],
            ]);
        }
    }

    public function getAddresses()
    {
        $addresses = auth()->user()->addresses()->with('city')->paginate();

        return AddressResource::collection($addresses);
    }

    public function updateAddress(Request $request)
    {
        $address = Address::where(['id'=> $request->address_id, 'user_id'=> auth()->user()->id])->first();
        if($request->has('address_id')) {
            if($address) {
                $address->update([
                    'address' => $request->address
                ]);
                return $address;
            } else {
                throw ValidationException::withMessages([
                    'brand_id' => [trans('validation.custom.address.error')],
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'brand_id' => [trans('validation.custom.address.required')],
            ]);
        }
    }

    public function deleteAddress(Request $request)
    {
        if($request->has('address_id')) {
            $address = Address::find($request->address_id);
            if($address) {
                $address->delete();
                return [
                    'message' => [trans('validation.custom.address.deleted')],
                ];
            } else {
                throw ValidationException::withMessages([
                    'brand_id' => [trans('validation.custom.address.error')],
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'brand_id' => [trans('validation.custom.address.required')],
            ]);
        }
    }

}
