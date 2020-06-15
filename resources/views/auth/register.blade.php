@extends ('layouts.app')
@section('content')

<script>
    $(document).ready(function () {

        $("#boton1").click(function(){

            nombre = $("#name").val();
            apellido = $("#subname").val();
            correo = $("#email").val();
            passwd = $("#password").val();
            passwd_r =$ ("#password-confirm").val();

            if (nombre=="" || nombre==null) {

                if (!$('#name').hasClass("empty")){
                    $('#name').addClass('empty');
                    $('#name').removeClass('groupinput');
                }

            } else {
                if ($('#name').hasClass("empty")){
                    $('#name').removeClass('empty');
                    $('#name').addClass('groupinput');
                }
            }

            if (apellido=="" || apellido==null) {

                if (!$('#subname').hasClass("empty")){
                    $('#subname').addClass('empty');
                    $('#subname').removeClass('groupinput');
                }
            }else {
                if ($('#subname').hasClass("empty")){
                    $('#subname').removeClass('empty');
                    $('#subname').addClass('groupinput');
                }
            }

            if (correo=="" || correo==null) {

                if (!$('#email').hasClass("empty_forminputregister")){

                    $('#email').addClass('empty_forminputregister');
                    $('#email').removeClass('forminputregister');
                }
            } else {
                if ($('#email').hasClass("empty_forminputregister")){
                    $('#email').removeClass('empty_forminputregister');
                    $('#email').addClass('forminputregister');
                }
            }

            if (passwd=="" || passwd==null) {

                if (!$('#password').hasClass("empty_forminputregister")) {

                    $('#password').addClass('empty_forminputregister');
                    $('#password').removeClass('forminputregister');
                }
            } else {
                if ($('#password').hasClass("empty_forminputregister")){
                    $('#password').removeClass('empty_forminputregister');
                    $('#password').addClass('forminputregister');
                }
            }

            if (passwd_r=="" || passwd_r==null || passwd_r!=passwd) {

                if (!$('#password-confirm').hasClass("empty_forminputregister")) {

                    $('#password-confirm').addClass('empty_forminputregister');
                    $('#password-confirm').removeClass('forminputregister');
                }

            } else {
                if ($('#password-confirm').hasClass("empty_forminputregister")){
                    $('#password-confirm').removeClass('empty_forminputregister');
                    $('#password-confirm').addClass('forminputregister');
                }
            }

            if ($('#password-confirm').hasClass("forminputregister")&&$('#password').hasClass("forminputregister")&&$('#email').hasClass("forminputregister")&&$('#subname').hasClass("groupinput")&&$('#name').hasClass("groupinput")) {
                $('#form1').toggle();
                $('#form2').toggle();

                cambiarimagen();



                $('#content').removeClass('form-register');
                $('#content').addClass('planFormContainer');
                $('#empty1').toggle();
            }

        });
        $("#boton2").click(function(){

            $('#form2').toggle();
            $('#form3').toggle();

            cambiarimagen();


            $('#content').removeClass('planFormContainer');
            $('#content').addClass('form-register');
            $('#empty1').toggle();
        });

    })
    function cambiarimagen() {
        link = $('#imagen').attr('src');
        console.log(link);
        num=link.substr(-5,1);
        console.log(num);


        switch (num) {
            case "1":
                code=link.replace(num+".svg",2+".svg");
                console.log(code);
                break;
            case "2":
                code=link.replace(num+".svg",3+".svg");
                console.log(code);
                break;
            case "3":
                code=link.replace(num+".svg",1+".svg");
                console.log(code);
                break;
        }
        $('#imagen').attr('src',code);

    }
