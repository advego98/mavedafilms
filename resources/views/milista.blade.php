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
                            <form id="deleted" action="{{route('lista.destroy', $lista->id)}}"method="POST">
                                @csrf
                                @method('DELETE')
                                <label>
                                <svg height="30px" viewBox="0 0 512 512" width="60px" xmlns="http://www.w3.org/2000/svg"><
                                    <path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#f44336"/>
                                    <path d="m350.273438 320.105469c8.339843 8.34375 8.339843 21.824219 0 30.167969-4.160157 4.160156-9.621094 6.25-15.085938 6.25-5.460938 0-10.921875-2.089844-15.082031-6.25l-64.105469-64.109376-64.105469 64.109376c-4.160156 4.160156-9.621093 6.25-15.082031 6.25-5.464844 0-10.925781-2.089844-15.085938-6.25-8.339843-8.34375-8.339843-21.824219 0-30.167969l64.109376-64.105469-64.109376-64.105469c-8.339843-8.34375-8.339843-21.824219 0-30.167969 8.34375-8.339843 21.824219-8.339843 30.167969 0l64.105469 64.109376 64.105469-64.109376c8.34375-8.339843 21.824219-8.339843 30.167969 0 8.339843 8.34375 8.339843 21.824219 0 30.167969l-64.109376 64.105469zm0 0" fill="#fafafa"/></svg>
                                <button class="btn btn-danger deleted-button" type="submit">Eliminar</button>
                                </label>
                            </form>
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
                            <form id="deleted" action="{{route('listam.destroy', $listam->id)}}"method="POST">
                            @csrf

                            @method('DELETE')
                                <label>
                                    <svg height="30px" viewBox="0 0 512 512" width="60px" xmlns="http://www.w3.org/2000/svg"><
                                        <path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#f44336"/>
                                        <path d="m350.273438 320.105469c8.339843 8.34375 8.339843 21.824219 0 30.167969-4.160157 4.160156-9.621094 6.25-15.085938 6.25-5.460938 0-10.921875-2.089844-15.082031-6.25l-64.105469-64.109376-64.105469 64.109376c-4.160156 4.160156-9.621093 6.25-15.082031 6.25-5.464844 0-10.925781-2.089844-15.085938-6.25-8.339843-8.34375-8.339843-21.824219 0-30.167969l64.109376-64.105469-64.109376-64.105469c-8.339843-8.34375-8.339843-21.824219 0-30.167969 8.34375-8.339843 21.824219-8.339843 30.167969 0l64.105469 64.109376 64.105469-64.109376c8.34375-8.339843 21.824219-8.339843 30.167969 0 8.339843 8.34375 8.339843 21.824219 0 30.167969l-64.109376 64.105469zm0 0" fill="#fafafa"/></svg>
                                    <button class="btn btn-danger deleted-button" type="submit">Eliminar</button>
                                </label>
                        </form>
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