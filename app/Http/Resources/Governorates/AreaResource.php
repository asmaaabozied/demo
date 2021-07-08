<?php

namespace App\Http\Resources\Governorates;

use Illuminate\Http\Resources\Json\JsonResource;

class AreaResource extends JsonResource
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
            'governorate' => new GovernorateResource($this->whenLoaded('governorate')),
        ];
    }
}
