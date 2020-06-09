@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <a href="{{route('verpelicula.index')}}">
            <svg viewBox="0 0 448 512" height="30px" width="30px">
                <path fill="#FEC418" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z" class="">
                </path>
            </svg>
        </a>
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$movie->title}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form action="{{route('verpelicula.update',$movie->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo" value="{{$movie->title}}">
                            <input type="text" class="serieinput" name="anyo" placeholder="Introduzca año" value="{{$movie->year}}">
                            <input type="file" class="serieinput" name="portada" placeholder="portada">
                            <input type="text" class="textareainput" name="description" placeholder="descripcion" value="{{$movie->description}}">
                            <select name="restriccion" class="selectseries">
                                <option value="3">3</option>
                                <option value="7">7</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                            <input type="text" class="serieinput" name="duration" placeholder="Duracion" value="{{$movie-> duration}}">
                            <select class="serieinput" name="generos[]" multiple >
                                <optgroup label="Generos">
                                    @foreach($generos as $genero)
                                        <option value="{{$genero->id}}" @if(in_array($genero->id,$generosMovie)) selected @endif>{{$genero->name_genre}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            <select class="serieinput" name="actores[]" multiple >
                                <optgroup label="Generos">
                                    @foreach($actores as $actor)
                                        <option value="{{$actor->id}}" @if(in_array($actor->id,$actoresMovie)) selected @endif>{{$actor->actor}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            <input type="file" class="serieinput" name="url" placeholder="pelicula">
                            <button class="login-button">Editar</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection