<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\Countries\CountryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $code
 * @property string $key
 * @property bool|null $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Translations\CountryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\CountryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static Builder|Country default()
 * @method static Builder|Country filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static Builder|Country listsTranslations($translationField)
 * @method static Builder|Country newModelQuery()
 * @method static Builder|Country newQuery()
 * @method static Builder|Country notTranslatedIn($locale = null)
 * @method static Builder|Country orWhereTranslation($translationField, $value, $locale = null)
 * @method static Builder|Country orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Country orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static Builder|Country query()
 * @method static Builder|Country sortingByIds($ids)
 * @method static Builder|Country translated()
 * @method static Builder|Country translatedIn($locale = null)
 * @method static Builder|Country whereCode($value)
 * @method static Builder|Country whereCreatedAt($value)
 * @method static Builder|Country whereId($value)
 * @method static Builder|Country whereIsDefault($value)
 * @method static Builder|Country whereKey($value)
 * @method static Builder|Country whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static Builder|Country whereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Country whereUpdatedAt($value)
 * @method static Builder|Country withTranslation()
 * @mixin \Eloquent
 */
class Country extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia, HasUploader, Filterable, Selectable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name', 'currency'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = CountryFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'code',
        'key',
        'currency',
        'is_default',
        'status',
        'shipping_price2'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_default' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Retrieve all the country's categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany(Category::class, 'country_id');
    }

    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('flags')
            ->useFallbackUrl('https://www.countryflags.io/'.$this->code.'/shiny/64.png')
            ->singleFile();
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
        static::saving(function (Country $country) {
            // Determine default country if not exists.
            if (Country::where('is_default', true)->doesntExist()) {
                $country->forceFill(['is_default' => true]);
            }

            // If other country marked as default, replace the default country with it.
            if ($country->is_default) {
                Country::withoutEvents(function () {
                    Country::where('is_default', true)->update([
                        'is_default' => null,
                    ]);
                });

                $country->forceFill(['is_default' => true]);
            }
        });
    }

    /**
     * Scope the query to include only default country.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefault(Builder $builder)
    {
        return $builder->where('is_default', true);
    }

    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage()
    {
        return request('perPage', parent::getPerPage());
    }
}
