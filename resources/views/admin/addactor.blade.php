@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form method="post" action="{{route('veractor.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="serieinput" name="actor" placeholder="Introducir nombre">
                            <button class="login-button">Añadir actor</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection
