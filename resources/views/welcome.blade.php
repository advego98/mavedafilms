
<div id="backgroundwelcome">
    @extends ('layouts.app')
    @section('content')


        <div class="emptyspace"></div>

            <div class="login-body">
                <h1 class="title">Inicio Sesión</h1>


                <form method="POST" action="{{ route('login') }}" class="login" name="login-form">
                    @csrf
                    <input id="email" type="email" class="forminput" name="login-name" placeholder="Correo Electronico" required>
                    <input id="password" type="password" class="forminput" name="password-name" placeholder="Contraseña" required>

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
