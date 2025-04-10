@extends('web.layouts.master')

@section('title', 'Summer 2025')

@section('content')
<article class="mx-auto max-w-7xl px-6">
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl text-center mb-8">Summer 2025</h1>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-primary mb-3">Making Slime Together</h2>
            <p class="text-gray-dark mb-4">
                Join us to create together for a great cause! Saturday May 17th 1:00-3:30 Ben and Crystal Woods from Look out for the Left Out
                will be organizing us to make SLIME together that will benefit the Casa Calla House for vulnerable girls in Romania.
                Plus there will be other fun surprises as well as door prizes and ice cream provided by the NWSB Fun Truck
            </p>
            <a href="{{ route('make-slime') }}" class="w-32 inline-block bg-primary text-white px-4 py-2 rounded-md hover:bg-primary-dark text-center">Make Slime!</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-primary mb-3">Pirate Music Camp</h2>
            <p class="text-gray-dark mb-4">
                Set sail on a musical adventure with our pirate-themed music camp. Students will learn sea shanties, play fun games, and develop their musical skills.
                Join us Monday June 16 to Friday June 20 daily 9:00 AM - 12:00 PM. Open to students ages 5-11.
            </p>
            <a href="{{ route('music-camp') }}" class="w-32 inline-block bg-primary text-white px-4 py-2 rounded-md hover:bg-primary-dark text-center">Ahoy!</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-primary mb-3">Piano Camps</h2>
            <p class="text-gray-dark mb-4">
                Whether you are a beginner, have some experience, or are a seasoned pianist, our piano camps offer the perfect environment
                to have fun and develop your skills. We'll have lessons, games, and performance opportunities.
                Join us Monday June 23 to Friday June 27 daily 9:00 AM - 12:00 PM (ages 8-12) or 1:00 PM - 4:00 PM (ages 13-18).
            </p>
            <a href="{{ route('piano-camp') }}" class="w-32 inline-block bg-primary text-white px-4 py-2 rounded-md hover:bg-primary-dark text-center">Go Piano!</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-primary mb-3">Summer Art Camp</h2>
            <p class="text-gray-dark mb-4">
                Launch your student's love for art with our space-themed art camp! Students will explore various mediums including drawing, sculpture, painting, and more.
                Join us Monday July 14 to Thursday July 17 daily 10:00 AM - 12:00 PM. Open to students ages 6-11.
            </p>
            <a href="{{ route('art-camp') }}" class="w-32 inline-block bg-primary text-white px-4 py-2 rounded-md hover:bg-primary-dark text-center">Blast off!</a>
        </div>
    </div>
</article>
@endsection
