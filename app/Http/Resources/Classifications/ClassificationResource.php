<?php

namespace App\Http\Resources\Classifications;

use Illuminate\Http\Resources\Json\JsonResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class ClassificationResource extends JsonResource
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
            'description' => $this->description,
            'image' => $this->when(
                ! ! $this->getFirstMedia(),
                new MediaResource($this->getFirstMedia())
            ),
            'parent' => new static($this->whenLoaded('parent')),
            'subclassifications' => static::collection($this->whenLoaded('subclassifications')),
        ];
    }
}
