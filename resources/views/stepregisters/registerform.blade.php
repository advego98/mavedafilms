 @extends ('layouts.app')
    @section('content')



        <div class="emptyspace"></div>


        <div class="form-register">

            <div class="stepicons"><img src="{{asset('backgrounds/stepplan1.png')}}"></div>

            <form method="post" name="register-form" class="login">

                <div class="registersection">
                    <label class="title-registro">Datos de registro</label>
                    <div class="inputgroup">
                        <input type="text" class="groupinput" name="name" placeholder="Nombre">
                        <input type="text" class="groupinput" name="subname" placeholder="Apellidos">
                    </div>
                    <br><br>
                    <input type="email" class="forminputregister" name="mail" placeholder="Correo">
                    <input type="password" class="forminputregister" name="password" placeholder="Contraseña">
                    <input type="password" class="forminputregister" name="password" placeholder="Repetir contraseña">
                    <input type="submit" class="register-button" placeholder="continuar" href="{{route('planchoose')}}">>
                </div>
            </form>


        </div>

        <div class="emptyspace2"></div>





@endsection

