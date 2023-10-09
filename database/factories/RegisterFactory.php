<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->id(),
            'course_id' => fake()->unique()->course_id(),
            'classroom_id' => fake()->unique()->classroom_id(),
            'student_id' => fake()->unique()->student_id(),
            'created_at' => fake()->unique()->created_at(),
            'updated_at' => fake()->unique()->updated_at(),
            'remember_token' => Str::random(10),
        ];
    }
}
