<?php

namespace App\Http\Resources\Products;

use App\Models\Size;
use App\Support\Money;
use Illuminate\Http\Resources\Json\JsonResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'old_price' => ['price'=> Money::make($this->price)->convert(), 'formatted' => Money::make($this->price)->formatted()],
            'has_discount' => $this->getDiscount() > 0,
            'in_stock' => $this->in_stock,
            'exclusive' => $this->exclusive,
            'discount' => ['price'=> Money::make($this->getDiscount())->convert(), 'formatted' => Money::make($this->getDiscount())->formatted()],
            'price' => ['price'=> Money::make($this->getPrice())->convert(), 'formatted' => Money::make($this->getPrice())->formatted()],
            'sizes' => $this->sizes->map(function (Size $size) {
                return [
                    'id' => $size->id,
                    'name' => $size->name,
                    'price' => price($size->price),
                ];
            }),
            'images' => MediaResource::collection($this->getMedia()),
        ];
    }
}
