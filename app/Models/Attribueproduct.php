<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Support\Traits\Selectable;
use App\Http\Filters\Pages\PageFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * App\Models\Attribueproduct
 *
 * @property int $id
 * @property string|null $price
 * @property int|null $producttype_id
 * @property string|null $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Translations\AttribueproductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\AttribueproductTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read \App\Models\Producttype|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct sortingByIds($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereProducttypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribueproduct withTranslation()
 * @mixin \Eloquent
 */
class Attribueproduct extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Filterable;
    use Selectable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    public $translatedAttributes = ['name', 'description'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'size','price','product_id'
    ];

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

    public function type()
    {
        return $this->belongsTo(Producttype::class,'producttype_id')->withDefault();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
