<?php

namespace App\Http\Resources\Governorates;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Modules\Governorates\Entities\Governorate */
class GovernorateResource extends JsonResource
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
            'flag' => url($this->getFirstMediaUrl('flags')),
            'areas' => AreaResource::collection($this->whenLoaded('areas')),
        ];
    }
}
