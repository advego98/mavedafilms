@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">Panel de administración</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form method="post">
                            <select class="selectseries" placeholder="Selecciona una serie"  name="series" style="min-width: 187px;">
                            </select>
                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo">
                            <input type="text" class="serieinput" name="año" placeholder="Introduzca año">
                            <input type="file" class="serieinput" name="password-name" placeholder="cover">
                            <input type="text" class="textareainput" name="description" placeholder="description">
                            <input type="text" class="serieinput" name="actores" placeholder="actores">
                            <input type="text" class="serieinput" name="categorias" placeholder="categorias">
                            <button class="login-button">Editar</button>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection