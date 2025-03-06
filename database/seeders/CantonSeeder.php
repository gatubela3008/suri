<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $province = Province::where('name', 'San José')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'San José']);
        $canton = $province->cantons()->create(['name' => 'Escazú']);
        $canton = $province->cantons()->create(['name' => 'Desamparados']);
        $canton = $province->cantons()->create(['name' => 'Puriscal']);
        $canton = $province->cantons()->create(['name' => 'Tarrazú']);
        $canton = $province->cantons()->create(['name' => 'Aserrí']);
        $canton = $province->cantons()->create(['name' => 'Mora']);
        $canton = $province->cantons()->create(['name' => 'Goicoechea']);
        $canton = $province->cantons()->create(['name' => 'Santa Ana']);
        $canton = $province->cantons()->create(['name' => 'Alajuelita']);
        $canton = $province->cantons()->create(['name' => 'Vázquez de Coronado']);
        $canton = $province->cantons()->create(['name' => 'Acosta']);
        $canton = $province->cantons()->create(['name' => 'Tibás']);
        $canton = $province->cantons()->create(['name' => 'Moravia']);
        $canton = $province->cantons()->create(['name' => 'Montes de Oca']);
        $canton = $province->cantons()->create(['name' => 'Turrubares']);
        $canton = $province->cantons()->create(['name' => 'Dota']);
        $canton = $province->cantons()->create(['name' => 'Curridabat']);
        $canton = $province->cantons()->create(['name' => 'Pérez Zeledón']);
        $canton = $province->cantons()->create(['name' => 'León Cortés Castro']);


        $province = Province::where('name', 'Alajuela')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Alajuela']);
        $canton = $province->cantons()->create(['name' => 'San Ramón']);
        $canton = $province->cantons()->create(['name' => 'Grecia']);
        $canton = $province->cantons()->create(['name' => 'San Mateo']);
        $canton = $province->cantons()->create(['name' => 'Atenas']);
        $canton = $province->cantons()->create(['name' => 'Naranjo']);
        $canton = $province->cantons()->create(['name' => 'Palmares']);
        $canton = $province->cantons()->create(['name' => 'Poás']);
        $canton = $province->cantons()->create(['name' => 'Orotina']);
        $canton = $province->cantons()->create(['name' => 'San Carlos']);
        $canton = $province->cantons()->create(['name' => 'Alfaro Ruiz']);
        $canton = $province->cantons()->create(['name' => 'Valverde Vega']);
        $canton = $province->cantons()->create(['name' => 'Upala']);
        $canton = $province->cantons()->create(['name' => 'Los Chiles']);
        $canton = $province->cantons()->create(['name' => 'Guatuso']);

        $province = Province::where('name', 'Cartago')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Cartago']);
        $canton = $province->cantons()->create(['name' => 'Paraíso']);
        $canton = $province->cantons()->create(['name' => 'La Unión']);
        $canton = $province->cantons()->create(['name' => 'Jiménez']);
        $canton = $province->cantons()->create(['name' => 'Turrialba']);
        $canton = $province->cantons()->create(['name' => 'Alvarado']);
        $canton = $province->cantons()->create(['name' => 'Oreamuno']);
        $canton = $province->cantons()->create(['name' => 'El Guarco']);

        $province = Province::where('name', 'Heredia')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Heredia']);
        $canton = $province->cantons()->create(['name' => 'Barva']);
        $canton = $province->cantons()->create(['name' => 'Santo Domingo']);
        $canton = $province->cantons()->create(['name' => 'Santa Bárbara']);
        $canton = $province->cantons()->create(['name' => 'San Rafael']);
        $canton = $province->cantons()->create(['name' => 'San Isidro']);
        $canton = $province->cantons()->create(['name' => 'Belén']);
        $canton = $province->cantons()->create(['name' => 'Flores']);
        $canton = $province->cantons()->create(['name' => 'San Pablo']);
        $canton = $province->cantons()->create(['name' => 'Sarapiquí']);

        $province = Province::where('name', 'Guanacaste')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Liberia']);
        $canton = $province->cantons()->create(['name' => 'Nicoya']);
        $canton = $province->cantons()->create(['name' => 'Santa Cruz']);
        $canton = $province->cantons()->create(['name' => 'Bagaces']);
        $canton = $province->cantons()->create(['name' => 'Carrillo']);
        $canton = $province->cantons()->create(['name' => 'Cañas']);
        $canton = $province->cantons()->create(['name' => 'Abangares']);
        $canton = $province->cantons()->create(['name' => 'Tilarán']);
        $canton = $province->cantons()->create(['name' => 'Nandayure']);
        $canton = $province->cantons()->create(['name' => 'La Cruz']);
        $canton = $province->cantons()->create(['name' => 'Hojancha']);

        $province = Province::where('name', 'Puntarenas')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Puntarenas']);
        $canton = $province->cantons()->create(['name' => 'Esparza']);
        $canton = $province->cantons()->create(['name' => 'Buenos Aires']);
        $canton = $province->cantons()->create(['name' => 'Montes de Oro']);
        $canton = $province->cantons()->create(['name' => 'Osa']);
        $canton = $province->cantons()->create(['name' => 'Quepos']);
        $canton = $province->cantons()->create(['name' => 'Golfito']);
        $canton = $province->cantons()->create(['name' => 'Coto Brus']);
        $canton = $province->cantons()->create(['name' => 'Parrita']);
        $canton = $province->cantons()->create(['name' => 'Corredores']);
        $canton = $province->cantons()->create(['name' => 'Garabito']);

        $province = Province::where('name', 'Limón')->first();

        $canton = $province->cantons()->create(['name' => 'Indeterminado']);
        $canton = $province->cantons()->create(['name' => 'Limón']);
        $canton = $province->cantons()->create(['name' => 'Pococí']);
        $canton = $province->cantons()->create(['name' => 'Siquirres']);
        $canton = $province->cantons()->create(['name' => 'Talamanca']);
        $canton = $province->cantons()->create(['name' => 'Matina']);
        $canton = $province->cantons()->create(['name' => 'Guácimo']);

    }
}
