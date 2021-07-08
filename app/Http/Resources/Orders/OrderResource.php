<?php

namespace App\Http\Resources\Orders;

use App\Models\Size;
use App\Models\Product;
use App\Support\Money;
use App\Http\Resources\Orders\orderItmResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'phone' => $this->phone,
            'city' => $this->city,
            'area' => $this->area,
            'address' => $this->address,
            'gift_message' => $this->gift_message,
            'discount' => $this->discount,
            'sub_total' => Money::make($this->sub_total),
            'total' => Money::make($this->total),
            'items' => orderItmResource::collection($this->items),
        ];
    }
}
