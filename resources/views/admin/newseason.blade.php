@extends ('layouts.admin')
@section('content')


    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">
                        <form method="post" action="{{route('verseason.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="name" placeholder="Nombre temporada">
                            <input type="submit" class="login-button" value="Añadir temporada">
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection


