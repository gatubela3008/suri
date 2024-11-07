<?php

namespace Database\Seeders;

use App\Models\Admin\Capacitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapacitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Capacitation::factory(15)->create();
    }
}
