<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create(['name' => 'Costura']);
        Category::create(['name' => 'Gastronomía']);
        Category::create(['name' => 'Belleza']);
        Category::create(['name' => 'Técnico Belleza']);
        Category::create(['name' => 'Cómputo']);
        Category::create(['name' => 'Inglés']);
        Category::create(['name' => 'Técnico']);
        Category::create(['name' => 'Otros']);
        
    }
}
