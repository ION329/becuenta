<div class="ccc_estudiante">
	<div class="col-sm-2 col-xs-2 vcenter">
    	<a href="#/plataforma/admin/inicio" class="bBasic3 rr20"><img src="resources/img/icons/arR.png" width="8"> &nbsp; Volver</a>
    </div><!--
    --><div class="col-sm-5 col-xs-5 vcenter t24">
    	Carlos Mauricio Urrego Bejarano
    </div><!--
    --><div class="col-sm-5 col-xs-5 vcenter taR">
        <span class="t24">Grado 8º - 2</span> &nbsp;&nbsp;
        <span class="bAzul2 p5 rr20 dIB colorfff">Mañana</span>
    </div>
    
    <br style="clear:both;" /><br />
    

    
    <div class="navGood ff5 taC mb10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="jQ1 taC t16 tU active">
                <a href="#resumen" target="_self" aria-controls="home" role="tab" data-toggle="tab" style="border-left-width:1px !important;">
                    <img src="resources/img/icons/mE11.png" class="icjQ1 mb5" />
                    <br />Resumen
                </a>
            </li>
            <li role="presentation" class="jQ2 taC t16 tU">
                <a href="#notas" target="_self" aria-controls="profile" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE2.png" class="icjQ2 mb5" />
                    <br />Notas
                </a>
            </li>
            <li role="presentation" class="jQ3 taC t16 tU">
                <a href="#asistencia" target="_self" aria-controls="messages" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE3.png" class="icjQ3 mb5" />
                    <br />Asistencia
                </a>
            </li>
            <li role="presentation" class="jQ4 taC t16 tU">
                <a href="#horarios" target="_self" aria-controls="settings" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE4.png" class="icjQ4 mb5" />
                    <br />Horarios
                </a>
            </li>
            <li role="presentation" class="jQ5 taC t16 tU">
                <a href="#mensajes" target="_self" aria-controls="messages" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE5.png" class="icjQ5 mb5" />
                    <br />Mensajes
                </a>
            </li>
            <li role="presentation" class="jQ6 taC t16 tU">
                <a href="#observaciones" target="_self" aria-controls="settings" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE6.png" class="icjQ6 mb5" />
                    <br />Observaciones
                </a>
            </li>
        </ul>
    </div>
        	
    <div class="tab-content">
        <div id="resumen" class="tab-pane fade in active">
        	<div ng-include src=" 'view/plataforma/admin/zonas/estudiante/resumen.php' "></div>
        </div>
        <div id="notas" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/zonas/estudiante/notas.php' "></div>
        </div>
        <div id="asistencia" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/zonas/estudiante/asistencia.php' "></div>
        </div>
        <div id="horarios" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/zonas/estudiante/horarios.php' "></div>
        </div>
        <div id="mensajes" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/zonas/estudiante/mensajes.php' "></div>
        </div>
        <div id="observaciones" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/zonas/estudiante/observaciones.php' "></div>
        </div>
    </div>
            
		

</div>