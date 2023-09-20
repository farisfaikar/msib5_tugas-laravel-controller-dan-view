<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('img/faris-logo-64.png') }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>MSIB 5 - Tugas Laravel Controller dan View</title>
</head>

<body class="dark:bg-gray-950 dark:text-white">
  <header>
    @include('components.navbar')
  </header>

  <main>
    @yield('container')
  </main>

  <footer>
    @include('components.footer')
  </footer>
</body>

</html>
