<?php

namespace Database\Seeders;

use App\Models\Admin\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = User::role('student')->get();
        $groups = Group::all();

        foreach ($students as $student) {
            $number = rand(1, 3);
            for ($i = 0; $i < $number; $i++) {
                $group = $groups->random();
                $student->inscriptions()->create([
                    'group_id' => $group->id,
                    'scholarship' => rand(20, 80) / 100,
                    'inscription_date' => now(),
                    'user_id' => $student->id,
                ]);
            }
        }
    }
}
