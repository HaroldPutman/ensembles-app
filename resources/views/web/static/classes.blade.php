@extends('web.layouts.master')

@section('title', 'Classes')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Classes</h1>
        <p class="mt-6 text-lg">
            Ensembles offers six week group classes which will start the week of
            August 22, 2023. Registration will open on June 24.
            The cost of a six-week session is $75 per student. Scholarships
            are available.
        </p>
    </header>
    <div>

        @foreach ($courses as $course)
        <article class="w-3/4 mx-auto border-2 drop-shadow-sm border-gray-mist px-4 py-2 mb-4">
            <h2 class="text-2xl">{{ $course->name }}</h2>
            <p class="text-gray">{{ $course->start->format('l') }} at {{ $course->start->format('g:i A') }}</p>
            <p class="text-gray">{{ $course->ages }}</p>
            <p>{{ $course->description }}</p>
            <p class="flex justify-end">
            <a href="/register/id" title="Registration opens June 24"
            class="flex w-48 items-center justify-center rounded-md border border-transparent bg-gray-light px-4 py-2 text-base font-medium text-gray-dark cursor-not-allowed shadow-sm">Register</a>
            </p>
        </article>
        @endforeach
    </div>
</section>
@stop
