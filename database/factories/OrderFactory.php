<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\SalePerson;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => function () {
                return Customer::factory()->create()->id;
            },
            'salesperson_id' => function () {
                return SalePerson::factory()->create()->id;
            },
            'order_date' => $this->faker->date(),
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
