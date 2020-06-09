@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('verpelicula.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo">
                            <input type="text" class="serieinput" name="anyo" placeholder="Introduzca año">
                            <input type="file" class="serieinput" name="portada" placeholder="portada">
                            <textarea class="textareainput" name="description" placeholder="descripcion"></textarea>
                            <input type="file" class="serieinput" name="url" placeholder="pelicula">
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
                            <input type="submit" class="login-button" value="Añadir pelicula"></input>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection