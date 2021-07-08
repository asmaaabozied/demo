<?php

namespace App\Http\Resources\Orders;

use App\Models\City;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Countries\CitySelectResource;

class AddressResource extends JsonResource
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
            'address' => $this->address,
            'city' => new CitySelectResource($this->city),
            //'user' => $this->customer,
        ];
    }
}
