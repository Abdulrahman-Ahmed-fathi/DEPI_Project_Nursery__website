<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Category;

class ImageSeeder extends Seeder
{
    public function run()
    {
        // Fetch categories
        $playing = Category::where('name', 'Playing')->first();
        $drawing = Category::where('name', 'Drawing')->first();
        $reading = Category::where('name', 'Reading')->first();

        // Example images for each category
        Image::create(['category_id' => $playing->id, 'image_url' => 'img/portfolio-1.jpg']);
        Image::create(['category_id' => $playing->id, 'image_url' => 'img/portfolio-4.jpg']);

        Image::create(['category_id' => $drawing->id, 'image_url' => 'img/portfolio-2.jpg']);
        Image::create(['category_id' => $drawing->id, 'image_url' => 'img/portfolio-5.jpg']);

        Image::create(['category_id' => $reading->id, 'image_url' => 'img/portfolio-3.jpg']);
        Image::create(['category_id' => $reading->id, 'image_url' => 'img/portfolio-6.jpg']);
    }
}

