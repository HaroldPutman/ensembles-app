@extends('web.layouts.master')

@section('title', 'Events')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Events</h1>
        <p class="mt-6 text-lg">
            Ensembles is excited to host arts events for Charlestown and surrounding communities!
            All events are free and are held at 1120 Monroe St. in Charlestown unless otherwise noted.
        </p>
    </header>
    <div>

        @foreach ($events as $event)
        <article class="md:w-3/4 mx-auto border-2 drop-shadow-sm border-gray-mist px-4 py-2 mb-6">
            <h2 class="text-2xl">{{ $event->name }}</h2>
            <p class="text-gray">{{ $event->start->format('l, F j \a\t g:i A') }} - {{ $event->end->format('g:i A') }}</p>
            <p>{{ $event->description }}</p>
        </article>
        @endforeach
        <article class="mx-auto w-full my-2">
            <div class="mx-8">
                <h2 class="mt-4 text-xl font-bold tracking-tight text-gray">Deanne Moore Art Gallery</h2>
                <p>The Deanne Moore Art Gallery will kick off our second art show <a class="hover:underline text-primary-dark" href="/gallery/blue">Blue</a> Sept 18 - Oct 22, 2023.
            </div>
        </article>
    </div>
</section>
@stop
