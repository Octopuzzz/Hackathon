<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategeryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_type' => $this->faker->word(mt_rand(6, 15)),
            'slug' => $this->faker->slug(),
        ];
    }
}
