<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ensembles - @yield('title')</title>
  <link rel="icon" href="./favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="./image/treble-clef.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="./image/treble-clef-180.png"><!-- 180×180 -->
  <link rel="manifest" href="./manifest.webmanifest">
  @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
  <header class="relative bg-white">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-mist py-4 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="/">
            <span class="sr-only">Ensembles, Inc.</span>
            <img class="h-16 w-auto sm:h-14" src="/image/ensembles-black-logo.svg" alt="">
          </a>
        </div>
      </div>
    </div>
  </header>
  <main class="grow shrink-0 basis-auto flex items-stretch">
    @yield('content')
  </main>
</body>
</html>
