@extends('web.layouts.master')

@section('title', 'Mini Musicians')

@section('content')

<article class="mx-auto max-w-7xl px-6">

    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl text-center mb-4">Mini Musicians</h1>

<img src="{{ asset('image/hero/mini-musicians.jpg') }}"
alt="Mini Musicians"
loading="eager">
    <p class="mt-4 text-lg text-center">Next session classes start in August.</p>
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Choose your class</h2>
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Friday Button -->
            <a href="{{ route('register', ['classId' => 208]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark mb-2">
                <span class="text-xl font-bold">Fridays 10AM</span>
            </a>
        </div>
    </div>
</article>
@endsection
