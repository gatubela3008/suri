<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create(['name' => 'San José']);
        Province::create(['name' => 'Alajuela']);
        Province::create(['name' => 'Cartago']);
        Province::create(['name' => 'Heredia']);
        Province::create(['name' => 'Guanacaste']);
        Province::create(['name' => 'Puntarenas']);
        Province::create(['name' => 'Limón']);
    }
}
