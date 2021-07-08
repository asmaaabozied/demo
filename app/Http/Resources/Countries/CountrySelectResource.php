<?php

namespace App\Http\Resources\Countries;
use App\Models\Currency;
use App\Http\Resources\Currencies\CurrencyResource;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\Countries\Entities\Country */
class CountrySelectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $currency = Currency::where('country_id', $this->id)->first();
        return [
            'id' => $this->id,
            'text' => $this->name,
            'code' => $this->code,
            'key' => $this->key,
            'image' => $this->getFirstMediaUrl('flags'),
            'currency' => new CurrencyResource($currency),
        ];
    }
}
