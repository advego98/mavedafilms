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
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

</head>
<script>
    $(document).ready(function(){

        $(".buscar").keyup(function(){
           var name = $(".buscar").val();
            // alert(name);
            //Este if es para el Section que printamos cuando no tenga calores el inpuit se oculte
            if(name== ""){
                $(".backgrounds").show();
                $(".spacebackgrounds").show();
                $("#recomendados").show();
            }
            else{
                $(".backgrounds").hide();
                $(".spacebackgrounds").hide();
                $("#recomendados").hide();
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }
            });
            //peticion ajax para el datalist
            $.ajax({
                method:'POST',
                url:"{{route('buscadoresult')}}",
                data:{name:name},
                dataType:'json',
                success:function(data){
                    console.log(data);
                    var datax=$.parseJSON(data);
                    console.log(datax);
                    mostrar_movies ='';
                    mostrar_series="";
                    $.each(datax, function(i, item) {

                        // alert(i);
                        $.each(item, function(j, item2) {
                            if (i=="movies"){

                                ruta="/verpelicula/"+j;
                                almacenamiento="/storage/"+item2;
                                almacenamient='storage/'+item2;
                                mostrar_movies+='<div class="pelicula"><a href="'+ruta+'"><img src="'+almacenamiento+'"></a></div>';

                            } else if (i=="series"){
                                ruta="/verserie/"+j;
                                almacenamiento="/storage/"+item2;
                                almacenamient='storage/'+item2;
                                mostrar_series+='<div class="pelicula"><a href="'+ruta+'"><img src="'+almacenamiento+'"></a></div>';
                            }

                        });
                    });

                    if ( $("#pelis").length > 0 ) {
                        $("#pelis").empty();
                        $("#pelis").append(mostrar_movies);
                    }

                    if ( $("#series").length > 0 ) {
                        $("#series").empty();
                        $("#series").append(mostrar_series);
                    }
                   // console.log(mostrar_movies);
                }
            })

        })
    });




</script>

<body>




    <header>



        <div class="logo">MAVEDAFILMS</div>
        <nav class="main-nav">
            <a href="{{route('inicio.index')}}">Inicio</a>
            <a href="{{route('homeserie')}}">Series</a>
            <a href="{{route('homemovie')}}">Peliculas</a>
            <a href="{{route('lista.index')}}">Mi lista</a>
        </nav>


        <div class="sub-nav">


                    <div class="buscador">
                        <svg width="" height="" viewBox="0 0 32 38" fill="none" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <input class="buscar" type="text"  placeholder="buscar" name="search" list="multimedia_list">
                        <datalist id="multimedia_list">
                        </datalist>
                    </div>
                </div>
        </div>
        <div class="sub-nav">
            <a href="#"><div class="fas fa-search myperfil">
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

        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img class="cc" alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">licencia de Creative Commons Reconocimiento-NoComercial-SinObraDerivada 4.0 Internacional</a>

    </div>

</footer>



@yield('footer')



</body>

</html>
