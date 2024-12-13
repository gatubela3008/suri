<?php

namespace Database\Seeders;

use App\Models\Admin\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'day_of_week' => 'Lunes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 0,
            'end_hour' => 8,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Lunes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Lunes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Lunes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Lunes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 0,
            'end_hour' => 17,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Lunes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 30,
            'end_hour' => 20,
            'end_minute' => 30, 
        ]);
        // Martes
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 0,
            'end_hour' => 8,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 0,
            'end_hour' => 17,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Martes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 30,
            'end_hour' => 20,
            'end_minute' => 30, 
        ]);
        // Miércoles
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 0,
            'end_hour' => 8,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 0,
            'end_hour' => 17,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Miércoles',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 30,
            'end_hour' => 20,
            'end_minute' => 30, 
        ]);
        // Jueves
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 0,
            'end_hour' => 8,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 0,
            'end_hour' => 17,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Jueves',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 30,
            'end_hour' => 20,
            'end_minute' => 30, 
        ]);
        // Viernes
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 0,
            'end_hour' => 8,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 0,
            'end_hour' => 17,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Viernes',
            'shift' => 'Noche',
            'start_hour' => 17,
            'start_minute' => 30,
            'end_hour' => 20,
            'end_minute' => 30, 
        ]);
        // Sábado
        Schedule::create([
            'day_of_week' => 'Sábado',
            'shift' => 'Mañana',
            'start_hour' => 8,
            'start_minute' => 30,
            'end_hour' => 9,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Sábado',
            'shift' => 'Mañana',
            'start_hour' => 9,
            'start_minute' => 0,
            'end_hour' => 12,
            'end_minute' => 0, 
        ]);
        Schedule::create([
            'day_of_week' => 'Sábado',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 0,
            'end_hour' => 13,
            'end_minute' => 30, 
        ]);
        Schedule::create([
            'day_of_week' => 'Sábado',
            'shift' => 'Tarde',
            'start_hour' => 13,
            'start_minute' => 30,
            'end_hour' => 16,
            'end_minute' => 0, 
        ]);
    }
}
