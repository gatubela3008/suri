<?php

namespace Database\Seeders;

use App\Models\Capacitation;
use App\Models\Group;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $capacitations = Capacitation::all();
        $subjects = Subject::all();
        $groups = Group::all();

        foreach ($students as $student) {
            $number = rand(1, 3);
            for ($i = 0; $i < $number; $i++) {
                $capacitation = $capacitations->random();
                foreach ($capacitation->subjects as $subject) {
                    $group = $subject->groups->random();
                    $student->inscriptions()->create([
                        'group_id' => $group->id,
                        'scholarship' => rand(20, 80) / 100,
                        'inscription_date' => now(),
                        'student_id' => $student->id,
                    ]);
                }
            }
        }
    }
}
