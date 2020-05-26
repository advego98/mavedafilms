
<div id="backgroundwelcome">
    @extends ('layouts.login')
    @section('content')




        <div class="emptyspace"></div>

            <div class="login-body">
                <h1 class="title">Iniciar Sesión</h1>

                <form method="post" name="login-form" class="login">
                    <input type="text" class="forminput" name="login-name" placeholder="Correo Electronico">
                    <input type="text" class="forminput" name="password-name" placeholder="Contraseña">

                    <div class="helpsection">

                        <input type="checkbox" name="checkbox">
                        <label>Recuerdame</label>

                        <label class="ayuda"></label><a href="{{route('changepassword')}}">Olvide mi contraseña</a>
                    </div>

                    <button class="login-button">Iniciar sesión</button>

                    <div class="registerform">¿No tienes cuenta?<a class="suscription" href="{{route('register')}}">Suscríbete ahora</a></div>

                </form>

                <div id="emptyspace2"></div>
            </div>


</div>



    @endsection
