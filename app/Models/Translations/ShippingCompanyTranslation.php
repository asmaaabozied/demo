<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\ShippingCompanyTranslation
 *
 * @property int $id
 * @property int $shipping_company_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompanyTranslation whereShippingCompanyId($value)
 * @mixin \Eloquent
 */
class ShippingCompanyTranslation extends Model
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
