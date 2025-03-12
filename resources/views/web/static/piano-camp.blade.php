@extends('web.layouts.master')

@section('title', 'Piano Camp')

@section('content')

<article class="mx-auto max-w-7xl px-6">

    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl text-center mb-4">Piano Camp</h1>

<img src="{{ asset('image/hero/piano-camp.JPG') }}"
alt="Piano Summer Camp"
loading="eager">
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Choose Your Age Group</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Ages 8-12 Button -->
            <a href="{{ route('register', ['classId' => 195]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
                <span class="text-xl font-bold mb-2">Ages 8-12</span>
            </a>

            <!-- Ages 13-18 Button -->
            <a href="{{ route('register', ['classId' => 196]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
                <span class="text-xl font-bold mb-2">Ages 13-18</span>
            </a>
        </div>
    </div>
</article>
@endsection
