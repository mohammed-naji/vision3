<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(0, 200),
            'description' => $this->faker->paragraphs(10, true),
            'image' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
