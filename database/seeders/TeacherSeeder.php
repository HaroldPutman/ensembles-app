<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'name' => 'Rebecca Putman',
                'specialty' => 'Piano, Ukelele, General Music',
                'bio' => 'Rebecca grew up in Charlestown and has a master\'s degree in Music Education. Rebecca has over 30 years of teaching teaching experiece both in the classroom and as a private teacher.',
                'image_path' => 'profile-rebecca.jpg',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Chris Spencer',
                'specialty' => 'Percussion',
                'bio' => '',
                'image_path' => 'profile-picture.png',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Amy-Kristin Carroll',
                'specialty' => 'Art',
                'bio' => '',
                'image_path' => 'profile-picture.png',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Dixie Busby',
                'specialty' => 'Art',
                'bio' => 'Even after retiring from teaching art for 35 years, Dixie continued to "substitute teach" at Silver Creek Middle School. As a member of Charlestown\'s Beautification Committee, Dixie designed the city\'s bicentennial logo among many other artistic contributions. She is looking forward to working with students and families at Ensembles.',
                'image_path' => 'profile-dixie.jpg',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Sherri Massengale',
                'specialty' => 'Handbells',
                'bio' => '',
                'image_path' => 'profile-picture.png',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Joy Jones',
                'specialty' => 'Band instruments',
                'bio' => 'Joy Jones is very excited to share her love of instrumental music with the Ensembles community!! She comes with 35 years of experience teaching band and instrumental music classes to students of all grade levels! She is a graduate of Cedarville University with a degree in music K-12. She has also completed many post-graduate level classes in instrumental pedagogy, music theory, music technology and jazz studies. She has a love for music along with a passion to help students develop their gifts and talents! She is especially proficient in helping young beginners turn a strange looking instrument into their new best friend! When she is not teaching, she loves being involved in church activities, reading, performing in musical ensembles and spending time with her family.',
                'image_path' => 'profile-joy.jpg',
                'created_at' => '2023-06-19 12:04:00'
            ],
            [
                'name' => 'Rick McDonald',
                'specialty' => 'Guitar',
                'bio' => 'Rick is a professional musician, a retired middle school music teacher and a praise and worship leader in his church. Having played the piano, guitar and drums for over 40 years, Rick knows how to enjoy, express, perform and teach music.',
                'image_path' => 'profile-rick.jpg',
                'created_at' => '2023-06-19 12:04:00'
            ],
        ]);
    }
}
