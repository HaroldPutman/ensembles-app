@extends('web.layouts.master')

@section('title', 'Pirate Music Camp')

@section('content')

<article class="mx-auto max-w-7xl px-6">

    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl text-center mb-4">Pirate Music Camp</h1>

<img src="{{ asset('image/hero/pirate-music.jpg') }}"
alt="Pirate Music Camp"
loading="eager">
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Reserve Your Spot</h2>
        <div class="flex justify-center">
            <a href="{{ route('register', ['classId' => 194]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
                <span class="text-xl font-bold mb-2">Register Now</span>
            </a>
        </div>
    </div>
</article>
@endsection
