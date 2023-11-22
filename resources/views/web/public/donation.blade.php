@extends('web.layouts.focused')

@section('title', 'Checkout')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center px-2 mb-4">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Donation Amount</h1>
        <p class="mt-6 text-lg">
            {{ $student->firstname }} {{ $student->lastname }}, we're excited to have you join us for {{ $course->name }}!
            There is no charge for this group, but your donation will help us continue to provide
            music education to the community.
        </p>
    </header>
    <article class="mx-auto max-w-2xl md:text-center px-2">
        <form action="{{route('register-donate')}}" method="POST" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="course_id" value="{{ $course->id }}">
            <input type="hidden" name="student_id" value="{{ $student->id }}">
            <label for="amount" class="block mb-2">Would you like to make a donation?</label>
            <span class="mx-2">$</span><input type="text" name="amount" value="{{ $course->price }}" id="amount">
            <div class="italic">Suggested donation ${{ $course->price }}</div>
            <button name="will-donate" value="no" type="submit" class="mt-4 py-3 px-5 text-sm font-medium text-center text-white rounded-md bg-gray sm:w-fit hover:bg-gray-dark focus:ring-4 focus:outline-none focus:ring-primary-light disabled:opacity-25">
                No donation
            </button>
            <button name="will-donate" value="yes" type="submit" class="mt-4 py-3 px-5 text-sm font-medium text-center text-white rounded-md bg-primary sm:w-fit hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-primary-light disabled:opacity-25">
                Continue to Payment
            </button>
        </form>
    </article>
</section>
@stop
