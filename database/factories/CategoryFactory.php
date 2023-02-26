<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->slug(3),
            'image' => fake()->imageUrl(50, 50, 'cats'),
            'description' => fake()->paragraph(3),
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}
