@extends('web.layouts.master')

@section('title', 'Welcome')

@section('content')
  <div class="w-full">
    <article class="relative bg-cover bg-center py-16 md:py-32 px-2" style="background-image:url(./image/sarah-pink-guitar.jpg);">
      <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-dark opacity-70"></div>
      <div class="relative text-center">
        <h2 class="text-4xl text-secondary-light tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">Making music together</h2>
        <p class="mt-3 text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
          Ensembles is making music and art accessible to everyone in
          Charlestown Indiana and
          surrounding areas regardless of age,
          skill level, background or financial means. We offer affordable group lessons so everyone
          can experience the joy and lifelong value of music.
        </p>
      </div>
    </article>
    <article class="relative bg-black pt-8 pb-32 px-4">
        <div class="relative text-center">
            <h2 class="text-4xl text-primary-light tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">Classes</h2>
            <p class="mt-3 text-gray-mist sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
              Our first session of classes starts the week of Aug&nbsp;22,&nbsp;2023.
            </p>
            <a href="/classes"
            class="mt-6 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">Learn more</a>
        </div>
    </article>
    <article class="relative bg-gray-light pt-8 pb-32  px-4">
        <div class="text-center">
            <h2 class="text-4xl text-black tracking-tight leading-10 font-medium sm:text-5xl sm:leading-none md:text-6xl">Events</h2>
            <p class="mt-3 text-black sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5">
              Join us this summer and fall as we host several fundraising events
              at our new building.
            </p>
            <a href="/events"
            class="mt-6 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gray px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-gray-dark">Learn more</a>

        </div>
    <article>
    <!-- BEGIN: Benchmark Email Signup Form Code -->
      <script type="text/javascript" id="lbscript1747627" src="https://lb.benchmarkemail.com//code/lbformnew.js?mFcQnoBFKMQZYdqouRN%252F77J25jqXIyRIHwpiX%252FxqOLO4YWH0MgPb58j9ybR%252Bnt%252Fk"></script><noscript>Please enable JavaScript <br /><div align="center" style="padding-top:5px;font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;"><a href="https://www.benchmarkemail.com/email-marketing?utm_source=usersignupforms&utm_medium=customers&utm_campaign=usersignupforms" target="_new" style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;">Email Marketing </a> by Benchmark</div></noscript>
    <!-- END: Benchmark Email Signup Form Code -->
  </div>
 @stop
