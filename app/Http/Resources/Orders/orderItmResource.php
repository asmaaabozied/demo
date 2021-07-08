<?php

namespace App\Http\Resources\orders;

use App\Models\Size;
use App\Support\Money;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Products\ProductResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class orderItmResource extends JsonResource
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
            'order_id' => $this->order_id,
            'qty' => $this->qty,
            'price' => Money::make($this->price),
            'total' => Money::make($this->total),
            'item' => new ProductResource($this->item),
        ];
    }
}
