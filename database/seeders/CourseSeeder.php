<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'name' => 'Drawing Class',
            'age_group_start' => 3,
            'age_group_end' => 6,
            'seats' => 40,
            'class_time' => '08:00:00',
            'tuition_fee' => 290.00,
        ]);

        Course::create([
            'name' => 'Language Learning',
            'age_group_start' => 3,
            'age_group_end' => 6,
            'seats' => 40,
            'class_time' => '08:00:00',
            'tuition_fee' => 290.00,
        ]);

        Course::create([
            'name' => 'Basic Science',
            'age_group_start' => 3,
            'age_group_end' => 6,
            'seats' => 40,
            'class_time' => '08:00:00',
            'tuition_fee' => 290.00,
        ]);
    }
}
