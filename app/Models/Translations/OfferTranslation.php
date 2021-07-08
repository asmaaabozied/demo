<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\OfferTranslation
 *
 * @property int $id
 * @property int $offer_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfferTranslation whereOfferId($value)
 * @mixin \Eloquent
 */
class OfferTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
