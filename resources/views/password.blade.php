<div id="pagepasswd">
    @extends ('layouts.app')
    @section('content')



    <div class="password-body">

        <h1 class="title">¿Como restablecer
            la contraseña?</h1>

        <form method="post" name="login-form" class="passwordform">

            <div class="passwordsection">
                <input type="checkbox" class="mailhelp" name="resetpasswordmail" placeholder="Correo">
                <label class="option">Correo</label>
                <p class="textinfo">Se te enviará un correo con las instrucciones para restablecer
                    la contraseña</p>
                <input type="email" id="inputpass" name="login-name" placeholder="nombre@ejemplo.com">
                <br><br>
                <input type="checkbox" class="mailhelp" name="resetpasswordmail" placeholder="Correo">
                <label class="option">Mensaje de texto SMS</label>
                <p class="textinfo">Se te enviará un SMS con el código de verificación para resta-
                    blecer la contraseña. Podrían aplicarse las tarifas por mensaje
                    de texto.</p>
                <input type="number" id="inputpass" name="login-name" placeholder="+XX XXXXXXX">
                <button class="login-button">Enviar</button>
                <p class="mailandnumber">No recuerdo ni mi correo ni mi teléfono</p>
            </div>
        </form>

    </div>
        <div class="spacecontra"></div>
    <div id="footerspace"></div>


</div>



@endsection

{
