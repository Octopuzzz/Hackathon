<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 3)),
            'category_id' => mt_rand(1, 7),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(mt_rand(2, 5)),
        ];
    }
}
