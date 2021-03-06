@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <a href="{{route('verepisode.show',$id)}}">
            <svg viewBox="0 0 448 512" height="30px" width="30px">
                <path fill="#FEC418" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z" class="">
                </path>
            </svg>
        </a>
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$episode->title}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form action="{{route('verepisode.update',$episode->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo" value="{{$episode->title}}">
                            <input type="file" class="serieinput" name="portada" placeholder="Portada">
                            <input type="text" class="serieinput" name="url" placeholder="Link capitulo" value="{{$episode->url}}">
                            <button class="login-button">Editar</button>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection