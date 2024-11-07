<?php

namespace Database\Seeders;

use App\Models\Admin\Capacitation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCapacitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $capacitations = Capacitation::all();

        // Asignar aleatoriamente capacitaciones a cada usuario
        foreach ($users as $user) {
            if ($user->hasRole('student')) {
                // Selecciona un subconjunto de capacitaciones aleatoriamente para el usuario
                $capacitationData = $capacitations
                    ->random(rand(1, 15))
                    ->mapWithKeys(function ($capacitation) {
                        return [
                            $capacitation->id => ['scholarship' => round(mt_rand(100, 10000) / 100, 2)] // Decimal entre 1 y 100
                        ];
                    })->toArray();

                $user->capacitations()->attach($capacitationData);
            } else {
                $capacitationData = $capacitations
                    ->random(rand(1, 15))
                    ->mapWithKeys(function ($capacitation) {
                        return [
                            $capacitation->id => ['scholarship' => null] // Decimal entre 1 y 100
                        ];
                    })->toArray();

                $user->capacitations()->attach($capacitationData);
            }
        }
    }
}
