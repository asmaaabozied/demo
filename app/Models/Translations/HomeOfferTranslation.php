<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\HomeOfferTranslation
 *
 * @property int $id
 * @property int $home_offer_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereHomeOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOfferTranslation whereName($value)
 * @mixin \Eloquent
 */
class HomeOfferTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'meta_description',
        'meta_keywords',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
