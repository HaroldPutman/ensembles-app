@extends('web.layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="w-full">
        <article class="relative bg-cover bg-center py-16 md:py-32 px-2"
        style="background-image:url(./image/ensembles-building.jpg);">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-dark opacity-70"></div>
        <div class="relative text-center">
            <h2
                class="text-4xl text-amber tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">
                 Spring into the Arts</h2>
            <p class="mt-3 text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
                We are located at 1120 Monroe St. in Charlestown, Indiana.
                Directly across the street from the Charlestown High School tennis courts.
            </p>
        </div>
       </article>
        <article class="relative bg-black pt-8 pb-32 px-4">
            <div class="relative text-center">
                <h2
                    class="text-4xl text-primary-light tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">
                    Classes</h2>
                <p class="mt-3 text-gray-mist sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
                    Our next session of classes starts September 15.
                </p>
                <a href="/classes"
                    class="mt-6 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">Learn
                    more</a>
            </div>
        </article>
        <article class="relative bg-gray-light pt-8 pb-32 px-4">
            <div class="text-center">
                <h2
                    class="text-4xl text-black tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">
                    Events</h2>
                <p class="mt-3 text-black sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
                    Join us for fundraising and arts events at our building at 1120 Monroe St.
                    in Charlestown.
                </p>
                <a href="/events"
                    class="mt-6 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gray px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-gray-dark">Learn
                    more</a>

            </div>
        </article>
        <article class="relative bg-cover bg-center py-16 md:py-32 px-2"
            style="background-image:url(./image/sarah-pink-guitar.jpg);">
            <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-dark opacity-70"></div>
            <div class="relative text-center">
                <h2
                    class="text-4xl text-secondary-light tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">
                    Making music together</h2>
                <p class="mt-3 text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
                    Ensembles is making music and art accessible to everyone in
                    Charlestown Indiana and
                    surrounding areas regardless of age,
                    skill level, background or financial means. We offer affordable group lessons so everyone
                    can experience the joy and lifelong value of music and art.
                </p>
            </div>
        </article>

    </div>
@stop
