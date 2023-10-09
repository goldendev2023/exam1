<?php

use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Registers = [ 'Ashyr', 'Gozel'];

        foreach ($Registers as $student_id) {
            Registers::create([
                'student' => $student_id,
                'slug' => str($student_id)->slug(),
            ]);
        }
    }
}