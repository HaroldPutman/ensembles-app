@extends('web.layouts.master')

@section('title', 'Volunteer')

@section('content')
  <article class="mx-auto max-w-7xl px-6">
    <div class="mx-auto max-w-2xl md:text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Volunteer.</h1>
      <p class="mt-6 text-lg leading-8">
        If you have available time, there's lots of ways to help at Ensembles. <a class="text-primary-dark hover:underline" href="/contact-us">Contact us</a> for more information.
      </p>
    </div>
    <div class="text-center mt-4">
      <p>Not interested in volunteering? Maybe you can <a class="text-primary-dark hover:underline" href="./give">give musical instruments or other gear</a>.</p>
    </div>
</article>
@stop
