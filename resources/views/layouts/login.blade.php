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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/headerfooter.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/paymentmethod.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/planchoose.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/restpasswd.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/headerfooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paymentmethod.css') }}" rel="stylesheet">
    <link href="{{ asset('css/planchoose.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/restpasswd.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

</head>

<body>


@guest



    <header>
        <div class="logo">MAVEDAFILMS</div>
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

        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img class="cc" alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional</a>

</footer>


</div>


@yield('footer')



</body>

</html>
