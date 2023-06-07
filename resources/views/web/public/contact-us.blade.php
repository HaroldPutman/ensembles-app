@extends('web.layouts.master')

@section('title', 'Contact Us')

@section('content')
  <article class="mx-auto md:w-3/4 w-full px-6">
    <div class="mx-auto max-w-2xl md:text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Contact Us</h1>
      @if(session()->has('success'))
        <div class="bg-success-mist border-l-4 border-success text-success p-2 text-left my-2" role="alert">
          <p class="font-bold">Thank you!</p>
          <p>{{session()->get('success')}}</p>
        </div>
      @elseif(session()->has('error'))
        <div class="bg-error-mist border-l-4 border-error text-error p-2 text-left my-2" role="alert">
          <p class="font-bold">Oh No!</p>
          <p>{!! session()->get('error') !!}</p>
        </div>
      @else
        <p class="mt-6 text-lg leading-8">
          We look forward to hearing from you.
        </p>
      @endif
      <form id="contact-us" action="{{route('create-lead')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <input type="hidden" name="context" value="{{ $context }}">
        <div>
            <label for="name" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your name</label>
            <input type="text" id="name" name="name" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Enter your name..." required>
        </div>
        <div>
            <label for="email" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your email</label>
            <input type="email" id="email" name="email" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="mail@example.com" required>
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your message</label>
            <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-dark bg-gray-mist rounded-md shadow-sm border border-gray-light focus:ring-primary focus:border-primary-500" placeholder="Leave a comment..."></textarea>
        </div>
        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-md bg-primary sm:w-fit hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-primary-light disabled:opacity-25">
            Send message
        </button>
    </form>
    </div>
  </article>
@stop
