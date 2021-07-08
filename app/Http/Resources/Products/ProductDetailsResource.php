<?php

namespace App\Http\Resources\Products;

use App\Models\Product;
use App\Models\Size;
use App\Support\Money;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Products\ProductResource;
use App\Http\Resources\Brands\BrandResource;
use AhmedAliraqi\LaravelMediaUploader\Transformers\MediaResource;

class ProductDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $sameBrand = Product::where('brand_id', $this->brand_id)->where('id', '!=', $this->id)->paginate();
        $sameCategory = Product::where('category_id', $this->category_id)->where('id', '!=', $this->id)->paginate();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'old_price' => ['price'=> Money::make($this->price)->convert(), 'formatted' => Money::make($this->price)->formatted()],
            'has_discount' => $this->getDiscount() > 0,
            'discount' => ['price'=> Money::make($this->getDiscount())->convert(), 'formatted' => Money::make($this->getDiscount())->formatted()],
            'in_stock' => $this->in_stock,
            'exclusive' => $this->exclusive,
            'price' => ['price'=> Money::make($this->getPrice())->convert(), 'formatted' => Money::make($this->getPrice())->formatted()],
            'brand' => new BrandResource($this->brand),
            'images' => MediaResource::collection($this->getMedia()),
            'sizes' => $this->sizes->map(function (Size $size) {
                return [
                    'id' => $size->id,
                    'name' => $size->name,
                    'price' => price($size->price),
                ];
            }),
            'category_related_products' => ProductResource::collection($sameCategory),
            'brand_related_products' => ProductResource::collection($sameBrand),

        ];
    }
}
