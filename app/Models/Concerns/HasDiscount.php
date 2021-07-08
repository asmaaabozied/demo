<?php

namespace App\Models\Concerns;

trait HasDiscount
{
    use HasOffers;

    /**
     * @param null $price
     * @return float|int|mixed|string
     */
    public function getPrice($price = null)
    {
        return ($price ?: $this->price) - $this->getDiscount();
    }

    /**
     * @param null $price
     * @return float|int
     */
    public function getDiscount($price = null)
    {
        return $this->getDiscountPercent($price);
    }

    /**
     * @return float|int
     */
    public function getDiscountPercent($price = null)
    {
        $percent = 0;

        if (($offer = $this->availableOffer)
            || ($offer = optional($this->category)->availableOffer)
            || ($offer = optional($this->brand)->availableOffer)
        ) {
            if($offer->discount_type=="percentage") {
                $percent = ($price ?: $this->price) *$offer->percent / 100;
            } else {
                $percent = $offer->percent;
            }
        }

        return $percent;
    }
}
