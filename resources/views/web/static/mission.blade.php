@extends('web.layouts.master')

@section('title', 'Mission')

@section('content')
  <main class="mx-auto max-w-7xl px-6">
    <div class="mx-auto max-w-2xl md:text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Our Mission</h1>
      <p class="mt-6 text-lg leading-8">
        Making music accessible to the community of Charlestown and surrounding areas regardless of age,
        skill level, background or financial means. To provide people the opportunity to explore the joy and
        lifelong value of music through education, performance and community engagement.
      </p>
    </div>
    <div class="mt-4 text-lg md:hidden">
      <p class="my-2">Meet <a class="text-primary-dark hover:underline" href="./board.html">our board of directors</a>.</p>
      <p class="my-2">Learn about <a class="text-primary-dark hover:underline" href="./supporters.html">our supporters</a></p>
    </div>
    <div class="mt-10 py-2 text-center border-gray border-solid border-t">
      Ensembles, Inc. is a registered 501(c)(3) organization based in Charlestown, IN.
    </div>
  </main>
 @stop

