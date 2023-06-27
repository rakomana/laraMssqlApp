<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_type' => $this->faker->randomElement(['child', 'teenager', 'adult']),
            'name' => $this->faker->name()
        ];
    }
}
