<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

</head>

<body>


@guest

    <header>
        <div class="logo">MAVEDAFILMS</div>
        <nav class="main-nav">
            <a href="#incio">Inicio</a>
            <a href="#series">Series</a>
            <a href="#peliculas">Peliculas</a>
            <a href="#mylist">Mis listas</a>
        </nav>

    </header>

@endguest

@yield('content')

<footer>

    <div class="spacefooter"></div>
    <div class="icon">MAVEDAFILMS</div>
    <div class="spacefooter"></div>
    <div class="enlaces">
        <a href="#">Política de privacidad</a>
        <a href="#">Política de cookies</a>
        <a href="#">Ayuda</a>
        <a href="#">Dispositivos compatibles</a>
        <a href="#">Administrar preferencias</a>
        <a href="#">Contrato de suscripción</a>
        <a href="#">Términos y condiciones</a>

    </div>

    <div class="derechosreservados">

        <p>©Mavedafilms. Todos los derechos reservados</p>

    </div>

</footer>


</div>


@yield('footer')



</body>

</html>
