<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(3, 7)))
                ->map(fn ($x) => "$x")->implode(''),
        ];
    }
}
