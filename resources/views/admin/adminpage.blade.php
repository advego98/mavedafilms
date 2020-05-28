
@extends ('layouts.admin')
@section('content')

<div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                        <section class="collapsable-section-content account-section-content">
                            <h2 class="title-header">Series</h2>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('newserie')}}">Añadir serie</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('editserie')}}">Editar serie</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('deleteserie')}}">Eliminar serie</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('addgenre')}}">Añadir Genero</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('deletegenre')}}">Eliminar Genero</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/newSeason">Añadir Temporada</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/editChapter">Añadir Capítulo</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/editChapter">Editar capítulo</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/editChapter">Eliminar Capítulo</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/addActor">Añadir actor</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/deleteActor">Eliminar actor</a>
                            <h2 class="title-header">Peliculas</h2>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('newmovie')}}" >Añadir Pelicula</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('editmovie')}}"> Editar Pelicula</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="{{route('deletemovie')}}">Eliminar pelicula</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/newCategory">Añadir categoría</a>
                            <a class="btn hero-cta-btn btn-large btn-yellow" role="link" style="min-width:256px;" href="/admin/deleteCategory">Eliminar categoría</a>




                        </section>
                </div>
            </div>
        </div>
</div>

@endsection

