@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <br>
        <a href="{{route('verserie.index')}}">
            <svg viewBox="0 0 448 512" height="30px" width="30px">
                <path fill="#FEC418" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z" class="">
                </path>
            </svg>
        </a>
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('verserie.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo">
                            <input type="text" class="serieinput" name="anyo" placeholder="Introduzca año">
                            <input type="file" class="serieinput" name="portada" placeholder="cover">
                            <textarea class="textareainput" name="description" placeholder="descripcion"></textarea>
                            <select  class="serieinput" name="restriccion" placeholder="restriccion de edad" size="6">
                                    <optgroup label="Restriccion de edad">
                                    <option value="3">3</option>
                                    <option value="7">7</option>
                                    <option value="12">12</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                </optgroup>
                            </select>
                            <input type="text" class="serieinput" name="duracion" placeholder="duracion">
                            <select class="serieinput" name="generos[]" multiple >
                                <optgroup label="Generos">
                                @foreach($generos as $genero)
                                    <option value="{{$genero->id}}">{{$genero->name_genre}}</option>
                                @endforeach
                                </optgroup>
                            </select>
                            <select class="serieinput" name="actores[]" multiple >
                                <optgroup label="Actores">
                                    @foreach($actores as $actor)
                                        <option value="{{$actor->id}}">{{$actor->actor}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            <input type="submit" value="Añadir serie" class="login-button">
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection


