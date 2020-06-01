
@extends ('layouts.admin')
@section('content')

<div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                        <section class="collapsable-section-content account-section-content">
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="width:256px;" href="{{route('verserie.index')}}">Administrar series</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="width:256px;" href="{{route('verpelicula.index')}}">Administrar Peliculas</a><br/>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="width:256px;" href="{{route('vergenre.index')}}">Administrar Genero</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="width:256px;" href="/admin/addActor">Administrar actor</a>
                        </section>
                </div>
            </div>
        </div>
</div>

@endsection

