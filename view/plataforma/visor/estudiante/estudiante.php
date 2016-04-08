<br /><br />

<div>
	<div class="col-sm-6 col-xs-6 vcenter t24 ff2">
    	Institución Educativa Primitivo Crespo
    </div><!--
    --><div class="col-sm-6 col-xs-6 vcenter taR">
        <span class="t16">Riofrío, Valle del Cauca</span>
    </div>
    
    <br style="clear:both;" /><br />
    

    
    <div class="navGood ff5 taC mb10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="jQ1 taC t16 tU active ionZ2">
                <a href="#resumen" target="_self" aria-controls="home" role="tab" data-toggle="tab" style="border-left-width:1px !important;">
                    <img src="resources/img/icons/mE11.png" class="icjQ1 mb5" />
                    <br />Perfil
                </a>
            </li>
            <li role="presentation" class="jQ2 taC t16 tU ionZ2">
                <a href="#notas" target="_self" aria-controls="profile" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE2.png" class="icjQ2 mb5" />
                    <br />Notas
                </a>
            </li>
            <li role="presentation" class="jQ3 taC t16 tU ionZ2">
                <a href="#asistencia" target="_self" aria-controls="messages" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE3.png" class="icjQ3 mb5" />
                    <br />Asistencia
                </a>
            </li>
            <li role="presentation" class="jQ4 taC t16 tU ionZ2">
                <a href="#horarios" target="_self" aria-controls="settings" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE4.png" class="icjQ4 mb5" />
                    <br />Observaciones
                </a>
            </li>
            <li role="presentation" class="jQ4 taC t16 tU ionZ2">
                <a href="#horarios2" target="_self" aria-controls="settings2" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE4.png" class="icjQ5 mb5" />
                    <br />El Grupo
                </a>
            </li>

        </ul>
    </div>
        	
    <div class="tab-content">
        <div id="resumen" class="tab-pane fade in active">
        	<div ng-include src=" 'view/plataforma/visor/estudiante/perfil.php' "></div>
        </div>
        <div id="notas" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/estudiante/notas.php' "></div>
        </div>
        <div id="asistencia" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/estudiante/asistencia.php' "></div>
        </div>
        <div id="horarios" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/estudiante/observaciones.php' "></div>
        </div>
        <div id="horarios2" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/estudiante/grupo.php' "></div>
        </div>
    </div>
            
		

</div>