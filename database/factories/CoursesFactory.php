<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Register = DB::table('Register')->inRandomOrder()->first();
        $Courses = DB::table('Courses')->inRandomOrder()->first();
        $Classroom = DB::table('classroom')->inRandomOrder()->first();
        $Students = DB::table('Students')->inRandomOrder()->first();

        return [
            'Register_id' => $Register->id,
            'Courses_id' => $Courses->id,
            'Classroom_id' => $Classroom->id,
            'Students_id' => $Students->id,
            'slug' => str($this)->slug(),
            'description' => fake()->paragraph(rand(3, 5)),

        ];
    }}