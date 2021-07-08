<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\GovernorateTranslation
 *
 * @property int $id
 * @property int $governorate_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation whereGovernorateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateTranslation whereName($value)
 * @mixin \Eloquent
 */
class GovernorateTranslation extends Model
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
