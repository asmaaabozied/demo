<?php

namespace App\Models;

use App\Http\Filters\producttypes\producttypeFilter;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProducttypeTranslation
 *
 * @property int $id
 * @property int $producttype_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProducttypeTranslation whereProducttypeId($value)
 * @mixin \Eloquent
 */
class ProducttypeTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
