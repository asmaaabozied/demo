<?php

namespace App\Http\Resources\Cart;

use App\Models\Size;
use App\Support\Money;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Products\ProductResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'item' => new ProductResource($this->product),
            'qty' => $this->qty,
            'price' => Money::make($this->price),
            'total' => Money::make($this->total),
        ];
    }
}
