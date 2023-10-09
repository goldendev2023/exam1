<?php

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Students = [ 'Ashyr', 'Gozel'];

        foreach ($Students as $student) {
            Students::create([
                'name' => $student,
                'slug' => str($student)->slug(),
            ]);
        }
    }
}