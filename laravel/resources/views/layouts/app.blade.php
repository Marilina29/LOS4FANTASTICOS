<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'glassbeat') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62ba28ee55.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <a class="logo" href="{{ route('home') }}"> <img src="imagenes/glassBeat-logo.png" width="150" height="50"  alt="GlassBeat"> </a>
    <ul class="ulheader">
      <li class="liheader"> <a class="aheader" href="shop.php"> SHOP </a> </li>
      <li class="liheader"> <a class="aheader" href="historia.php"> HISTORIA </a> </li>
      <li class="liheader"> <a class="aheader" href="mailto:marilina_29@hotmail.com"> CONTACTO </a> </li>
      <li class="liheader"> <a class="aheader" href="index.php#envios"> ENVIOS </a> </li>
    </ul>

    <ul class="uliconos">

      <li class="naviconos"> <a href="#">
        <i class="colorb fas fa-user-circle"></i></a>
        <ul class="dropdown">

        @guest
                    <li><a class="logs" href="{{ route('login') }}">LOGIN</a></li>
        @if (Route::has('register'))
                    <li><a class="logs" href="{{ route('register') }}">REGISTRATE</a></li>
        @endif
        @else

<li><a <a id="navbarDropdown" class="logs" href="#" role="button">
    {{ Auth::user()->name }} <span class="caret"></span>
</a></li>
<li><a class="logs" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
 {{ __('SALIR') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
              </li>
          @endguest
                </ul>
      </li>
      <li class="naviconos"> <a href="buscar.php"><i class="colorb fas fa-search"></i></a> </li>
      <li class="naviconos"> <a href="carrito.php"><i class="colorb fas fa-shopping-bag"></i></a> </li>
      <li class="navbar"> <a href="#menu"><i class="fas fa-bars"></i></i></a> </li>
    </ul>
  </header>

        <main>
            @yield('content')
        </main>
    </div>
    <footer>
      <ul>
        <li> <a href="https://www.instagram.com/glassbeatart/"><i class="fab fa-instagram"></i></a> </li>
        <li> <a href="https://www.facebook.com/GlassBeatArt/"><i class="fab fa-facebook"></i> </a> </li>
        <li> <a href="mailto:marilina_29@hotmail.com"> <i class="fas fa-paper-plane"></i></a> </li>
      </ul>
    </footer>
</body>
</html>
