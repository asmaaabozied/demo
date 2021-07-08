<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Models\Concerns\HasOffers;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Models\Scopes\CategoryScopes;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use App\Models\Relations\CategoryRelations;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\Categories\CategoryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\HomeOffer
 *
 * @property int $id
 * @property int|null $country_id
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $availableOffer
 * @property-read \App\Models\Country|null $country
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \App\Models\Category $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $subcategories
 * @property-read int|null $subcategories_count
 * @property-read \App\Models\Translations\HomeOfferTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\HomeOfferTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer leafsOnly()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer parentsOnly()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer translated()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeOffer withTranslation()
 * @mixin \Eloquent
 */
class HomeOffer extends Model implements TranslatableContract, HasMedia
{
    use HasFactory;
    use Filterable;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use CategoryRelations;
    use Selectable;
    use CategoryScopes;
    use HasOffers;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = [
        'name',
        'description',
        'meta_description',
        'meta_keywords',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'order',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = CategoryFilter::class;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
}
