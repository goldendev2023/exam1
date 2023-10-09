<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Courses = [
            ['name' => 'Programming', 'students' => []],
            ['name' => 'Web design', 'students' => ['Ashyr', 'Gozel']],
            ['name' => 'Web programming', 'students' => []],
            ['name' => 'Back-end development', 'students' => []],
            ['name' => 'Front-end development', 'students' => []],

        ];

        foreach ($Courses as $courses) {
            $obj = Courses::create([
                'name' => $Courses['name'],
                'slug' => str($Courses['name'])->slug(),
            ]);

            foreach ($Courses['students'] as $students) {
                Students::create([
                    'Courses_id' => $obj->id,
                    'name' => $students,
                    'slug' => str($students)->slug(),
                ]);
            }
        }
    }
}