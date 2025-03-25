@extends('web.layouts.master')

@section('title', 'Making Slime Together')

@section('content')

<article class="mx-auto max-w-7xl px-6">

    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl text-center mb-4">Making Slime Together</h1>

<img src="{{ asset('image/hero/making-slime.jpg') }}"
alt="Making Slime Together"
loading="eager"
class="w-full max-w-5xl mx-auto rounded-lg shadow-md">
    <p class="text-center text-gray-dark mb-4">
        Make Slime for a good cause. This fun and meaningful event will include time with Ben and Crystal Woods learning about
        how to Look Out For The Left Out and making ooey gooey slime together for the Calla Lily Slime Shop that will be sold to benefit
        the Casa Calla House for vulnerable girls in Romania. In addition to slime making there will be lots of family fun including a family
        chalk design contest, door prizes, face painting and ice cream compliments of the New Washington State Bank. The cost per person
        is $15 and a family of four or more is only $50.
    </p>
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Choose your registration type</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Individual Button -->
            <a href="{{ route('register', ['classId' => 209]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
               <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">Individual $15</span>
                    <span class="text-sm">Single participant registration</span>
                </div>
            </a>

            <!-- Family Button -->
               <a href="{{ route('register', ['classId' => 210]) }}"
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
                 <div class="flex flex-col items-center">
                     <span class="text-xl font-bold">Family $50</span>
                     <span class="text-sm">For families of 4 or more</span>
                 </div>
             </a>
        </div>
    </div>
</article>
@endsection
