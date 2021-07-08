<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\Governorates\GovernorateFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Governorate
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Area[] $areas
 * @property-read int|null $areas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Translations\GovernorateTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\GovernorateTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static Builder|Governorate default()
 * @method static Builder|Governorate filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static Builder|Governorate listsTranslations($translationField)
 * @method static Builder|Governorate newModelQuery()
 * @method static Builder|Governorate newQuery()
 * @method static Builder|Governorate notTranslatedIn($locale = null)
 * @method static Builder|Governorate orWhereTranslation($translationField, $value, $locale = null)
 * @method static Builder|Governorate orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Governorate orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static Builder|Governorate query()
 * @method static Builder|Governorate sortingByIds($ids)
 * @method static Builder|Governorate translated()
 * @method static Builder|Governorate translatedIn($locale = null)
 * @method static Builder|Governorate whereCreatedAt($value)
 * @method static Builder|Governorate whereId($value)
 * @method static Builder|Governorate whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static Builder|Governorate whereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Governorate whereUpdatedAt($value)
 * @method static Builder|Governorate withTranslation()
 * @mixin \Eloquent
 */
class Governorate extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia, HasUploader, Filterable, Selectable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];

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
    protected $filter = GovernorateFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    /**
     * Retrieve all the governorate's categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany(Category::class, 'governorate_id');
    }

    /**
     * Retrieve all the governorate's merchants.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function merchants()
    {
        return $this->hasMany(Merchant::class, 'governorate_id');
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
            ->useFallbackUrl('https://www.governorateflags.io/'.$this->code.'/shiny/64.png')
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

    }

    /**
     * Scope the query to include only default governorate.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefault(Builder $builder)
    {
        return $builder->where('is_default', true);
    }
}
