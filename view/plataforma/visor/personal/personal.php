<div class="ccc_estudiante">
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
            <li role="presentation" class="jQ1 taC t16 tU active ionZ">
                <a href="#resumen" target="_self" aria-controls="home" role="tab" data-toggle="tab" style="border-left-width:1px !important;">
                    <img src="resources/img/icons/mE11.png" class="icjQ1 mb5" />
                    <br />Perfil
                </a>
            </li>
            <li role="presentation" class="jQ2 taC t16 tU ionZ">
                <a href="#notas" target="_self" aria-controls="profile" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE2.png" class="icjQ2 mb5" />
                    <br />Promedios
                </a>
            </li>
            <li role="presentation" class="jQ3 taC t16 tU ionZ">
                <a href="#asistencia" target="_self" aria-controls="messages" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE3.png" class="icjQ3 mb5" />
                    <br />Plan de estudio
                </a>
            </li>
            <li role="presentation" class="jQ4 taC t16 tU ionZ">
                <a href="#horarios" target="_self" aria-controls="settings" role="tab" data-toggle="tab">
                    <img src="resources/img/icons/mE4.png" class="icjQ4 mb5" />
                    <br />Horario
                </a>
            </li>

        </ul>
    </div>
        	
    <div class="tab-content">
        <div id="resumen" class="tab-pane fade in active">
        	<div ng-include src=" 'view/plataforma/visor/personal/a1.php' "></div>
        </div>
        <div id="notas" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/personal/a2.php' "></div>
        </div>
        <div id="asistencia" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/personal/a3.php' "></div>
        </div>
        <div id="horarios" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/visor/personal/a4.php' "></div>
        </div>
    </div>
            
		

</div>