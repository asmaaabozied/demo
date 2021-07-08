<?php

namespace App\Http\Resources\Classifications;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Products\ProductResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class ClassificationResource2 extends JsonResource
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
            'title' => $this->name,
            'id' => $this->id,
            'image' => $this->getFirstMediaUrl(),
            'arr' => ProductResource::collection($this->products)
        ];
    }
}
