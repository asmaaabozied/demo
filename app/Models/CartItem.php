<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CartItem
 *
 * @property-read Model|\Eloquent $product
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem query()
 * @mixin \Eloquent
 */
class CartItem extends Model
{

    protected $fillable = [
        'qty',
        'price',
        'user_id',
        'size_id',
        'item_id',
        'item_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'item_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function (CartItem $item) {
            if ($item->item) {
                $item->forceFill(['price' => $item->item->getPrice()]);
            }
        });
    }
}
