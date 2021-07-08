<?php

namespace App\Http\Resources\Governorates;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\Governorates\Entities\Area */
class AreaSelectResource extends JsonResource
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
            'text' => $this->governorate->name .' - '. $this->name,
            'image' => $this->governorate->getFirstMediaUrl('flags'),
        ];
    }
}
