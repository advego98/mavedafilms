<div id="pagepasswd">
    @extends ('layouts.app')
    @section('content')


        <div class="emptyspace"></div>
        <div class="spacepaswd"></div>

        <div class="password-body">

            <h1 class="titlepassword">Restablecer contraseña</h1>

            <form method="POST" action="{{ route('password.update') }}">


                <div class="passwordsection">


                @csrf

                <input type="hidden" name="token" value="{{ $token }}">


                        <input id="email" type="email" class="forminputregister @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">

                        @error('email')

                        <div class="alert_error" role="alert">
                                        <strong>El correo no coincide con el de ningun usuario</strong>
                                    </div>
                        @enderror

                        <input id="password" type="password" class="forminputregister @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                        @error('password')
                        <div class="alert_error" role="alert">
                                        <strong>La confirmación de contraseña no coincide.</strong>
                                    </div>
                        @enderror


                        <input id="password-confirm" type="password" class="forminputregister" name="password_confirmation" required autocomplete="new-password" placeholder="Repite contraseña">



                        <button type="submit" class="login-button">
                            {{ __('Reset Password') }}
                        </button>
                </div>
            </form>
        </div>
        <div id="footerspace"></div>
</div>
@endsection