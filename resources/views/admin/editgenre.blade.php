@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$genre->name_genre}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('vergenre.update',$genre->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" class="serieinput" name="name" placeholder="Nombre genero" value="{{$genre->name_genre}}">
                            <input type="submit" class="login-button" value="Editar">
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection


