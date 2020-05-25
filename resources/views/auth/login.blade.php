
<div id="backgroundwelcome">
    @extends ('layouts.app')
    @section('content')




        <div class="emptyspace"></div>

        <div class="login-body">
            <h1 class="title">Inicio Sesión</h1>

            <form method="post" name="login-form" class="login" action="{{ route('login') }}">
                @csrf
                <input type="email" class="forminput" name="email" placeholder="Correo Electronico">
                <input type="password" class="forminput" name="password" placeholder="Contraseña">

                <div class="helpsection">

                    <input type="checkbox" name="checkbox">
                    <label>Recuerdame</label>

                    <label class="ayuda"></label><a href="{{route('changepassword')}}">Olvide mi contraseña</a>
                </div>

                <button type="submit" class="login-button">Iniciar sesión</button>

                <div class="registerform">¿No tienes cuenta?<a class="suscription" href="{{route('register')}}">Suscríbete ahora</a></div>

            </form>

            <div id="emptyspace2"></div>
        </div>


</div>



@endsection
