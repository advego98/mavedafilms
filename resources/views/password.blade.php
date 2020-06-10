<div id="pagepasswd">
    @extends ('layouts.app')
    @section('content')



        <div class="spacepaswd"></div>

    <div class="password-body">

        <h1 class="titlepassword">¿Como restablecer
            la contraseña?</h1>

        <form method="post" action name="login-form" class="passwordform">

            <div class="passwordsection">
                <input type="checkbox" class="mailhelp" name="resetpasswordmail" placeholder="Correo">
                <label class="option">Correo</label>
                <p class="textinfo">Se te enviará un correo con las instrucciones para restablecer
                    la contraseña</p>
                <input type="email" id="inputpass" name="login-name" placeholder="nombre@ejemplo.com">
            </div>
        </form>

    </div>


        <div class="spacecontra"></div>
    <div id="footerspace"></div>


</div>



@endsection

{
