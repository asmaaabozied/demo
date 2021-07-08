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
 * App\Models\Location
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $phone
 * @property string $whatsapp
 * @property string $lat
 * @property string $lng
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Translations\LocationTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\LocationTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static Builder|Location filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static Builder|Location listsTranslations($translationField)
 * @method static Builder|Location newModelQuery()
 * @method static Builder|Location newQuery()
 * @method static Builder|Location notTranslatedIn($locale = null)
 * @method static Builder|Location orWhereTranslation($translationField, $value, $locale = null)
 * @method static Builder|Location orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Location orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static Builder|Location query()
 * @method static Builder|Location sortingByIds($ids)
 * @method static Builder|Location translated()
 * @method static Builder|Location translatedIn($locale = null)
 * @method static Builder|Location whereCreatedAt($value)
 * @method static Builder|Location whereId($value)
 * @method static Builder|Location whereLat($value)
 * @method static Builder|Location whereLng($value)
 * @method static Builder|Location wherePhone($value)
 * @method static Builder|Location whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static Builder|Location whereTranslationLike($translationField, $value, $locale = null)
 * @method static Builder|Location whereUpdatedAt($value)
 * @method static Builder|Location whereWhatsapp($value)
 * @method static Builder|Location withTranslation()
 * @mixin \Eloquent
 */
class Location extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia, HasUploader, Filterable, Selectable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name','address'];

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
        'address',
        'phone',
        'whatsapp',
        'lat',
        'lng',

    ];
}
