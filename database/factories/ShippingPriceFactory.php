<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\ShippingCompany;
use App\Models\ShippingPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_price' => rand(10, 20),
            'second_price' => rand(10, 20),
            'country_id' => Country::factory(),
            'shipping_company_id' => ShippingCompany::factory(),
        ];
    }
}
