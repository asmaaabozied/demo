<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\AreaTranslation
 *
 * @property int $id
 * @property int $area_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AreaTranslation whereName($value)
 * @mixin \Eloquent
 */
class AreaTranslation extends Model
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
