<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(2, true),
            'author' => fake()->name(),
            'published_year' => fake()->year(),
            'category' => fake()->randomElement(['Fiction', 'Non-Fiction', 'Science', 'History', 'Biography']),
            'isbn' => fake()->unique()->isbn13(),
            'excerpt' => fake()->paragraph(),
        ];
    }
}
