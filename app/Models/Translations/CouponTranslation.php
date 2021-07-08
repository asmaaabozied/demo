<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\CouponTranslation
 *
 * @property int $id
 * @property int $coupon_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereName($value)
 * @mixin \Eloquent
 */
class CouponTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
