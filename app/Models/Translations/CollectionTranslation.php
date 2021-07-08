<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\CollectionTranslation
 *
 * @property int $id
 * @property int $collection_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation whereCollectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionTranslation whereName($value)
 * @mixin \Eloquent
 */
class CollectionTranslation extends Model
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
