<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        Testimonial::insert([
            [
                'parent_name' => 'Parent 1', 
                'profession' => 'Doctor', 
                'quote' => 'Great place for children!', 
                'photo' => 'img/testimonial-1.jpg'
            ],
            [
                'parent_name' => 'Parent 2', 
                'profession' => 'Engineer', 
                'quote' => 'My child loves the activities here.', 
                'photo' => 'img/testimonial-2.jpg'
            ],
            [
                'parent_name' => 'Parent 3', 
                'profession' => 'Teacher', 
                'quote' => 'Fantastic experience overall.', 
                'photo' => 'img/testimonial-3.jpg'
            ],
        ]);
    }
}

