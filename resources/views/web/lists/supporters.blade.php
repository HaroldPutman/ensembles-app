@extends('web.layouts.master')

@section('title', 'Supporters')

@section('content')
  <main class="mx-auto max-w-7xl px-6">
    <div class="mx-auto max-w-2xl md:text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Our supporters</h1>
      <p class="mt-6 text-lg leading-8">
        Ensembles would not be possible without the help of our generous supporters.
        <a href="/contact-us">Contact us</a> to find out
        how you can help.
      </p>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

          @foreach ($supporters as $supporter)

          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <article class="overflow-hidden rounded-lg shadow-lg pb-4">
                <a href="{{ $supporter->url }}">
                <img alt="Placeholder" class="block h-auto w-full" src="/image/supporter/{{ $supporter->image_path }}">
                </a>
                <h1 class="text-lg text-center mt-4">
                <a class="no-underline hover:underline text-black" href="{{ $supporter->url }}">
                    {{ $supporter->name }}
                </a>
                </h1>
            </article>
        </div>
        @endforeach
      </div>
    </div>
  </main>
@stop
