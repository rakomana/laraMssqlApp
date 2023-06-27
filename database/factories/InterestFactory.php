<?php

namespace Database\Factories;

use App\Models\PersonalDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class InterestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personal_detail_id' => function () {
                return PersonalDetail::factory()->create()->id;
            },
            'interest_type' => $this->faker->randomElement(['sport', 'fishing', 'Gardening', 'Animals', 'Children', 'Movies', 'Music', 'Drama', 'Travelling','Racing','Programming', 'Church', 'Dancing', 'Spining','Praying'])
        ];
    }
}
