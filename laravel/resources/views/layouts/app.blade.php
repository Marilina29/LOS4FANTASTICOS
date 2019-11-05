<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
<!-- nuestro Menú va acá, hay que copiar las funcionalidades de abajo


  <header>
    <a class="logo" href="index.php"> <img src="imagenes/glassBeat-logo.png" width="150" height="50"  alt="glassBeat"> </a>
    <ul class="ulheader">
      <li class="liheader"> <a class="aheader" href="shop.php"> SHOP </a> </li>
      <li class="liheader"> <a class="aheader" href="historia.php"> HISTORIA </a> </li>
      <li class="liheader"> <a class="aheader" href="mailto:marilina_29@hotmail.com"> CONTACTO </a> </li>
      <li class="liheader"> <a class="aheader" href="index.php#envios"> ENVIOS </a> </li>
    </ul>

    <ul class="uliconos">
      <li class="naviconos"> <a href=<?php if($auth->usuarioLogueado()){ echo "perfil.php";} else { echo "login.php"; } ?>> <?php if($auth->usuarioLogueado()){?> <img class="imgPerfil" src="<?= $imagenPerfil ?> "> <?php } else { ?>
        <i class="colorb fas fa-user-circle"> <?php } ?> </i></a>
        <ul class="dropdown">
                    <li><a class="logs" href=<?php if($auth->usuarioLogueado()){ echo "perfil.php";} else { echo "login.php"; } ?>><?php if($auth->usuarioLogueado()){ echo "Perfil";} else { echo "Ingresar"; } ?></a></li>
                    <li><a class="logs" href="<?php if($auth->usuarioLogueado()){ echo "logout.php";} else { echo "register.php"; } ?>"><?php if($auth->usuarioLogueado()){ echo "Salir";} else { echo "Registrarse"; } ?></a></li>
                </ul>
      </li>
      <li class="naviconos"> <a href="buscar.php"><i class="colorb fas fa-search"></i></a> </li>
      <li class="naviconos"> <a href="carrito.php"><i class="colorb fas fa-shopping-bag"></i></a> </li>
      <li class="navbar"> <a href="#menu"><i class="fas fa-bars"></i></i></a> </li>
    </ul>
  </header>



-->



<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
