<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Prdouct_user
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prdouct_user whereUserId($value)
 * @mixin \Eloquent
 */
class Prdouct_user extends Model
{
    use HasFactory;

    protected $table = "product_user";

    protected $guarded = [];
}
