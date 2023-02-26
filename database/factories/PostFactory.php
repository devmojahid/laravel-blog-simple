<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'image' => fake()->imageUrl(700, 500, 'cats'),
            'content' => fake()->paragraph(3),
            'status' => fake()->randomElement(['draft', 'published','unpublished']),
            'is_featured' => fake()->randomElement([0,1]),
            'category_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
