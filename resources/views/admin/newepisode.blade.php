@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('verepisode.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="name" placeholder="Introduzca titulo">
                            <input type="file" class="serieinput" name="portada" placeholder="portada">
                            <input type="file" class="serieinput" name="url" placeholder="pelicula">
                            <input type="submit" class="login-button" placeholder="Añadir Serie"></input>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection