<?php

namespace Database\Seeders;

use App\DayOfWeek;
use App\Models\Admin\Address;
use App\Models\Admin\Category;
use App\Models\Admin\Identification;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\CantonSeeder;
use App\Models\Admin\IdType;
use App\Models\Admin\Phone;
use App\Models\Admin\Schedule;
use App\Shift;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'professor']);
        Role::create(['name' => 'student']);

        IdType::create(['name' => 'Cédula']);
        IdType::create(['name' => 'DIMEX']);
        IdType::create(['name' => 'Pasaporte']);
        IdType::create(['name' => 'Licencia']);

        $this->call(ProvinceSeeder::class);
        $this->call(CantonSeeder::class);
        $this->call(ScheduleSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(CapacitationSeeder::class); // Contiene parcialmente datos falsos

        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@suri.org',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole('admin');
        Identification::factory()->create([
            'user_id' => 1, 
        ]);
        Phone::factory()->create([
            'user_id' => 1,
        ]);
        Address::factory()->create([
            'user_id' => 1
        ]);

        for ($i = 2; $i < 22; $i++) {
            $user = User::factory(1)->create([]);
            $user->first()->assignRole('professor');
            Identification::factory()->create([
                'user_id' => $i,
            ]);
            Phone::factory()->create([
                'user_id' => $i,
            ]);
            Address::factory()->create([
                'user_id' => $i,
            ]);
        }

        for ($i = 22; $i < 122; $i++) {
            $user = User::factory(1)->create();
            $user->first()->assignRole('student');
            Identification::factory()->create([
                'user_id' => $i,
            ]);
            Phone::factory()->create([
                'user_id' => $i,
            ]);
            Address::factory()->create([
                'user_id' => $i,
            ]);     
            
            
        }
        $this->call(InscriptionSeeder::class);
        
    }
}
