<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Http\Filters\Products\ProductFilter;
use App\Http\Resources\MediaResource;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Concerns\HasOffers;
use App\Support\Traits\Selectable;
use App\Models\Concerns\HasDiscount;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use App\Models\Relations\ProductRelations;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\Products\producttypeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $price
 * @property bool $in_stock
 * @property bool $exclusive
 * @property string|null $publish_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $brand_id
 * @property int|null $producttype_id
 * @property int|null $quantity
 * @property-read \App\Models\Offer|null $availableOffer
 * @property-read \App\Models\Brand|null $brand
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Classification $classification
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $favorites
 * @property-read int|null $favorites_count
 * @property-read \App\Models\Prdouct_user|null $favourite
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Size[] $sizes
 * @property-read int|null $sizes_count
 * @property-read \App\Models\Translations\ProductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read \App\Models\Producttype|null $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|Product translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Product translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereExclusive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProducttypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePublishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withTranslation()
 * @mixin \Eloquent
 */
class Product extends Model implements HasMedia, TranslatableContract
{
    use HasFactory;
    use ProductRelations;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Translatable;
    use HasDiscount;
    use Selectable;

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
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
        'availableOffer',
        'category.availableOffer',
        'brand.availableOffer',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'in_stock' => 'boolean',
        'exclusive' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id',
        'category_id',
        'price',
        'in_stock',
        'exclusive',
        'price2',
        'visibility',
        'sku',
        'status',
        'quantity'
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = ProductFilter::class;

    /**
     * Define the media collections.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function type()
    {
        return $this->belongsToMany(Producttype::class);
    }

    public function attributeproduct()
    {
        return $this->hasMany(Attribueproduct::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'product_user');
    }

    public function favourite(){
        return $this->hasOne(Prdouct_user::class)->where('user_id',Auth::id());
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->registerMediaConversions(function () {
                $this->addMediaConversion('thumb')
                    ->width(70)
                    ->format('png');

                $this->addMediaConversion('small')
                    ->width(120)
                    ->format('png');

                $this->addMediaConversion('medium')
                    ->width(160)
                    ->format('png');

                $this->addMediaConversion('large')
                    ->width(320)
                    ->format('png');
            });
    }

    public function getDashboardUrl()
    {
        return route('dashboard.products.show', $this);
    }

    public function getWebUrl()
    {
        return url('products/' . $this->id);
    }
    public function getProductUrl()
    {
        return url('detailproduct/' . $this->id);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = (float)str_replace(',', '', $value);
    }

    /**
     * Get all the model media of the given collection using "MediaResource".
     *
     * @param string $collection
     * @return \Illuminate\Support\Collection
     */
    public function getMediaResource($collection = 'default')
    {
        return collect(
            MediaResource::collection(
                $this->getMedia($collection)
            )->jsonSerialize()
        );
    }
}
