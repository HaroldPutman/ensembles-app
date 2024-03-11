@extends('web.layouts.master')

@section('title', 'Events')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Events</h1>
        <p class="mt-6 text-lg">
            Ensembles is excited to host arts events for Charlestown and surrounding communities!
            All events are are held at <a class="hover:underline text-primary-dark" href="https://maps.app.goo.gl/WqYGomh8Q6roJKAc8">1120 Monroe Street</a> in Charlestown.
        </p>
    </header>
    <div class="mt-4">

        @foreach ($events as $event)
        <article class="md:w-3/4 mx-auto border-2 drop-shadow-sm border-gray-mist px-4 py-2 mb-6">
            <h2 class="text-2xl">{{ $event->name }}</h2>
            <p class="text-gray">{{ $event->start->format('l, F j \a\t g:i A') }} - {{ $event->end->format('g:i A') }}</p>
            <div class="markdown-body">{!! Str::markdown($event->description) }</div>
            @if ($event->course_id)
            <p class="flex justify-end">
                <a href="{{ '/register/' . $event->course_id }}" title="Register for {{ $event->name }}"
                    class="flex w-48 items-center justify-center rounded-md border border-transparent bg-gray-dark px-4 py-2 text-base font-medium text-white shadow-sm">Register</a>
            </p>
            @endif
        </article>
        @endforeach
        <article class="mx-auto w-full my-2">
            <div class="mx-8">
                <h2 class="mt-4 text-xl font-bold tracking-tight text-gray">Deanne Moore Art Gallery</h2>
                <p>The Deanne Moore Art Gallery is proud to host exhibitions including the works of local artists.</p>
            </div>
        </article>
    </div>
</section>
@stop
