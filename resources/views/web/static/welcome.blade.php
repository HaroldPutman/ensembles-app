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
                Open for the Arts</h2>
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
                    Our next session of classes starts April 14.
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

        <!-- Newsletter Modal Trigger Button -->
        <div class="text-center py-8 bg-white">
            <button onclick="document.getElementById('newsletter-modal').showModal()"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">
                Subscribe to Our Newsletter
            </button>
        </div>

        <!-- Newsletter Modal -->
        <dialog id="newsletter-modal" class="p-0 w-11/12 md:w-3/4 lg:w-5/12 rounded-md shadow-lg backdrop:bg-gray-dark backdrop:bg-opacity-50">
            <div class="bg-white p-5">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-medium text-gray-dark">Subscribe to Our Newsletter</h3>
                    <button onclick="document.getElementById('newsletter-modal').close()"
                            class="text-gray-dark hover:text-gray-darker">
                        <span class="text-2xl">&times;</span>
                    </button>
                </div>
                <iframe src="https://cdn.forms-content.sg-form.com/767b7fcd-ff48-11ed-bf10-4609de055fa8"
                        class="w-full h-[600px]"
                        frameborder="0"
                        title="Newsletter Subscription Form"></iframe>
            </div>
        </dialog>

        <!-- Newsletter Modal Auto-popup Script -->
        <script>
            const modal = document.getElementById('newsletter-modal');

            // Close modal when clicking on backdrop
            modal.addEventListener('click', (e) => {
                const dialogDimensions = modal.getBoundingClientRect();
                if (
                    e.clientX < dialogDimensions.left ||
                    e.clientX > dialogDimensions.right ||
                    e.clientY < dialogDimensions.top ||
                    e.clientY > dialogDimensions.bottom
                ) {
                    modal.close();
                }
            });

            function setCookie(name, value, days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                document.cookie = name + "=" + value + ";expires=" + date.toUTCString() + ";path=/";
            }

            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
            }

            // Check if user has seen the modal before
            if (!getCookie('newsletter_modal_shown')) {
                // Show modal after 7 seconds
                setTimeout(() => {
                    modal.showModal();
                    // Set cookie to expire in 21 days
                    setCookie('newsletter_modal_shown', 'true', 21);
                }, 7000);
            }
        </script>
    </div>
@stop
