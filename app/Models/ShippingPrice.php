<?php

namespace App\Models;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use App\Http\Resources\MediaResource;
use App\Models\Concerns\HasOffers;
use App\Models\Relations\CategoryRelations;
use App\Models\Scopes\CategoryScopes;
use App\Support\Traits\Selectable;
use App\Http\Filters\ShippingPrices\ShippingPriceFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\ShippingPrice
 *
 * @property int $id
 * @property int $shipping_company_id
 * @property int $country_id
 * @property string|null $first_price
 * @property string|null $second_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ShippingCompany $company
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereFirstPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereSecondPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereShippingCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingPrice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShippingPrice extends Model implements TranslatableContract, HasMedia
{
    use HasFactory;
    use Filterable;
    use Selectable;
    use Translatable;

    use InteractsWithMedia;
    use HasUploader;
    use CategoryRelations;

    use CategoryScopes;
    use HasOffers;

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = ShippingPriceFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'country_id',
        'first_price',
        'second_price',
        'status',
        'is_defaut'
    ];
    public $translatedAttributes = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(ShippingCompany::class, 'shipping_company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function getMediaResource($collection = 'default')
    {
        return collect(
            MediaResource::collection(
                $this->getMedia($collection)
            )->jsonSerialize()
        );
    }
}
