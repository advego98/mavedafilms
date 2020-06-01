@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$episode->title}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form action="{{route('verepisode.update',$episode->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo" value="{{$episode->title}}">
                            <input type="file" class="serieinput" name="portada" placeholder="cover">
                            <input type="file" class="serieinput" name="url" placeholder="cover">
                            <button class="login-button">Editar</button>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection