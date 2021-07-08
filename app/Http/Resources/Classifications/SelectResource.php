<?php

namespace App\Http\Resources\Classifications;

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
        if(isset($this->subclassifications)) {
            $subclass = static::collection($this->subclassifications);
        } else {
            $subclass=[];
        }
        return [
            'id' => $this->id,
            'text' => $this->getFullName(),
            'image' => $this->getFirstMediaUrl(),
            'subclassifications' => $subclass,
        ];
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        $names = [];

        $classification = $this;
        do {
            $names[] = $classification->name;
            $classification = $classification->parent;
        } while ($classification);

        return implode(' - ', array_reverse($names));
    }
}
