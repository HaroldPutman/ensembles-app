@extends('web.layouts.master')

@section('title', 'Thank you')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Thank you</h1>
        @if ($transactionId == 'PROVISIONAL:CHECK')
            <p class="mt-6 text-lg">
                We've got everything we need for your registration. When we receive your check,
                your registration will be complete.
            </p>
            <p class="mt-4 text-lg">
                Please make your check payable to:
            </p>
            <address>
                Ensembles
                1120 Monroe St.
                Charlestown, IN 47111
            </address>
            <p>
                Please include the student name on the memo line.
            </p>
        @else
            <p class="mt-6 text-lg">
                Your registration is complete.
            </p>
        @endif
    </header>
</section>
@stop
