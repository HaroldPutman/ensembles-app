<div class="relative bg-white">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-center justify-between border-b-2 border-gray-mist py-4 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="/">
          <span class="sr-only">Ensembles, Inc.</span>
          <img class="h-16 w-auto sm:h-14" src="image/ensembles-black-logo.svg" alt="">
        </a>
      </div>
      <div class="-my-2 -mr-2 md:hidden">
        <button id="hdr-open" type="button"
          class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray hover:bg-gray-light hover:text-gray-dark focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-light"
          aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/bars-3 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <nav class="hidden space-x-10 md:flex">
        <div class="relative">
          <!-- Item active: "text-gray-dark", Item inactive: "text-gray" -->
          <button type="button"
            class="text-gray group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-dark focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2"
            aria-expanded="false" data-toggle="#hdr-about">
            <span>About</span>
            <!--
                Heroicon name: mini/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
            <svg class="text-gray ml-2 h-5 w-5 group-hover:text-gray-dark" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </button>

          <!--
              'About' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
          <div id="hdr-about"
            class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 hidden">
            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                <a href="./mission" class="-m-3 flex items-start p-3 text-gray hover:bg-gray-mist hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">
                  <p class="text-base font-medium">Our mission</p>
                </a>
                <a href="./board" class="-m-3 flex items-start p-3 text-gray hover:bg-gray-mist hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">
                  <p class="text-base font-medium">Our board of directors</p>
                </a>
                <a href="./supporters" class="-m-3 flex items-start p-3 text-gray hover:bg-gray-mist hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">
                  <p class="text-base font-medium">Our supporters</p>
                </a>
                <a href="/contact-us" class="-m-3 flex items-start p-3 text-gray hover:bg-gray-mist hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">
                  <p class="text-base font-medium">Contact us</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <a href="./classes" class="text-base font-medium text-gray hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">Classes</a>
        <a href="./events" class="text-base font-medium text-gray hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">Events</a>
        <a href="./notes" class="text-base font-medium text-gray hover:text-gray-dark rounded-md focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2">Notes</a>

        <div class="relative">
          <!-- Item active: "text-gray-dark", Item inactive: "text-gray" -->
          <button type="button"
            class="text-gray group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-dark focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2"
            aria-expanded="false" data-toggle="#hdr-involved">
            <span>Get&nbsp;involved</span>
            <!--
                Heroicon name: mini/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
            <svg class="text-gray ml-2 h-5 w-5 group-hover:text-gray-dark" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </button>

          <!--
              'Get Involved' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
          <div id="hdr-involved"
            class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0 hidden">
            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                <a href="./teach" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-mist">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-secondary">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-dark">Teach</p>
                    <p class="mt-1 text-sm text-gray">Want to share your music or art skills with others? We'd
                      love to have you join our team.</p>
                  </div>
                </a>

                <a href="./volunteer" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-mist">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-secondary">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-dark">Volunteer</p>
                    <p class="mt-1 text-sm text-gray">Not a musician or an artist? There are still ways you can
                      help.</p>
                  </div>
                </a>

                <a href="./give" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-mist">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-secondary">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-dark">Give Gear</p>
                    <p class="mt-1 text-sm text-gray">Have an extra trumpet or guitar you'd like to see getting
                      some playing time?</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
        <a href="https://www.paypal.com/donate/?hosted_button_id=XD9PM5ZS77HAY"
          class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">Donate</a>
      </div>
    </div>
  </div>

  <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
  <div id="hdr-mobile-menu" class="absolute inset-x-0 z-50 top-0 origin-top-right transform p-2 transition md:hidden hidden">
    <div class="divide-y-2 divide-gray-mist rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="px-5 pt-5 pb-6">
        <div class="flex items-center justify-between">
          <div>
            <img class="h-14 w-auto" src="image/ensembles-black-logo.svg" alt="">
          </div>
          <div class="-mr-2">
            <button id="hdr-close" type="button"
              class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-light">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x-mark -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="./mission" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-mist">
              <span class="ml-3 text-base font-medium text-gray-dark">About</span>
            </a>

            <a href="./classes" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-mist">
              <span class="ml-3 text-base font-medium text-gray-dark">Classes</span>
            </a>

            <a href="./events" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-mist">
              <span class="ml-3 text-base font-medium text-gray-dark">Events</span>
            </a>

            <a href="./teach" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-mist">
              <span class="ml-3 text-base font-medium text-gray-dark">Get&nbsp;involved</span>
            </a>
          </nav>
        </div>
      </div>
      <div class="space-y-6 py-6 px-5">
        <div>
          <a href="https://www.paypal.com/donate/?hosted_button_id=XD9PM5ZS77HAY"
            class="flex w-full items-center justify-center rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-dark">Donate</a>
          <p class="mt-6 text-center text-base font-medium text-gray  hover:bg-gray-mist">
            <a href="/contact-us" class="mt-6 text-sky-600">Contact us</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
