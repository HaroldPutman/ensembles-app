@extends('web.layouts.master')

@section('title', 'Teachers')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Our teachers</h1>
        <p class="mt-6 text-lg leading-8">
          Ensembles classes are taught by these highly qualified and carefully
          selected teachers.
        </p>
    </header>
    @foreach ($teachers as $teacher)
    <article class="sm:flex gap-4 my-6">
      <img class="flex-none w-32 h-32 mt-2 mb-1" src="/image/people/{{ $teacher->image_path }}">
      <div class="flex-auto">
        <h2 class="text-xl sm:text-2xl">{{ $teacher->name }}</h2>
        <p class="text-gray-dark">{{ $teacher->specialty }}</p>
        <div class="my-2 markdown-body">
            {!! Str::markdown($teacher->bio) !!}
        </div>
      </div>
    </article>
    @endforeach
</section>
@stop
