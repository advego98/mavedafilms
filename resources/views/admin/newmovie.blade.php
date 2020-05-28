@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form method="post" action="{{route('movies.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo">
                            <input type="text" class="serieinput" name="anyo" placeholder="Introduzca año">
                            <input type="file" class="serieinput" name="portada" placeholder="cover">

                            <textarea class="textareainput" name="description">

                            </textarea>
                            <input type="text" class="serieinput" name="actores" placeholder="actores">
                            <input type="text" class="serieinput" name="genero" placeholder="genero">
                            <input type="file" class="serieinput" name="url" placeholder="pelicula">
                            <select  class="serieinput" name="restriccion" placeholder="restriccion de edad">
                                <option value="3">3</option>
                                <option value="7">7</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                            <input type="text" class="serieinput" name="duracion" placeholder="duration">
                            <input type="submit" class="login-button" placeholder="Añadir Serie"></input>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection