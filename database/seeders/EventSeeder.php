<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'Taylor Swift music and bracelets',
                'start' => '2023-08-18 18:00:00',
                'end' => '2023-08-18 20:00:00',
                'description' => <<<'DESC'
                Invite some friends and come out together for a fun night of creating friendship bracelets while enjoying some Taylor Swift music!
                We may even have some trivia for the real Swifties at Ensembles! 🎼
                Free- donations accepted
                We have all the beads and snacks you will need.
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Tailgate on the Lawn',
                'start' => '2023-08-25 17:30:00',
                'end' => '2023-08-25 18:30:00',
                'description' => <<<'DESC'
                Rob Marlin will be providing music and 2nd district council and President of the
                City Council, Ruthie Jackson will be providing hamburgers and hotdogs
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Tailgate on the Lawn',
                'start' => '2023-09-1 17:30:00',
                'end' => '2023-09-1 18:30:00',
                'description' => <<<'DESC'
                Join us before the football game for hamburgers, hot dogs, and live music.
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Tailgate on the Lawn',
                'start' => '2023-09-15 17:30:00',
                'end' => '2023-09-15 18:30:00',
                'description' => <<<'DESC'
                Join us before the football game for hamburgers, hot dogs, and live music by
                Jeeny Carr.
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Tailgate on the Lawn',
                'start' => '2023-09-22 17:30:00',
                'end' => '2023-09-22 18:30:00',
                'description' => <<<'DESC'
                Join us before the football game for hamburgers, hot dogs, and live music.
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Tailgate on the Lawn',
                'start' => '2023-10-6 17:30:00',
                'end' => '2023-10-6 18:30:00',
                'description' => <<<'DESC'
                Join us before the football game for hamburgers, hot dogs, and live music.
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],
            [
                'name' => 'Parents night out',
                'start' => '2023-11-10 18:00:00',
                'end' => '2023-11-10 21:00:00',
                'description' => <<<'DESC'
                Drop the kids off for a night of arts-oriente fun featuring "The Greatest Showman".
                DESC,
                'created_at' => '2023-08-22 21:02:00'
            ],

        ]);
    }
}
