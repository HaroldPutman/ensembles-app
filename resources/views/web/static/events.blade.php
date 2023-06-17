@extends('web.layouts.master')

@section('title', 'Events')

@section('content')
<div class="mx-auto w-full md:w-3/4 px-6">
    <article class="mx-auto max-w-2xl md:text-center px-2">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Events</h1>
    </article>
    <article class="mx-auto w-full my-2">
        <div class="mx-8">
            <h2 class="mt-4 text-xl font-bold tracking-tight text-gray">Friday Fundraisers</h2>
            <ul role="list" class="list-disc list-inside text-gray">
                <li>Friendship bracelet party with music from Taylor Swift</li>
                <li>Painting party with <a href="https://www.redheadedprincessdesigns.com/" class="hover:underline">Red Headed Princess Designs</a></li>
                <li>Tailgate party with live music before each home football game</li>
                <li>Parents night out</li>
            </ul>
        </div>
    </article>
    <article class="mx-auto w-full my-2">
        <div class="mx-8">
            <h2 class="mt-4 text-xl font-bold tracking-tight text-gray">Deanne Moore Art Gallery</h2>
            <p>The Deanne Moore Art Gallery will kick off our first art show <a class="hover:underline text-primary-dark" href="/gallery/rhythm">Rhythm</a> August 5-September 10.
        </div>
    </article>

</div>
@stop
