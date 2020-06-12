<div id="pagepasswd">
    @extends ('layouts.app')
    @section('content')


        <div class="spacepaswd"></div>

        <div class="password-body">

            <h1 class="titlepassword">¿Como restablecer la contraseña?</h1>

            <form method="POST" action="{{route('password.update')}}" class="passwordform">
                @csrf
                <div class="passwordsection">
                    <label class="option">Correo</label>
                    <p class="textinfo">Se te enviará un correo con las instrucciones para restablecer la contraseña</p>
                    <input type="email" id="inputpass" name="reset-mail" placeholder="nombre@ejemplo.com">
                    <button class="login-button">Enviar</button>
                </div>
            </form>
        </div>
        <div class="spacecontra"></div>
        <div id="footerspace"></div>


</div>



@endsection
