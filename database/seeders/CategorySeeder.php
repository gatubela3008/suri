<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create(['category_name' => 'Costura']);
        Category::create(['category_name' => 'Gastronomía']);
        Category::create(['category_name' => 'Belleza']);
        Category::create(['category_name' => 'Técnico Belleza']);
        Category::create(['category_name' => 'Cómputo']);
        Category::create(['category_name' => 'Inglés']);
        Category::create(['category_name' => 'Técnico']);
        Category::create(['category_name' => 'Otros']);
        Category::create(['category_name' => 'Técnico Asistente del Adulto Mayor']);        
    }
}
