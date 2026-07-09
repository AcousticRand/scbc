<?php

namespace Database\Factories;

use App\Models\Blueprint;
use App\Models\BlueprintIngredient;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BlueprintIngredient>
 */
class BlueprintIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blueprint_id' => Blueprint::factory(),
            'product_id' => Product::factory(),
            'qty_required' => fake()->numberBetween(1, 10),
        ];
    }
}
