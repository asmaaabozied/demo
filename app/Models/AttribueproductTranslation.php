<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AttribueproductTranslation
 *
 * @property int $id
 * @property int $attribueproduct_id
 * @property string|null $name
 * @property string|null $description
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation whereAttribueproductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttribueproductTranslation whereName($value)
 * @mixin \Eloquent
 */
class AttribueproductTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
