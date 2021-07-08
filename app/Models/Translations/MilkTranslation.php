<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\MilkTranslation
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MilkTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilkTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilkTranslation query()
 * @mixin \Eloquent
 */
class MilkTranslation extends Model
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
