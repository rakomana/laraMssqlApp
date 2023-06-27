<?php

namespace Database\Factories;

use App\Models\Interest;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $word = $this->faker->word;

        return [
            'interest_id' => function () {
                return Interest::factory()->create()->id;
            },
            'file_name' =>  $word,
            'file' => $word. '.' . $this->faker->fileExtension
        ];
    }
}
