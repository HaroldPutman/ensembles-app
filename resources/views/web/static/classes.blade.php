@extends('web.layouts.master')

@section('title', 'Classes')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Classes</h1>
        <p class="mt-6 text-lg">
            Ensembles typically runs six week sessions of group lessons. The next session runs from
            <em class="font-bold">February 24 through April 4</em>.
            The cost of the six-week session is $75 per student. Scholarships
            are available.
        </p>
        <p class="mt-4 text-lg">
            All classes are held at Ensembles, 1120 Monroe St. (Across the street from
            the Charlestown High School tennis courts.)
        </p>
        <p class="mt-4 mb-6 text-sm"><span class="font-bold">More to come.</span> If you don't see a class you are looking for, check
        back later, our next session is still taking shape.</p>
    </header>
    <div>

        @foreach ($courses as $course)
        <article class="md:w-3/4 mx-auto border-2 drop-shadow-sm border-gray-mist px-4 py-2 mb-6">
            <h2 class="text-2xl">{{ $course->name }}</h2>
            <p class="text-gray">
                @if ($course->duration == 1)
                    {{ $course->start->format('l M d') }} at {{ $course->start->format('g:i A') }}
                @elseif ($course->duration == 5)
                    {{ $course->start->format('l M d') }} to {{ $course->end->format('l M d') }} daily {{ $course->start->format('g:i A') }} - {{ $course->end->format('g:i A') }}
                @elseif ($course->duration == 99)
+                   {{ $course->start->format('l') }}s at {{ $course->start->format('g:i A') }} (Open Enrollment)
                @else
                    {{ $course->start->format('l') }}s at {{ $course->start->format('g:i A') }}
                @endif
            </p>
            <p class="text-gray">{{ $course->age_range }}</p>
            <p>{{ $course->description }}</p>
            @if ($course->status == 'full')
                <p class="text-xl text-error italic text-right">Sorry, this class is full.</p>
            @endif
           <p class="flex justify-end">
            @if ($course->status == 'open')
                <a href="{{ $course->alt_url ? $course->alt_url : '/register/' . $course->id }}" title="Registration is open"
                    class="flex w-48 items-center justify-center rounded-md border border-transparent bg-gray-dark px-4 py-2 text-base font-medium text-white shadow-sm">Register</a>
            @else
              <a class="flex w-48 items-center justify-center rounded-md border border-transparent bg-gray-dark px-4 py-2 text-base font-medium text-white shadow-sm opacity-30 cursor-not-allowed">Register</a>
            @endif
            </p>
        </article>
        @endforeach
    </div>
</section>
@stop
