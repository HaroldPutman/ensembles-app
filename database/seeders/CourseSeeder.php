<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'name' => 'Art: Drawing',
                'start' => '2023-08-22 10:00:00',
                'ages' => 'Elementary',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => 'Drawing class for elementary students.',
                'created_at' => '2023-06-19 09:02:00'
            ],
            [
                'name' => 'Art: Drawing',
                'start' => '2023-08-22 11:00:00',
                'ages' => 'Middle/High school',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => 'Drawing class for middle and high school students.',
                'created_at' => '2023-06-19 09:24:00'
            ],
            [
                'name' => 'Beginning Band Enrichment',
                'start' => '2023-08-22 16:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => <<<'DESC'
                This 6-week class is designed to jump-start any student who is beginning a new
                instrument in band at school. This class will reinforce skills being taught in the
                school band program by closely monitoring the student’s progress through their
                beginning stages. Skills we will focus on are: instrument assembly, instrument
                care, hand position, posture, breath control, embouchure placement and
                fingerings. I will also reinforce and review basic note and rhythm reading skills as
                aligned with the method book being used at school. Students must be enrolled in
                beginning band class at school. All students will need to bring an instrument in
                good working condition, the method book currently used at school, and any reeds
                or valve oil specific the instrument they play. This class is not for beginning
                percussion students, only woodwind and brass instruments at this time.
                DESC,
                'created_at' => '2023-06-19 09:26:00'
            ],
            [
                'name' => 'Beginning Percussion',
                'start' => '2023-08-22 17:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:26:45'
            ],
            [
                'name' => 'Beginning Piano & Ukulele',
                'start' => '2023-08-23 11:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:27:03'
            ],
            [
                'name' => 'Rhythm Sticks and Recorder Rudiments',
                'start' => '2023-08-24 11:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:29:00'
            ],
            [
                'name' => 'Beginning Piano',
                'start' => '2023-08-24 16:00:00',
                'ages' => 'Ages 8 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:28:00'
            ],
            [
                'name' => 'Drawing on the Right Side of the Brain',
                'start' => '2023-08-24 17:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:30:00'
            ],
            [
                'name' => 'Beginning Ukulele',
                'start' => '2023-08-24 17:00:00',
                'ages' => 'Ages 8-12',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:31:00'
            ],
            [
                'name' => 'Beginning Guitar',
                'start' => '2023-08-24 18:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:32:00'
            ],
            [
                'name' => 'Beginning Voice',
                'start' => '2023-08-24 18:00:00',
                'ages' => 'Ages 10 and up',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:32:30'
            ],
            [
                'name' => 'Beginning Handbells',
                'start' => '2023-08-24 18:00:00',
                'ages' => 'Ages 8 through adult',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:33:00'
            ],
            [
                'name' => 'Rhythm Sticks and Recorder Rudiments',
                'start' => '2023-08-26 13:00:00',
                'ages' => 'Ages 8 through adult',
                'level' => 'beginner',
                'status' => 'unavailable',
                'duration' => 6,
                'description' => '',
                'created_at' => '2023-06-19 09:34:00'
            ],
        ]);
    }
}
