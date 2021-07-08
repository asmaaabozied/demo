<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use App\Http\Filters\ShippingCompanies\ShippingCompanyFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\ShippingCompany
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShippingPrice[] $prices
 * @property-read int|null $prices_count
 * @property-read \App\Models\Translations\ShippingCompanyTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\ShippingCompanyTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany translated()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingCompany withTranslation()
 * @mixin \Eloquent
 */
class ShippingCompany extends Model implements HasMedia, TranslatableContract
{
    use HasFactory;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use Filterable;
    use Selectable;

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
        'name',
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
    protected $filter = ShippingCompanyFilter::class;

    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->singleFile()
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices()
    {
        return $this->hasMany(ShippingPrice::class, 'shipping_company_id');
    }
}
