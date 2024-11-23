<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teacher::insert([
            ['name' => 'Julia Smith', 'subject' => 'Music Teacher', 'photo' => 'img/team-1.jpg'],
            ['name' => 'Jhon Doe', 'subject' => 'Language Teacher', 'photo' => 'img/team-2.jpg'],
            ['name' => 'Mollie Ross', 'subject' => 'Dance Teacher', 'photo' => 'img/team-3.jpg'],
            ['name' => 'Donald John', 'subject' => 'Art Teacher', 'photo' => 'img/team-4.jpg'],
        ]);
    }
}
