<?php

namespace Database\Seeders;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use App\Models\Admin\Group;
use App\Models\Admin\Schedule;
use App\Models\Admin\Subject;
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 24,
            'price' => 60000 / 4 * 24,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 24,
            'price' => 60000 / 4 * 24,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Transformaciones y reparaciones en ropa',
            'price' => 60000 / 4 * 24,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 24,
            'requirements' => null,
        ]);
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 24,
            'price' => 60000 / 4 * 24,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 24,
            'price' => 60000 / 4 * 24,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 24,
            'price' => 60000 / 4 * 24,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        
        $category = Category::where('category_name', 'Técnico')->first();

        // 1.1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente administrativo y asistente contable',
            'price' => 80000 / 4 * 74,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 74,
            'requirements' => "Bachillerato",
        ]);
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Inglés',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 20,
            'price' => 60000 / 4 * 20,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.2
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Contabilidad',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.3
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Administración General',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 12,
            'price' => 60000 / 4 * 12,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.4
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Planificación estratégica',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.5
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Liderazgo',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.6
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Administración bancaria',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.7
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Finanzas',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.8
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Presupuesto',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.9
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Salud ocupacional',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.10
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Control de inventario',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.11
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Auditoría y control interno',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.12
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Mercadeo y servicio al cliente',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.13
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Legislación laboral',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.14
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Estadística',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.15
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Seminario de ética',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.16
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Seminario de ética y protocolo',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.17
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Pasantía',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 6,
            'price' => 60000 / 4 * 6,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.18
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Legislación tributaria',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 4,
            'price' => 60000 / 4 * 4,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.19
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Metodología de la investigación',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 60000 / 4 * 36,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);

        $category = Category::where('category_name', 'Técnico Asistente del Adulto Mayor')->first();

        //2.1
        $capacitation = $category->capacitations()->create([
            'capacitation_name' => 'Asistente al adulto mayor',
            'price' => 80000 * 52 / 4,
            'registration' => 15000,
            'parts' => 2,
            'weeks_duration' => 26,
            'requirements' => null,
        ]);
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Cuidados básicos al adulto mayor I y II',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 14,
            'price' => 60000 / 4 * 14,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.2
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Introducción a los conceptos de la vejez y el envajacimiento',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 6,
            'price' => 60000 / 4 * 6,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.3
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Abordaje del adulto mayor con deterioro cognitivo y síndromes demenciales',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 8,
            'price' => 60000 / 4 * 8,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.4
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Nutrición',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.5
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Ética - Cuidadores, autocuidado y salud mental',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.6
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Ética - Promoción del envejecimiento saludable',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.7
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Proyecto de graduación',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.8
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Odontología',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.9
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Primeros auxilios I',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.10
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Primeros auxilios II',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.11
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Seminario I',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 1,
            'price' => 60000 / 4 * 1,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.12
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Seminario II',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.13
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'HB - Seminario III',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 1.14
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Ética - Seminario',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        // 2.15
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Ética - Seminario cristiano de la muerte',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 5,
            'price' => 60000 / 4 * 5,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
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
        $subject = $capacitation->subjects()->create([
            'subject_name' => 'Única',
            'capacitation_id' => $capacitation->id,
            'estimated_weeks' => 36,
            'price' => 0,
        ]);
        $group = $subject->groups()->create([
            'group_name' => 'Único',
            'subject_id' => $subject->id,
        ]);
        
        /**
         * Datos de prueba
         */
        
        $subjects = Subject::all();
        foreach ($subjects as $subject) {
            $number = rand(1, 3);
            for ($i = 0; $i < $number; $i++) {
                $group = $subject->groups()->create([
                    'group_name' => 'Grupo ' . $i,
                    'subject_id' => $subject->id,
                ]);
            }
        }
        
        $groups = Group::all();
        foreach ($groups as $group) {
            $schedules = rand(1, 3);
            $schedule = [];
            for ($j = 0; $j < $schedules; $j++) {
                $schedule[] = Schedule::all()->random()->id;                
            }
            $group->schedules()->syncWithPivotValues($schedule, [
                'start_date' => '2025-01-01',
                'edition' => 'Edición ' . $j,
            ]);
        }
    }
}
