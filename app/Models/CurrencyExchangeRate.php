<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\CurrencyExchangeRate
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $day
 * @property int $currency_from
 * @property int $currency_to
 * @property float $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Currency $currency
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereCurrencyFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereCurrencyTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyExchangeRate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CurrencyExchangeRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'day',
        'rate',
        'currency_from',
        'currency_to',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'day' => 'date',
    ];

    /**
     * Retrieve the related currency.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_from');
    }
}
