<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boolpress</title>
</head>
<body>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Boolpress</a>
        <ul class="navbar-nav px-3 ml-auto">
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    Visita il sito
                </a>
            </li> --}}
              @if (Route::has('login'))
            <li class="top-right links">
                @auth
                    <a class="text-secondary" href="{{ route('admin.home') }}">Home</a>
                @else
                    <a class="text-secondary" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="text-secondary" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </li>
        @endif
        </ul>
    </nav>

  
  <div id="root">
  </div>
  
  <script src=" {{ asset('js/front.js')}}"></script>

</body>
</html>