</script>



    <div class="emptyregisterspace" id="empty1"></div>


    <div class="form-register" id="content">

        <div class="stepicons"><img id="imagen" src="{{asset('backgrounds/stepplan1.svg')}}"></div>
        <form method="POST" name="register-form" action="{{ route('register') }}">

            @csrf
            @method('POST')

            <div class="registersection" id="form1">
                <label class="title-registro">Datos de registro</label>
                <div class="inputgroup">
                    <input required type="text" class="groupinput" name="name"  placeholder="Nombre"  id="name">
                    <input required type="text" class="groupinput" name="subname" placeholder="Apellidos"  id="subname">
                </div>
                <br><br>
                <input required id="email" type="email" class="forminputregister" name="email"  placeholder="Correo">
                <input required id="password" type="password" class="forminputregister" name="password" placeholder="Contraseña">
                <input required id="password-confirm" type="password" class="forminputregister" name="password_confirmation"  placeholder="Repetir contraseña">


                <input type="button" class="register-button" id="boton1"value="Continuar">

            </div>
            <div class="planFormContainer" data-uia="form-plan-selection" id="form2" style="display:none;">
                <div class="emptyspacetable" id="empty2"></div>
                <div>
                    <div class="stepHeader-container" data-uia="header">
                    </div>

                </div>
                <div class="planGrid planGrid--has3Plans" data-uia="plan-grid">
                    <div class="planGrid__header">
                        <div class="tarifas"></div>
                        <div class="planGrid__selector planGrid__planSelector" role="radiogroup" aria-label="Plan" aria-describedby="planGrid_planChoice_description" data-uia="plan-grid-plan-selector">
                            <span class="planGrid__selectorDescription" id="planGrid_planChoice_description" data-uia="plan-grid-plan-selector+description" aria-hidden="true">S
                                elecciona el plan que quieres tener
                            </span>
                            <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_0" data-uia="plan-grid-plan-selector+label-text_1_stream_name">
                                <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_0" data-uia="plan-grid-plan-selector+input-text_1_stream_name" value="1">
                                <span class="planGrid__selectorLabel planGrid__planLabel">
                                    Básica
                                </span>
                            </label>
                            <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_1" data-uia="plan-grid-plan-selector+label-text_2_stream_name">
                                <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_1" data-uia="plan-grid-plan-selector+input-text_2_stream_name" value="2">
                                <span class="planGrid__selectorLabel planGrid__planLabel">
                                    Estándar
                                </span>
                            </label>
                            <label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_2" data-uia="plan-grid-plan-selector+label-text_4_stream_name">
                                <input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_2" data-uia="plan-grid-plan-selector+input-text_4_stream_name" value="3" checked="">
                                <span class="planGrid__selectorLabel planGrid__planLabel">
                                    Premium
                                </span>
                            </label>
                        </div>
                    </div>
                    <table class="planGrid__featureTable">
                        <caption class="planGrid__featureTableCaption">Características del plan de Netflix</caption>
                        <tbody class="planGrid__featureTableBody" data-uia="plan-grid-feature-table-body">
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+planPrice-feature">Precio mensual</td>
                            <td class="planGrid__cell planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planPrice-text_1_stream_name" aria-label="Básico">7&nbsp;€</td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planPrice-text_2_stream_name" aria-label="Estándar">11&nbsp;€</td>
                            <td class="planGrid__cell planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planPrice-text_4_stream_name" aria-label="Premium">15&nbsp;€</td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell">Disponible en HD</td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasHd-text_1_stream_name" aria-label="Básico"><span class="planGrid__booleanLabel">No</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x planGrid__booleanGraphic" focusable="true">
                                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__booleanCell" aria-label="Estándar"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasHd-text_4_stream_name" aria-label="Premium"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasUltraHd-feature">Disponible en Ultra HD</td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasUltraHd-text_1_stream_name" aria-label="Básico"><span class="planGrid__booleanLabel">No</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x planGrid__booleanGraphic" focusable="true">
                                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasUltraHd-text_2_stream_name" aria-label="Estándar"><span class="planGrid__booleanLabel">No</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x planGrid__booleanGraphic" focusable="true">
                                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+planHasUltraHd-text_4_stream_name" aria-label="Premium"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+planMaxScreenCount-feature">Nº de pantallas que se pueden ver al mismo tiempo</td>
                            <td class="planGrid__cell planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planMaxScreenCount-text_1_stream_name" aria-label="Básico">1</td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planMaxScreenCount-text_2_stream_name" aria-label="Estándar">2</td>
                            <td class="planGrid__cell planGrid__stringCell" role="cell" data-uia="plan-grid-feature-table-cell+planMaxScreenCount-text_4_stream_name" aria-label="Premium">4</td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+4-feature">Multidispositivo: portátil, TV, teléfono y tableta</td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+4-text_1_stream_name" aria-label="Básico"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+4-text_2_stream_name" aria-label="Estándar"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+4-text_4_stream_name" aria-label="Premium"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+5-feature">Todas las películas y series que desees</td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+5-text_1_stream_name" aria-label="Básico"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+5-text_2_stream_name" aria-label="Estándar"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+5-text_4_stream_name" aria-label="Premium"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                        </tr>
                        <tr role="row" class="planGrid__featureTableRow">
                            <td class="planGrid__cell planGrid__featureCell" role="cell" data-uia="plan-grid-feature-table-cell+6-feature">Cancela cuando quieras</td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+6-text_1_stream_name" aria-label="Básico"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__cell--isSelected planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+6-text_2_stream_name" aria-label="Estándar"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                            <td class="planGrid__cell planGrid__booleanCell" role="cell" data-uia="plan-grid-feature-table-cell+6-text_4_stream_name" aria-label="Premium"><span class="planGrid__booleanLabel">Sí</span><span class="planGrid__booleanIcon" aria-hidden="true"><svg id="thin-check" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-check planGrid__booleanGraphic" focusable="true">
                                        <path d="M9.19 22.892L.5 14.198l1.232-1.233 7.236 7.24L23.793.516l1.38 1.04L9.19 22.892"></path>
                                    </svg></span></td>
                        </tr>
                        </tbody>
                    </table><small class="planGrid__legal"><span id="" data-uia="plan-grid-legal">La disponibilidad de contenido en HD y en Ultra HD depende de la capacidad de tu servicio de internet y del dispositivo.</span></small>
                </div>
                <div class="buttonchoseplan">

                    <input type="button" class="continue" value="continuar" id="boton2">

                </div>
            </div>
            <div id="form3" style="display:none;">


                <h1 class="title">Configura tu tarjeta de crédito o débito</h1>

                <div class="metodos">
                    <svg class="tarjeta" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="40px" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path style="fill:#FFFFFF;" d="M512,402.281c0,16.716-13.55,30.267-30.265,30.267H30.265C13.55,432.549,0,418.997,0,402.281V109.717
	c0-16.716,13.55-30.266,30.265-30.266h451.47c16.716,0,30.265,13.551,30.265,30.266V402.281L512,402.281z" />
                        <path style="fill:#F79F1A;" d="M113.64,258.035l-12.022-57.671c-2.055-7.953-8.035-10.319-15.507-10.632H30.993l-0.491,2.635
	C73.431,202.774,101.836,227.88,113.64,258.035z" />
                        <g>
                            <polygon style="fill:#059BBF;" points="241.354,190.892 205.741,190.892 183.499,321.419 219.053,321.419 	" />
                            <path style="fill:#059BBF;" d="M135.345,321.288l56.01-130.307h-37.691l-34.843,89.028l-3.719-13.442
		c-6.83-16.171-26.35-39.446-49.266-54.098l31.85,108.863L135.345,321.288z" />
                            <path style="fill:#059BBF;" d="M342.931,278.75c0.132-14.819-9.383-26.122-29.887-35.458c-12.461-6.03-20.056-10.051-19.965-16.17
		c0-5.406,6.432-11.213,20.368-11.213c11.661-0.179,20.057,2.367,26.624,5.003l3.218,1.475l4.826-28.277
		c-7.059-2.637-18.094-5.451-31.895-5.451c-35.157,0-59.904,17.691-60.128,43.064c-0.224,18.763,17.692,29.216,31.181,35.469
		c13.847,6.374,18.493,10.453,18.404,16.171c-0.089,8.743-11.035,12.73-21.264,12.73c-14.25,0-21.8-1.965-33.509-6.843l-4.55-2.09
		l-4.998,29.249c8.303,3.629,23.668,6.801,39.618,6.933C318.361,323.342,342.663,305.876,342.931,278.75z" />
                            <path style="fill:#059BBF;" d="M385.233,301.855c4.065,0,40.382,0.045,45.566,0.045c1.072,4.545,4.333,19.565,4.333,19.565h33.011
		L439.33,191.027h-27.472c-8.533,0-14.874,2.323-18.628,10.809l-52.845,119.629h37.392
		C377.774,321.465,383.848,305.386,385.233,301.855z M409.622,238.645c-0.176,0.357,2.95-7.549,4.737-12.463l2.411,11.256
		c0,0,6.792,31.182,8.22,37.704h-29.528C398.411,267.638,409.622,238.645,409.622,238.645z" />
                            <path style="fill:#059BBF;" d="M481.735,79.451H30.265C13.55,79.451,0,93.001,0,109.717v31.412h512v-31.412
		C512,93.001,498.451,79.451,481.735,79.451z" />
                        </g>
                        <path style="fill:#F79F1A;" d="M481.735,432.549H30.265C13.55,432.549,0,418.998,0,402.283v-31.412h512v31.412
	C512,418.998,498.451,432.549,481.735,432.549z" />
                        <path style="opacity:0.15;fill:#202121;enable-background:new    ;" d="M21.517,402.281V109.717
	c0-16.716,13.551-30.266,30.267-30.266h-21.52C13.55,79.451,0,93.001,0,109.717v292.565c0,16.716,13.55,30.267,30.265,30.267h21.52
	C35.069,432.549,21.517,418.997,21.517,402.281z" />
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                </svg>

                    <svg class="tarjeta" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 -77 512.00003 512" width="40px">
                        <g id="surface1">
                            <path d="M 512 45.59375 L 512 313.273438 C 512 338.410156 491.542969 358.867188 466.40625 358.867188 L 45.59375 358.867188 C 20.457031 358.867188 0 338.410156 0 313.273438 L 0 45.59375 C 0 20.457031 20.457031 0 45.59375 0 L 466.40625 0 C 491.542969 0 512 20.457031 512 45.59375 Z M 512 45.59375 " style=" stroke:none;fill-rule:nonzero;fill:rgb(74.509804%,92.156863%,98.039216%);fill-opacity:1;" />
                            <path d="M 512 45.59375 L 512 313.273438 C 512 338.410156 491.542969 358.867188 466.40625 358.867188 L 256 358.867188 L 256 0 L 466.40625 0 C 491.542969 0 512 20.457031 512 45.59375 Z M 512 45.59375 " style=" stroke:none;fill-rule:nonzero;fill:rgb(61.960784%,88.627451%,97.254902%);fill-opacity:1;" />
                            <path d="M 316.800781 62.929688 C 252.5625 62.929688 200.296875 115.195312 200.296875 179.433594 C 200.296875 243.675781 252.5625 295.9375 316.800781 295.9375 C 381.042969 295.9375 433.304688 243.675781 433.304688 179.433594 C 433.304688 115.195312 381.042969 62.929688 316.800781 62.929688 Z M 316.800781 62.929688 " style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,89.411765%,46.666667%);fill-opacity:1;" />
                            <path d="M 195.199219 62.929688 C 130.957031 62.929688 78.695312 115.195312 78.695312 179.433594 C 78.695312 243.675781 130.957031 295.9375 195.199219 295.9375 C 259.4375 295.9375 311.703125 243.675781 311.703125 179.433594 C 311.703125 115.195312 259.4375 62.929688 195.199219 62.929688 Z M 195.199219 62.929688 " style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,39.215686%,14.901961%);fill-opacity:1;" />
                            <path d="M 311.703125 179.433594 C 311.703125 221.410156 289.394531 258.269531 256 278.777344 C 222.605469 258.269531 200.296875 221.410156 200.296875 179.433594 C 200.296875 137.457031 222.605469 100.597656 256 80.09375 C 289.394531 100.597656 311.703125 137.457031 311.703125 179.433594 Z M 311.703125 179.433594 " style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,58.039216%,41.568627%);fill-opacity:1;" />
                        </g>
                    </svg>



                    <p class="security">Servidor seguro

                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="20px" color="#FEC418" xml:space="preserve">
                        <g>
                            <g>
                                <path color="#FEC418" d="M400,188h-36.037v-82.23c0-58.322-48.449-105.77-108-105.77c-59.551,0-108,47.448-108,105.77V188H112
			c-33.084,0-60,26.916-60,60v204c0,33.084,26.916,60,60,60h288c33.084,0,60-26.916,60-60V248C460,214.916,433.084,188,400,188z
			 M187.963,105.77c0-36.266,30.505-65.77,68-65.77s68,29.504,68,65.77V188h-136V105.77z M420,452c0,11.028-8.972,20-20,20H112
			c-11.028,0-20-8.972-20-20V248c0-11.028,8.972-20,20-20h288c11.028,0,20,8.972,20,20V452z" />
                            </g>
                        </g>
                            <g>
                                <g>
                                    <path color="#FEC418" d="M256,286c-20.435,0-37,16.565-37,37c0,13.048,6.76,24.51,16.963,31.098V398c0,11.045,8.954,20,20,20
			c11.045,0,20-8.955,20-20v-43.855C286.207,347.565,293,336.08,293,323C293,302.565,276.435,286,256,286z" />
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                    </svg>


                    </p>


                    <input type="text" class="forminputpay" name="credit_name" placeholder="Nombre de la tarjeta" required>
                    <input type="text" class="forminputpay" name="surnames" placeholder="Apellidos" required>
                    <input type="text" class="forminputpay" name="credit_number" placeholder="Numero de la tarjeta" pattern="^(^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$)$" required>
                    <input type="text" class="forminputpay" name="date_venciment" placeholder="Fecha de vencimiento(MM/AA)" pattern="([0-9]{2}[/]?){2}" required>
                    <input type="password" class="forminputpay" name="security_code" placeholder="Codigo de seguridad" maxlength="3" pattern="/[0-9]{3}+/" required>
{{--                    <input type="password" class="forminputpay" name="tarifa" placeholder="tarifa">--}}
                    <p class="infolegal">Al hacer clic en el botón "Iniciar suscripción de pago" de más abajo, estás
                        aceptando nuestros Términos de uso, admites que ya has cumplido los 18 y
                        reconoces nuestra Declaración de privacidad.</p>
                    <input type="submit" class="pay-button" value="Iniciar suscripcion de pago" required>


                </div>
            </div>
        </form>
    </div>
    <div class="emptyspace2"></div>
@endsection
