<div class="bBlue2" style="height:80px; padding:0 10%;">
    <div class="tabAll">
        <div class="tabIn t24 colorfff ff0">
            Áreas, Materias y Asignaciones
        </div>
    </div>
</div>

<div style="padding:30px 10%;">

    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#zz1" target="_self">Áreas académicas</a></li>
        <li class="active"><a data-toggle="tab" href="#zz2" target="_self">Materias</a></li>
        <li><a data-toggle="tab" href="#zz3" target="_self">Asignaciones</a></li>
    </ul>
    
    <div class="tab-content">
        <div id="zz1" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/registro/registro_informacion/areas.php' "></div>
        </div>
        <div id="zz2" class="tab-pane fade in active">
            <div ng-include src=" 'view/plataforma/admin/registro/registro_informacion/materias.php' "></div>
        </div>
        <div id="zz3" class="tab-pane fade">
            <div ng-include src=" 'view/plataforma/admin/registro/registro_informacion/asignaciones.php' "></div>
        </div>
    </div>
    
    <br><br>
    <div class="taR lCreate4 lCreate5 lCreate6">
        <a href="#/plataforma/admin/panel" class="bBasic2 rr40 t16 ff2 colorfff bVerde taC cP">Guardar y Continuar</a>
    </div>

</div>

