@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
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
                            <input type="file" class="serieinput" name="portada" placeholder="cover">
                            <input type="text" class="textareainput" name="description" placeholder="description" value="{{$movie->description}}">
                            <select name="restriccion" class="selectseries">
                                <option value="3">3</option>
                                <option value="7">7</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                            <input type="text" class="serieinput" name="duration" placeholder="Duration" value="{{$movie-> duration}}">
                            <input type="file" class="serieinput" name="url" placeholder="pelicula">
                            <button class="login-button">Editar</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection