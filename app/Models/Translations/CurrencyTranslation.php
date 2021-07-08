<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\CurrencyTranslation
 *
 * @property int $id
 * @property int $currency_id
 * @property string|null $name
 * @property string|null $symbol
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereSymbol($value)
 * @mixin \Eloquent
 */
class CurrencyTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'symbol'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
