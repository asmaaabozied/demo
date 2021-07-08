<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Http\Resources\MediaResource;
use App\Models\Concerns\HasDiscount;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\Testers\TesterFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Tester
 *
 * @property int $id
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $availableOffer
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\Translations\TesterTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\TesterTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tester filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tester newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tester notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Tester query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tester sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Tester translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Tester whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tester withTranslation()
 * @mixin \Eloquent
 */
class Tester extends Model implements HasMedia, TranslatableContract
{
    use HasFactory;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Selectable;
    use HasDiscount;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'price',
    ];

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
    protected $filter = TesterFilter::class;

    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->registerMediaConversions(function () {
                $this->addMediaConversion('large')
                    ->width(600)
                    ->nonQueued();

                $this->addMediaConversion('medium')
                    ->width(300)
                    ->nonQueued();

                $this->addMediaConversion('thumb')
                    ->width(100)
                    ->nonQueued();
            });
    }

    public function getDashboardUrl()
    {
        return route('dashboard.testers.show', $this);
    }

    public function getWebUrl()
    {
        return url('testers/'.$this->id);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = (float) str_replace(',', '', $value);
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
