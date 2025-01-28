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
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => 'Costura básica',
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Transformaciones y reparaciones en ropa',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Costura básica',
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Diseño de moda',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Introducción al manejo de máquinas',
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Principiante',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Costura básica',
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => 'Costura vinyl Principiante.',
        ]);
        // 6
        $capacitation = $category->capacitations()->create([
            'name' => 'Confección ropa deportiva',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Costura básica',
        ]);
        // 7
        $capacitation = $category->capacitations()->create([
            'name' => 'Confección ropa (medicina, uniformes)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);
        // 8
        $capacitation = $category->capacitations()->create([
            'name' => 'Introducción a la costura',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Inrtoducción al manejo de máquinas',
        ]);
        // 9
        $capacitation = $category->capacitations()->create([
            'name' => 'Ropa ejecutiva (camisas, faldas, vestidos)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);
        // 10
        $capacitation = $category->capacitations()->create([
            'name' => 'Patronaje intermedio',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);

        $category = Category::where('name', 'Gastronomía')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Elaboración y decoración de queques',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Transformaciones y reparaciones en ropa',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Repostería profesional',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Chocolatería',
            'price' => 60000 / 4 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => null,
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Manicura profesional',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Alto peinado',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Técnico Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Manicura profesional',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Especialización. Técnicas mixtas',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Manicura profesional',
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Estilismo / 4 * 36',
            'price' => 60000,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Cómputo')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Computación básica',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Computación Excel avanzado',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Inglés')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés A1 (principiantes)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés B1 Avanzado',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => "Examen de ubicación",
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés niñas de 9 y 10 años',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'name' => 'Inglés niñas de 11 y 12 años',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        
        $category = Category::where('name', 'Técnico')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo y asistente contable',
            'price' => 80000 / 4 * 74,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 74,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.1
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Computación',
            'price' => 20000 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.2
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Inglés',
            'price' => 20000 * 20,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 20,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.3
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Contabilidad',
            'price' => 20000 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.4
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Administración General',
            'price' => 20000 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.5
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Planificación estratégica',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.6
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Liderazgo',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.7
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Administración bancaria',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.8
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Finanzas',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.9
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Presupuesto',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.10
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Salud ocupacional',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.11
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Control de inventario',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.12
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Auditoría y control interno',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.13
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Mercadeo y servicio al cliente',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.14
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Legislación laboral',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.15
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Estadística',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.16
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Seminario de ética',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.17
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Seminario de etiqueta y protocolo',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => "Bachillerato",
        ]);
        // 1.1.18
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente administrativo - Pasantía',
            'price' => 20000 * 6,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 6,
            'requirements' => "Bachillerato",
        ]);
        // 1.2.1
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente contable - Legislación tributaria',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 1.2.2
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente contable - Metología de la investigación',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'name' => 'Asistente al adulto mayor',
            'price' => 20000 * 28,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 28,
            'requirements' => null,
        ]);

        $category = Category::where('name', 'Otros')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'name' => 'Habilidades blandas',
            'price' => 0,
            'registration' => 0,
            'parts' => false,
            'weeks_duration' => 0,
            'requirements' => "",
        ]);
        
        
    }
}
