@extends ('layouts.app')
@section('content')

    <div class="stepicons"><img src="{{asset('backgrounds/stepplan2.png')}}"></div>

    <div class="emptyspace"></div>
        <div class="planFormContainer" data-uia="form-plan-selection">
            <div>
                <div class="stepHeader-container" data-uia="header">
                </div>

            </div>
            <div class="planGrid planGrid--has3Plans" data-uia="plan-grid">
                <div class="planGrid__header">
                    <div class="tarifas"></div>
                    <div class="planGrid__selector planGrid__planSelector" role="radiogroup" aria-label="Plan" aria-describedby="planGrid_planChoice_description" data-uia="plan-grid-plan-selector"><span class="planGrid__selectorDescription" id="planGrid_planChoice_description" data-uia="plan-grid-plan-selector+description" aria-hidden="true">Selecciona el plan que quieres tener</span><label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_0" data-uia="plan-grid-plan-selector+label-text_1_stream_name"><input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_0" data-uia="plan-grid-plan-selector+input-text_1_stream_name" value="314001031"><span class="planGrid__selectorLabel planGrid__planLabel">Básica</span></label><label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_1" data-uia="plan-grid-plan-selector+label-text_2_stream_name"><input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_1" data-uia="plan-grid-plan-selector+input-text_2_stream_name" value="10322"><span class="planGrid__selectorLabel planGrid__planLabel">Estándar</span></label><label class="planGrid__selectorChoice planGrid__planChoice" for="planGrid_planChoice_2" data-uia="plan-grid-plan-selector+label-text_4_stream_name"><input type="radio" name="planChoice" class="planGrid__selectorInput planGrid__planInput" id="planGrid_planChoice_2" data-uia="plan-grid-plan-selector+input-text_4_stream_name" value="10341" checked=""><span class="planGrid__selectorLabel planGrid__planLabel">Premium</span></label></div>
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
                </table><small class="planGrid__legal"><span id="" data-uia="plan-grid-legal">La disponibilidad de contenido en HD y en Ultra HD depende de la capacidad de tu servicio de internet y del dispositivo. No todo el contenido está disponible en HD o en Ultra HD. Consulta los Términos de uso para obtener más información.</span></small>
            </div>
        </div>
        <div class="buttonchoseplan">

            <input type="submit" class="continue" value="continuar" a href="paymentmethod.html">

        </div>


@endsection




