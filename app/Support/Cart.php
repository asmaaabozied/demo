<?php

namespace App\Support;

use App\Models\Size;
use App\Models\Milk;

class Cart
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function getItems()
    {
        $items = collect();
        foreach (session('cart', []) as $item) {
            $item = (object) $item;
            $type = $item->item_type;
            $item->item = $type::find($item->item_id);
            $items->add($item);
        }

        return $items;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getCoupon($key = 'discount')
    {
        return data_get(session('coupon'), $key);
    }

    public function getDiscount()
    {
        return $this->getCoupon('discount');
    }

    public function getShippingPrice()
    {
        //
    }

    public function getSubTotal()
    {
        return $this->getItems()->map(function ($item) {
            if(isset($item->milk_size)) {
                return ($this->getItemPrice($item) * $item->qty)+app('cart')->getItemMilkSizePrice($item);
            } else {
                return $this->getItemPrice($item) * $item->qty;
            }
        })->sum();
    }

    public function getItemPrice($item)
    {
        $price = null;
        if (isset($item->size_id) && $size = Size::find($item->size_id)) {
            $price = $size->price;
        }

        return $item->item->getPrice($price);
    }

    public function getItemMilkSizePrice($item)
    {
        $price = null;
        if (isset($item->milk_size) && $size = Milk::find($item->milk_size)) {
            $price = $size->price;
        }

        return $item->item->getPrice($price);
    }

    public function getTotal()
    {
        return $this->getSubTotal() - $this->getDiscount();
    }
}
