<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\LocationTranslation
 *
 * @property int $id
 * @property int $location_id
 * @property string|null $name
 * @property string|null $address
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LocationTranslation whereName($value)
 * @mixin \Eloquent
 */
class LocationTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
