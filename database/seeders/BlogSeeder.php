<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Example Blog Post 1',
            'image' => 'path/to/image1.jpg',
            'author' => 'Admin',
            'category' => 'Web Design',
            'content' => 'This is a sample content for blog post 1.',
            'comments_count' => 15
        ]);

        // Add more sample blogs here...
    }
}

