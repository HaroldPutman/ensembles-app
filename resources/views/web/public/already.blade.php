@extends('web.layouts.master')

@section('title', 'Already Registered')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Already Registered</h1>
            <p class="mt-6 text-lg">
                Good news! {{ $student->firstname }} {{ $student->lastname }} is already registered for
                {{ $course->name }}. We're looking forward to seeing them!
            </p>
    </header>
</section>
@stop
