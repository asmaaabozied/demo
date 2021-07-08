<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\ClassificationTranslation
 *
 * @property int $id
 * @property int $classification_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereClassificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassificationTranslation whereName($value)
 * @mixin \Eloquent
 */
class ClassificationTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'meta_description',
        'meta_keywords',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
