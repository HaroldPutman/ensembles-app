<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'start' => $this->faker->dateTimeBetween('now', '+6 weeks'),
            'level' => 'beginner',
            'status' => 'open',
            'age_min' => 5,
            'age_max' => 18,
            'price' => 75,
        ];
    }
}
