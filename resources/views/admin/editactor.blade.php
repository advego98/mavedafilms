@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$actor->actor}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('veractor.update',$actor->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" class="serieinput" name="actor" placeholder="Nombre actor" value="{{$actor->actor}}">
                            <input type="submit" class="login-button" placeholder="Añadir Temporada">
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection


