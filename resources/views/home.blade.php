@extends ('layouts.multimedia')
@section('content')

    <div class="backgrounds">

        <div class="slider" id="main-slider"><!-- outermost container element -->
            <div class="slider-wrapper"><!-- innermost wrapper element -->
                <img src="../../public/backgrounds/imagen_login.png'" alt="First" class="slide" /><!-- slides -->
                <img src="../../public/backgrounds/starwars.jpg" alt="Second" class="slide" />
                <img src="../../public/backgrounds/eldragon.jpg" alt="Third" class="slide" />
            </div>
        </div>


    </div>

    <section class="mainserie">
        @foreach($series as $serie )
            <article>
                <a href="{{route('verserie.show', $serie->id)}}">
                    <img src="{{asset('storage/'.$serie->cover)}}">

                </a>
            </article>
        @endforeach
    </section>

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

                    }, 2000);
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



@endsection