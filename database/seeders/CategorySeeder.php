<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Example categories
        Category::create(['name' => 'Playing']);
        Category::create(['name' => 'Drawing']);
        Category::create(['name' => 'Reading']);
    }
}

