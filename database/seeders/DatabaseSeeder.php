<?php

namespace Database\Seeders;

use App\Models\IdType;
use App\Models\PaymentType;
use App\Models\Phone;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Address;
use App\Models\Identification;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\CantonSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'invoice']);
        Role::create(['name' => 'professor']);
        Role::create(['name' => 'student']);

        IdType::create(['name' => 'Cédula']);
        IdType::create(['name' => 'DIMEX']);
        IdType::create(['name' => 'Pasaporte']);
        IdType::create(['name' => 'Licencia']);        

        $this->call(ProvinceSeeder::class);
        $this->call(CantonSeeder::class);

        PaymentType::create([
            'name' => 'Matrícula',
            'type' => 'Factura',
            'frecuency' => '12',
        ]);
        PaymentType::create([
            'name' => 'Mensualidad',
            'type' => 'Factura',
            'frecuency' => '1',
        ]);
        PaymentType::create([
            'name' => 'Seminario',
            'type' => 'Recibo',
            'frecuency' => '0',
        ]);
        PaymentType::create([
            'name' => 'Bingo',
            'type' => 'Recibo',
            'frecuency' => '12',
        ]);
        PaymentType::create([
            'name' => 'Costos de graduación',
            'type' => 'Recibo',
            'frecuency' => '0',
        ]);
       
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

        $user = User::factory()->create([
            'name' => 'invoice',
            'email' => 'invoice@suri.org',
            'password' => Hash::make('invoice'),
        ]);
        $user->assignRole('invoice');
        Identification::factory()->create([
            'user_id' => 2, 
        ]);
        Phone::factory()->create([
            'user_id' => 2,
        ]);
        Address::factory()->create([
            'user_id' => 2
        ]);

        for ($i = 3; $i < 23; $i++) {
            $user = User::factory(1)->create([]);
            $user->first()->assignRole('professor');
            Professor::create([
                'user_id' => $i,
            ]);
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

        for ($i = 23; $i < 123; $i++) {
            $user = User::factory(1)->create();
            $user->first()->assignRole('student');
            Student::create([
                'user_id' => $i,
            ]);
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
        $this->call(ScheduleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CapacitationSeeder::class); // Contiene parcialmente datos falsos
        $this->call(InscriptionSeeder::class);

    }
    
}
