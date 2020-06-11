
@extends ('layouts.multimedia')
@section('content')



    <div class="backgrounds">

        <div class="slider" id="main-slider"><!-- outermost container element -->
            <div class="slider-wrapper"><!-- innermost wrapper element -->
                <img src="{{asset('backgrounds/unwater.jpg')}}" alt="First" class="slide" /><!-- slides -->
                <img src="{{asset('backgrounds/eldragon.jpg')}}" alt="Second" class="slide" />
                <img src="{{asset('backgrounds/starwars.jpg')}}" alt="Third" class="slide" />
            </div>
        </div>


    </div>

    <div class="spacebackgrounds">

    </div>


    <div class="peliculas-recomendadas contenedor">
        <div class="contenedor-titulo-controles">
            <h3>Series</h3>
            <div class="indicadores"></div>
        </div>

        <div class="contenedor-principal">
            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

            <div class="contenedor-carousel">
                <div class="carousel" id="series">
                    @foreach($series as $serie )
                                <div class="pelicula">
                                    <a href="{{route('verserie.show', $serie->id)}}">
                                        <img src="{{asset('storage/'.$serie->cover)}}">

                                    </a>
                                </div>
                            @endforeach
                </div>
            </div>

            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>


    <div class="peliculas-recomendadas contenedor">
        <div class="contenedor-titulo-controles">
            <h3>Peliculas</h3>
            <div class="indicadores"></div>
        </div>

        <div class="contenedor-principal">
            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

            <div class="contenedor-carousel">
                <div class="carousel" id="pelis">
                    @foreach($movies as $movie )
                    <div class="pelicula">
                        <a href="{{route('verpelicula.show', $movie->id)}}">
                            <img src="{{asset('storage/'.$movie->cover)}}">

                        </a>
                    </div>

                    @endforeach
                </div>
            </div>

            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>


    <div class="peliculas-recomendadas contenedor" id="recomendados">
        <div class="contenedor-titulo-controles">
            <h3>Apta para todos los publicos</h3>
            <div class="indicadores"></div>
        </div>

        <div class="contenedor-principal">
            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

            <div class="contenedor-carousel">
                <div class="carousel">
                    @foreach($movies as $movie )
                        @if($movie->kid_restriction == 3)

                            <div class="pelicula">
                                <a href="{{route('verpelicula.show', $movie->id)}}">
                                    <img src="{{asset('storage/'.$movie->cover)}}">

                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>






    <script>

        (function() {

            function Slideshow( element ) {
                this.el = document.querySelector( element );
                this.init();
            }

            Slideshow.prototype = {
                init: function() {
                    this.wrapper = this.el.querySelector( ".slider-wrapper" );
                    this.slides = this.el.querySelectorAll( ".slide" );
                    this.previous = this.el.querySelector( ".slider-previous" );
                    this.next = this.el.querySelector( ".slider-next" );
                    this.index = 0;
                    this.total = this.slides.length;
                    this.timer = null;

                    this.action();
                    this.stopStart();
                },
                _slideTo: function( slide ) {
                    var currentSlide = this.slides[slide];
                    currentSlide.style.opacity = 1;

                    for( var i = 0; i < this.slides.length; i++ ) {
                        var slide = this.slides[i];
                        if( slide !== currentSlide ) {
                            slide.style.opacity = 0;
                        }
                    }
                },
                action: function() {
                    var self = this;
                    self.timer = setInterval(function() {
                        self.index++;
                        if( self.index == self.slides.length ) {
                            self.index = 0;
                        }
                        self._slideTo( self.index );

                    }, 4000);
                },
                stopStart: function() {
                    var self = this;
                    self.el.addEventListener( "mouseover", function() {
                        clearInterval( self.timer );
                        self.timer = null;

                    }, false);
                    self.el.addEventListener( "mouseout", function() {
                        self.action();

                    }, false);
                }


            };

            document.addEventListener( "DOMContentLoaded", function() {

                var slider = new Slideshow( "#main-slider" );

            });


        })();



    </script>




    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>


@endsection