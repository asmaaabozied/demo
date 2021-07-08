<?php

namespace App\Http\Resources\Governorates;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Currencies\CurrencyResource;
use App\Models\Currency;
/** @mixin \Modules\Governorates\Entities\Country */

class GovernorateSelectResource extends JsonResource
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
            'image' => $this->getFirstMediaUrl('flags'),
        ];
    }
}
