@extends('web.layouts.master')

@section('title', 'Class Full')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Already Registered</h1>
            <p class="mt-6 text-lg">
                Sorry! {{ $course->name }} is full this session. <a href="/contact-us/full-class">Contact us</a> if you would like to be
                added to the waitlist.
            </p>
    </header>
</section>
@stop
