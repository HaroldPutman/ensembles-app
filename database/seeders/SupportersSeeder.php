<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supporters')->insert([
            [
                'name' => 'Charlestown Lions Club',
                'image_path' => 'lionsclub.png',
                'url' => 'https://www.facebook.com/charlestownindianalions/',
                'created_at' => '2023-03-14 08:30:00'
            ],
            [
                'name' => 'Greater North Clark Health Foundation',
                'image_path' => 'gnchf.jpg',
                'url' => 'http://gnchf.com/home.aspx',
                'created_at' => '2023-03-14 08:29:00'
            ],
            [
                'name' => 'Psi Iota Xi Sorority',
                'image_path' => 'psi-iota-xi.jpg',
                'url' => 'https://psiiotaxi.org/',
                'created_at' => '2023-03-14 08:28:00'
            ],
            [
                'name' => 'iCrossing matching gift',
                'image_path' => 'hearst.png',
                'url' => 'https://icrossing.com/',
                'created_at' => '2023-03-14 08:27:00'
            ],
            [
                'name' => 'Bree\'s Blessings',
                'image_path' => 'brees-blessings.png',
                'url' => 'https://www.breesblessings.org/',
                'created_at' => '2023-03-14 08:26:00'
            ],
            [
                'name' => 'Rybuilt Custom Homes',
                'image_path' => 'rybuilt.png',
                'url' => 'https://rybuilt.com/',
                'created_at' => '2023-03-14 08:25:00'
            ],
            [
                'name' => 'Mayor Treva Hodges',
                'image_path' => 'treva.png',
                'url' => 'https://www.mayortreva.com/',
                'created_at' => '2023-03-14 08:24:00'
            ],
            [
                'name' => 'Barry D Early Designs',
                'image_path' => 'barry-d-early-designs.png',
                'url' => 'https://www.barrydearlydesigns.com/',
                'created_at' => '2023-03-14 08:23:00'
            ]
        ]
        );
    }
}
