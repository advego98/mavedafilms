@extends ('layouts.multimedia')
@section('content')

<div class="spacelist"></div>

    <div class="peliculas-recomendadas contenedor">
        <div class="contenedor-titulo-controles">
            <h3>Series</h3>
            <div class="indicadores"></div>
        </div>


        <div class="contenedor-principal">
            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

            <div class="contenedor-carousel">
                <div class="carousel" id="series">
                    @if(count($licontent)  < 1 )
                  <p class="notices">No hay series en favoritos</p>
                    @endif
                @foreach($licontent as $lista)
                            <div>
                <a class="pelicula" href="{{route('verserie.show', $lista->id)}}">
                    <img src="{{asset('storage/'.$lista->cover)}}">
                </a>
                            </div>

                    @endforeach
                </div>
            </div>

            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>

<div class="spacelist"></div>

    <div class="peliculas-recomendadas contenedor">
        <div class="contenedor-titulo-controles">
            <h3>Peliculas</h3>
            <div class="indicadores"></div>
        </div>

        <div class="contenedor-principal">
            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

            <div class="contenedor-carousel">
                <div class="carousel" id="series">
                    @if(count($limovie)  < 1 )
                        <p class="notices">No hay peliculas en favoritos</p>
                    @endif
                    @foreach($limovie as $listam)
                        <div>
                            <a class="pelicula" href="{{route('verpelicula.show', $listam->id)}}">
                                <img src="{{asset('storage/'.$listam->cover)}}">
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>

            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>



{{--    <div class="peliculas-recomendadas contenedor">--}}
{{--        <div class="contenedor-titulo-controles">--}}
{{--            <h3>Peliculas</h3>--}}
{{--            <div class="indicadores"></div>--}}
{{--        </div>--}}

{{--        <div class="contenedor-principal">--}}
{{--            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>--}}

{{--            <div class="contenedor-carousel">--}}
{{--                <div class="carousel" id="pelis">--}}
{{--                    @if(count($limovie)  < 1 )--}}
{{--                                            <p class="notices">No hay pelis en favoritos</p>--}}
{{--                                        @endif--}}
{{--                                            <div>--}}
{{--                                    @foreach($limovie as $listam)--}}
{{--                                                    <form id="deleted" action="{{route('listam.destroy', $listam->id)}}"method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('DELETE')--}}
{{--                                                        <button class="btn btn-danger" type="submit">Eliminar</button>--}}
{{--                                                    </form>--}}
{{--                            <a class="pelicula" href="{{route('verpelicula.show', $listam->id)}}">--}}

{{--                            <img src="{{asset('storage/'.$listam->cover)}}">--}}

{{--                            </a>--}}
{{--                                            </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="peliculas-recomendadas contenedor">--}}
{{--        <div class="contenedor-titulo-controles">--}}
{{--            <h3>Peliculas</h3>--}}
{{--            <div class="indicadores"></div>--}}
{{--        </div>--}}

{{--        <div class="contenedor-principal">--}}
{{--            <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>--}}

{{--            <div class="contenedor-carousel">--}}
{{--                <div class="carousel" id="pelis">--}}

{{--                    @if(count($limovie)  < 1 )--}}
{{--                        <p>No hay pelis en favoritos</p>--}}
{{--                    @endif--}}
{{--                        <div class="pelicula">--}}
{{--                @foreach($limovie as $listam)--}}

{{--        <a href="{{route('verpelicula.show', $listam->id)}}">--}}

{{--        <img src="{{asset('storage/'.$listam->cover)}}">--}}

{{--        </a>--}}
{{--                        </div>--}}




{{--  @endforeach--}}
{{--                        </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection