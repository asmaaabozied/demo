<?php

namespace App\Models\Relations;

use App\Models\Product;

trait ProductReviewRelations
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
