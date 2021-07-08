<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Filters\Currencies\CurrencyFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $code
 * @property bool|null $is_default
 * @property int|null $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CurrencyExchangeRate[] $rates
 * @property-read int|null $rates_count
 * @property-read \App\Models\Translations\CurrencyTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\CurrencyTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static Builder|Currency default()
 * @method static Builder|Currency filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static Builder|Currency listsTranslations($translationField)
 * @method static Builder|Currency newModelQuery()
 * @method static Builder|Currency newQuery()
 * @method static Builder|Currency notTranslatedIn($locale = null)
 * @method static Builder|Currency orWhereTranslation($translationField, $value, $locale = null)
 * @method static Builder|Currency orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Currency orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static Builder|Currency query()
 * @method static Builder|Currency translated()
 * @method static Builder|Currency translatedIn($locale = null)
 * @method static Builder|Currency whereCode($value)
 * @method static Builder|Currency whereCountryId($value)
 * @method static Builder|Currency whereCreatedAt($value)
 * @method static Builder|Currency whereId($value)
 * @method static Builder|Currency whereIsDefault($value)
 * @method static Builder|Currency whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static Builder|Currency whereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Currency whereUpdatedAt($value)
 * @method static Builder|Currency withTranslation()
 * @mixin \Eloquent
 */
class Currency extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Filterable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name', 'symbol'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = CurrencyFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'code',
        'country_id',
        'is_default',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_default' => 'boolean',
    ];

    /**
     * Retrieve all the currency rates.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rates()
    {
        return $this->hasMany(CurrencyExchangeRate::class, 'currency_from');
    }

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Handle saving event, it fire when creating and updating.
        static::saving(function (self $currency) {
            // Determine default currency if not exists.
            if (self::where('is_default', true)->doesntExist()) {
                $currency->forceFill(['is_default' => true]);
            }

            // If other currency marked as default, replace the default currency with it.
            if ($currency->is_default) {
                Country::withoutEvents(function () {
                    Country::where('is_default', true)->update([
                        'is_default' => null,
                    ]);
                });

                $currency->forceFill(['is_default' => true]);
            }
        });
    }

    /**
     * Scope the query to include only default currency.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefault(Builder $builder)
    {
        return $builder->where('is_default', true);
    }
}
