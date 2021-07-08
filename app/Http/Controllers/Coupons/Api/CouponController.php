<?php

namespace App\Http\Controllers\Coupons\Api;

use App\Models\Coupon;
use App\Models\Order;
use Illuminate\Routing\Controller;
use App\Http\Resources\Coupons\CouponResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CouponController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the coupons.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $coupons = Coupon::filter()->paginate();

        return CouponResource::collection($coupons);
    }

    /**
     * Display the specified coupon.
     *
     * @param \App\Models\Coupon $coupon
     * @return \App\Http\Resources\Coupons\CouponResource
     */
    public function show(Coupon $coupon)
    {
        return new CouponResource($coupon);
    }

    public function apply0(Request $request)
    {
        throw ValidationException::withMessages([
            'code' => [
                __('Invalid Coupon!'),
            ],
        ]);
    }
    public function apply(Request $request)
    {
        $total = $request->total;

        $coupon = Coupon::where('code', $request->code)->first();

        if (! $coupon) {
            throw ValidationException::withMessages([
                'code' => [
                    __('Invalid Coupon!'),
                ],
            ]);
        }

        if ($coupon->min_total > $total) {
            throw ValidationException::withMessages([
                'code' => [
                    __('Invalid Coupon!'),
                ],
            ]);
        }

        if ($coupon->usage_count <= Order::where('coupon_id', $coupon->id)->count()) {
            throw ValidationException::withMessages([
                'code' => [
                    __('Invalid Coupon!'),
                ],
            ]);
        }

        if ($coupon->usage_per_user <= Order::where('coupon_id', $coupon->id)->where(
                'user_id',
                auth()->id()
            )->count()) {
            throw ValidationException::withMessages([
                'code' => [
                    __('Invalid Coupon!'),
                ],
            ]);
        }

        if($coupon->discount_type=="percentage") {
            $discount = $total * ((int) $coupon->value) / 100;
        } else {
            $discount = $total - ((int) $coupon->value);
        }

        return [
            'coupon' => [
                'id' => $coupon->id,
                'discount' => $discount,
                'total' => $total - $discount,
            ]
        ];
    }
}
