<?php

namespace App\Http\Resources\Sliders;

use Illuminate\Http\Resources\Json\JsonResource;

class SelectResource extends JsonResource
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
            'text' => $this->getFullName(),
            'image' => $this->getFirstMediaUrl(),
        ];
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        $names = [];

        $slider = $this;
        do {
            $names[] = $slider->name;
        } while ($slider);

        return implode(' - ', array_reverse($names));
    }
}
