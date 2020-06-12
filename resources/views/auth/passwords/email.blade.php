<div id="pagepasswd">
    @extends ('layouts.app')
    @section('content')


        <div class="emptyspace"></div>
        <div class="spacepaswd"></div>

        <div class="password-body">

            <h1 class="titlepassword">¿Como restablecer la contraseña?</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                        <div class="passwordsection">
                            <label class="option">Correo</label>
                            <p class="textinfo">Se te enviará un correo con las instrucciones para restablecer la contraseña</p>
                            <input id="email" type="email" class="forminput @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button class="login-button">Enviar</button>
                        </div>
                    </form>
        </div>
        <div id="footerspace"></div>


</div>



@endsection
