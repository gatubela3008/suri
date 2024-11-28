<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapacitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('name', 'Costura')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Accesorios para mascotas',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 24,
            'number_of_month' => 6,
            'month_payment' => 10000,
            'requirements' => 'Costura básica',
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Transformaciones y reparaciones en ropa',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 12,
            'number_of_month' => 3,
            'month_payment' => 20000,
            'requirements' => 'Costura básica',
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Diseño de moda',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Introducción al manejo de máquinas',
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Principiante',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 12,
            'number_of_month' => 3,
            'month_payment' => 20000,
            'requirements' => 'Costura básica',
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 24,
            'number_of_month' => 6,
            'month_payment' => 10000,
            'requirements' => 'Costura vinyl Principiante.',
        ]);
        // 6
        $capacitation = $category->capacitations()->create([
            'name' => 'Confección ropa deportiva',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Costura básica',
        ]);
        // 7
        $capacitation = $category->capacitations()->create([
            'name' => 'Confección ropa (medicina, uniformes)',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Patronaje básico',
        ]);
        // 8
        $capacitation = $category->capacitations()->create([
            'name' => 'Introducción a la costura',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 12,
            'number_of_month' => 3,
            'month_payment' => 20000,
            'requirements' => 'Inrtoducción al manejo de máquinas',
        ]);
        // 9
        $capacitation = $category->capacitations()->create([
            'name' => 'Ropa ejecutiva (camisas, faldas, vestidos)',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Patronaje básico',
        ]);
        // 10
        $capacitation = $category->capacitations()->create([
            'name' => 'Patronaje intermedio',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Patronaje básico',
        ]);

        $category = Category::where('name', 'Gastronomía')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Elaboración y decoración de queques',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Transformaciones y reparaciones en ropa',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 24,
            'number_of_month' => 6,
            'month_payment' => 10000,
            'requirements' => null,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Repostería profesional',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Chocolatería',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 4,
            'number_of_month' => 1,
            'month_payment' => 60000,
            'requirements' => null,
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Manicura profesional',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 24,
            'number_of_month' => 6,
            'month_payment' => 20000,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Alto peinado',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 24,
            'number_of_month' => 6,
            'month_payment' => 10000,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Técnico Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Manicura profesional',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Especialización. Técnicas mixtas',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => 'Manicura profesional',
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Estilismo',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Cómputo')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Computación básica',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Computación Excel avanzado',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 12,
            'number_of_month' => 3,
            'month_payment' => 20000,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Inglés')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés A1 (principiantes)',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés B1 Avanzado',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => "Examen de ubicación",
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés niñas de 9 y 10 años',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés niñas de 11 y 12 años',
            'prize' => 60000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 36,
            'number_of_month' => 9,
            'month_payment' => 6665,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Técnico')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo y asistente contable',
            'prize' => 80000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 74,
            'number_of_month' => 19,
            'month_payment' => 4210,
            'requirements' => "Bachillerato",
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente al adulto mayor',
            'prize' => 80000,
            'registration' => 15000,
            'two_parts' => true,
            'weeks_duration' => 28,
            'number_of_month' => 7,
            'month_payment' => 11430,
            'requirements' => null,
        ]);
        
    }
}
