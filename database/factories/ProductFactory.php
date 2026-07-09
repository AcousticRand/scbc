<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->unique()->words(3, true),
            'description' => fake()->optional()->sentence(),
            'storage_units' => fake()->randomFloat(1, 0.1, 20),
            'price_each' => fake()->randomFloat(2, 0, 500),
            'sort_order' => fake()->numberBetween(0, 100),
            'is_root' => fake()->boolean(20),
        ];
    }
}
