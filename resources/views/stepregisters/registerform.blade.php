 @extends ('layouts.app')
    @section('content')



        <div class="emptyspace"></div>


        <div class="form-register">

            <div class="stepicons"><svg width="399" height="85" viewBox="0 0 399 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="41" cy="43" r="25.5" stroke="#FCC517" stroke-width="5"/>
                    <circle cx="201" cy="43" r="25.5" stroke="#FEC61A" stroke-width="5"/>
                    <circle cx="361" cy="43" r="25.5" stroke="#FEC61A" stroke-width="5"/>
                    <rect x="80" y="41" width="82" height="4" fill="#FEC61A"/>
                    <rect x="241" y="41" width="82" height="4" fill="#FEC61A"/>
                    <path d="M42.8223 51H40V40.1211L36.6309 41.166V38.8711L42.5195 36.7617H42.8223V51Z" fill="white"/>
                    <path d="M206.784 52H196.063V49.873L201.123 44.4805C201.818 43.7214 202.33 43.0589 202.659 42.4932C202.996 41.9274 203.164 41.3903 203.164 40.8818C203.164 40.1872 202.989 39.6429 202.638 39.249C202.287 38.848 201.785 38.6475 201.134 38.6475C200.432 38.6475 199.877 38.891 199.469 39.3779C199.068 39.8577 198.867 40.4915 198.867 41.2793H195.752C195.752 40.3268 195.978 39.4567 196.429 38.6689C196.887 37.8812 197.532 37.2653 198.362 36.8213C199.193 36.3701 200.135 36.1445 201.188 36.1445C202.799 36.1445 204.049 36.5312 204.937 37.3047C205.832 38.0781 206.279 39.1702 206.279 40.5811C206.279 41.3545 206.079 42.1423 205.678 42.9443C205.277 43.7464 204.589 44.681 203.615 45.748L200.06 49.4971H206.784V52Z" fill="#FEC61A"/>
                    <path d="M359.222 42.8047H360.876C361.664 42.8047 362.247 42.6077 362.627 42.2139C363.007 41.82 363.196 41.2972 363.196 40.6455C363.196 40.0153 363.007 39.5247 362.627 39.1738C362.255 38.8229 361.739 38.6475 361.08 38.6475C360.486 38.6475 359.988 38.8122 359.587 39.1416C359.186 39.4639 358.985 39.8864 358.985 40.4092H355.881C355.881 39.5928 356.099 38.8623 356.536 38.2178C356.98 37.5661 357.596 37.0576 358.384 36.6924C359.179 36.3271 360.052 36.1445 361.005 36.1445C362.659 36.1445 363.955 36.542 364.894 37.3369C365.832 38.1247 366.301 39.2132 366.301 40.6025C366.301 41.3187 366.082 41.9775 365.646 42.5791C365.209 43.1807 364.636 43.6426 363.927 43.9648C364.808 44.2799 365.463 44.7526 365.893 45.3828C366.329 46.013 366.548 46.7578 366.548 47.6172C366.548 49.0065 366.039 50.1201 365.022 50.958C364.013 51.7959 362.674 52.2148 361.005 52.2148C359.444 52.2148 358.165 51.8031 357.17 50.9795C356.182 50.1559 355.688 49.0674 355.688 47.7139H358.792C358.792 48.3011 359.01 48.7809 359.447 49.1533C359.891 49.5257 360.436 49.7119 361.08 49.7119C361.818 49.7119 362.394 49.5186 362.81 49.1318C363.232 48.738 363.443 48.2188 363.443 47.5742C363.443 46.013 362.584 45.2324 360.865 45.2324H359.222V42.8047Z" fill="#FEC61A"/>
                </svg>
            </div>

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

