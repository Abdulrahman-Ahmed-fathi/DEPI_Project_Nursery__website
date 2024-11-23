<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        Facility::insert([
            [
                'name' => 'Play Ground',
                'icon' => 'flaticon-050-fence',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
            [
                'name' => 'Music and Dance',
                'icon' => 'flaticon-022-drum',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
            [
                'name' => 'Arts and Crafts',
                'icon' => 'flaticon-030-crayons',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
            [
                'name' => 'Safe Transportation',
                'icon' => 'flaticon-017-toy-car',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
            [
                'name' => 'Healthy food',
                'icon' => 'flaticon-025-sandwich',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
            [
                'name' => 'Educational Tour',
                'icon' => 'flaticon-047-backpack',
                'description' => 'Kasd labore kasd et dolor est rebum dolor ut...'
            ],
        ]);
    }
}
