<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ensembles - @yield('title')</title>
  <link rel="icon" href="./favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="./image/treble-clef.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="./image/treble-clef-180.png"><!-- 180×180 -->
  <link rel="manifest" href="/manifest.webmanifest">
  @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
  @include('web.layouts.header')
  <main class="grow shrink-0 basis-auto flex items-stretch">
    @yield('content')
  </main>
  @include('web.layouts.footer')
  @vite('resources/js/app.ts')
  @stack('scripts')
</body>
</html>
