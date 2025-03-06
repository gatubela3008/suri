<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lunes
        Schedule::create([
            'schedule' => 'Lunes - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Lunes - Tarde',
        ]);
        Schedule::create([
            'schedule' => 'Lunes - Noche',
        ]);
        // Martes
        Schedule::create([
            'schedule' => 'Martes - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Martes - Tarde',
        ]);
        Schedule::create([
            'schedule' => 'Martes - Noche',
        ]);
        // Miércoles
        Schedule::create([
            'schedule' => 'Miércoles - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Miércoles - Tarde',
        ]);
        Schedule::create([
            'schedule' => 'Miércoles - Noche',
        ]);
        // Jueves
        Schedule::create([
            'schedule' => 'Jueves - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Jueves - Tarde',
        ]);
        Schedule::create([
            'schedule' => 'Jueves - Noche',
        ]);
        // Viernes
        Schedule::create([
            'schedule' => 'Viernes - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Viernes - Tarde',
        ]);
        Schedule::create([
            'schedule' => 'Viernes - Noche',
        ]);
        // Sábado
        Schedule::create([
            'schedule' => 'Sábado - Mañana',
        ]);
        Schedule::create([
            'schedule' => 'Sábado - Tarde',
        ]);
    }
}
