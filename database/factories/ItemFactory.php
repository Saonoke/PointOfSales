<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement(['1', '2', '3','4','5']),
            'item_name' =>   fake()->word(),
            'price' => fake()->randomNumber(5),
            'stock' => fake()->randomNumber(2, true)
        ];
    }
}
