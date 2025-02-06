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
        $category = Category::where('category_name', 'Costura')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Accesorios para mascotas',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => 'Costura básica',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Transformaciones y reparaciones en ropa',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Costura básica',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Diseño de moda',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Introducción al manejo de máquinas',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Bolsos y accesorios en vinyl. Principiante',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Costura básica',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => 'Costura vinyl Principiante.',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 6
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Confección ropa deportiva',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Costura básica',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 7
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Confección ropa (medicina, uniformes)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 8
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Introducción a la costura',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => 'Inrtoducción al manejo de máquinas',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 9
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ropa ejecutiva (camisas, faldas, vestidos)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 10
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Patronaje intermedio',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Patronaje básico',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Gastronomía')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Elaboración y decoración de queques',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Transformaciones y reparaciones en ropa',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Repostería profesional',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Chocolatería',
            'price' => 60000 / 4 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 5
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Bolsos y accesorios en vinyl. Avanzado',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Manicura profesional',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Alto peinado',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Técnico Belleza')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Manicura profesional',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Especialización. Técnicas mixtas',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => 'Manicura profesional',
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Estilismo / 4 * 36',
            'price' => 60000,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Cómputo')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Computación básica',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Computación Excel avanzado',
            'price' => 60000 / 4 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Inglés')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Inglés A1 (principiantes)',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Inglés B1 Avanzado',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => "Examen de ubicación",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Inglés niñas de 9 y 10 años',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 4
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Inglés niñas de 11 y 12 años',
            'price' => 60000 / 4 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Técnico')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo y asistente contable',
            'price' => 80000 / 4 * 74,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 74,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Computación',
            'price' => 20000 * 36,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 36,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Inglés',
            'price' => 20000 * 20,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 20,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Contabilidad',
            'price' => 20000 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.4
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Administración General',
            'price' => 20000 * 12,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 12,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.5
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Planificación estratégica',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.6
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Liderazgo',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.7
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Administración bancaria',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.8
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Finanzas',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.9
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Presupuesto',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.10
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Salud ocupacional',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.11
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Control de inventario',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.12
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Auditoría y control interno',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.13
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Mercadeo y servicio al cliente',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.14
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Legislación laboral',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.15
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Estadística',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.16
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Seminario de ética',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.17
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Seminario de etiqueta y protocolo',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1.18
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo - Pasantía',
            'price' => 20000 * 6,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 6,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.2.1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente contable - Legislación tributaria',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.2.2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente contable - Metología de la investigación',
            'price' => 20000 * 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 4,
            'requirements' => "Bachillerato",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente al adulto mayor',
            'price' => 20000 * 28,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 28,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Otros')->first();

        // 1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Habilidades blandas',
            'price' => 0,
            'registration' => 0,
            'parts' => false,
            'weeks_duration' => 0,
            'requirements' => "",
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
        $category = Category::where('category_name', 'Técnico Asistente del Adulto Mayor')->first();

        //1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente al adulto mayor',
            'price' => 80000 * 52 / 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 26,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Cuidados básicos del adulto mayor I y II',
            'price' => 20000 * 14,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 14,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.2
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Introducción a los conceptos de vejez y envejecimiento',
            'price' => 20000 * 6,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 6,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.3
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Abordaje del adulto mayor con deterioro cognitivo y síndromes demenciales',
            'price' => 20000 * 8,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 8,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.4
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Nutrición',
            'price' => 20000 * 5,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 5,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.5
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Cuidadores, autocuidado y salud mental',
            'price' => 20000 * 5,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 5,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.6
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Promoción del envejecimiento saludable',
            'price' => 20000 * 5,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 5,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.7
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Proyecto de graduación',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.8
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Odonotología',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.9
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Primeros auxilios I',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.10
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Primeros auxilios II',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.11
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Seminario I',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.12
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Seminario II',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.13
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'HB - Seminario III',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.14
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Seminario',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        // 1.15
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Ética - Seminario cristiano de la muerte',
            'price' => 20000 * 1,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 1,
            'requirements' => null,
        ]);
        $group = $capacitation->groups()->create([
            'group_name' => 'Único',
            'capacitation_id' => $capacitation->id,
        ]);
        
    }
}
