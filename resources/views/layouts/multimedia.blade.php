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

    {{-- js--}}



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

</head>

<body>




    <header>


        <div class="logo">MAVEDAFILMS</div>
        <nav class="main-nav">
            <a href="#">Inicio</a>
            <a href="{{route('homeserie')}}">Series</a>
            <a href="#">Peliculas</a>
            <a href="#">Mi lista</a>
        </nav>

        <div class="sub-nav">


                    <form class="buscador" action="{{route('search')}}">
                        <svg width="32" height="38" viewBox="0 0 32 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d)">
                                <g clip-path="url(#clip0)">
                                    <path d="M27.6719 25.9395L22.9984 20.0977C22.7875 19.834 22.5016 19.6875 22.2016 19.6875H21.4375C22.7312 17.6191 23.5 15.0176 23.5 12.1875C23.5 5.45508 19.1359 0 13.75 0C8.36406 0 4 5.45508 4 12.1875C4 18.9199 8.36406 24.375 13.75 24.375C16.0141 24.375 18.0953 23.4141 19.75 21.7969V22.752C19.75 23.127 19.8672 23.4844 20.0781 23.748L24.7516 29.5898C25.1922 30.1406 25.9047 30.1406 26.3406 29.5898L27.6672 27.9316C28.1078 27.3809 28.1078 26.4902 27.6719 25.9395ZM13.75 19.6875C10.4359 19.6875 7.75 16.3359 7.75 12.1875C7.75 8.04492 10.4312 4.6875 13.75 4.6875C17.0641 4.6875 19.75 8.03906 19.75 12.1875C19.75 16.3301 17.0687 19.6875 13.75 19.6875Z" fill="white"/>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0" width="32" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                </filter>
                                <clipPath id="clip0">
                                    <rect x="4" width="24" height="30" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <input class="buscar" type="text"  placeholder="buscar" name="search">
                    </form>
                </div>
        </div>
        <div class="sub-nav">
            <a href="#"><div class="fas fa-search sub-nav-logo">
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19.5" cy="19.5" r="19.5" fill="white"/>
                        <path d="M31 27.4615C31 30.2308 25.6037 33.5 19 33.5C12.8193 33.5 8.53655 30.2308 8.02602 28.3846C7.61759 23.2154 12.1144 21 14.6962 21H24.3963C28.4806 21 31 24.6541 31 27.4615Z" fill="#0F0F0D"/>
                        <circle cx="19" cy="11" r="7" fill="#0F0F0D"/>
                    </svg>

                </div>
            </a>
        </div>
    </header>





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



@yield('footer')



</body>

</html>
