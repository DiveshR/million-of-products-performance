<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'name' => fake()->sentence(),
            'content' => fake()->paragraph(2),
            'regular_price' => fake()->randomFloat(2, 100, 300),
            'sale_price' => fake()->randomFloat(2, 100, 300),
            'unit_quantity' => rand(1, 10),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'excerpt' => fake()->sentence(4),
            'is_featured' => rand(0, 1),
            'status' => rand(0, 1),

        ];
    }
}
