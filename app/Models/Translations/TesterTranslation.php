<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\TesterTranslation
 *
 * @property int $id
 * @property int $tester_id
 * @property string|null $name
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TesterTranslation whereTesterId($value)
 * @mixin \Eloquent
 */
class TesterTranslation extends Model
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
