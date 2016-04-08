<div class="contEstandar bWhite rr5 p30">

    <div class="titSep3 mb10" style="padding-bottom:15px;">
        <div class="fR color333 t24"><img src="resources/img/icons/pbx.png" /> &nbsp;PBX (+57-2) 000 00 00</div>
        <strong class="t18">Personal administrativo (86)</strong>
    </div>
    
    <div class="mFuq">
    
        <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self">
                            <span class="ff2">Nombre dependendia</span>
                        </a>
                    </div>
                </div>
                <div id="onbs1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="p30">
                            
                            <div class="p10 mb10 row ff2">
                                <div class="col-sm-3 col-xs-3">Nombre</div>
                                <div class="col-sm-3 col-xs-3">Cargo</div>
                                <div class="col-sm-3 col-xs-3">Teléfonos</div>
                                <div class="col-sm-3 col-xs-3">Correo</div>
                            </div>
                            <div class="p10 mb10 row bS1"  style="margin-bottom:-1px;">
                                <div class="col-sm-3 col-xs-3">Gregorio Cañizales</div>
                                <div class="col-sm-3 col-xs-3">Coordinador de disciplina</div>
                                <div class="col-sm-3 col-xs-3">312 123 4535 - 432 43234 ext. 12</div>
                                <div class="col-sm-3 col-xs-3">gregorio@buenaeducacion.co</div>
                            </div>
                            <div class="p10 mb10 row bS1"  style="margin-bottom:-1px;">
                                <div class="col-sm-3 col-xs-3">Gregorio Cañizales</div>
                                <div class="col-sm-3 col-xs-3">Coordinador de disciplina</div>
                                <div class="col-sm-3 col-xs-3">312 123 4535 - 432 43234 ext. 12</div>
                                <div class="col-sm-3 col-xs-3">gregorio@buenaeducacion.co</div>
                            </div>
                            <div class="p10 mb10 row bS1"  style="margin-bottom:-1px;">
                                <div class="col-sm-3 col-xs-3">Gregorio Cañizales</div>
                                <div class="col-sm-3 col-xs-3">Coordinador de disciplina</div>
                                <div class="col-sm-3 col-xs-3">312 123 4535 - 432 43234 ext. 12</div>
                                <div class="col-sm-3 col-xs-3">gregorio@buenaeducacion.co</div>
                            </div>
                            <div class="p10 mb10 row bS1"  style="margin-bottom:-1px;">
                                <div class="col-sm-3 col-xs-3">Gregorio Cañizales</div>
                                <div class="col-sm-3 col-xs-3">Coordinador de disciplina</div>
                                <div class="col-sm-3 col-xs-3">312 123 4535 - 432 43234 ext. 12</div>
                                <div class="col-sm-3 col-xs-3">gregorio@buenaeducacion.co</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <?php for($yy=0; $yy<3; $yy++){ ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs<?= $yy+2; ?>" target="_self">
                            <span class="ff2">Nombre dependendia</span>
                        </a>
                    </div>
                </div>
                <div id="onbs<?= $yy+2; ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="p30">
                            
                            <div class="p10 mb10 row ff2">
                                <div class="col-sm-3 col-xs-3">Nombre</div>
                                <div class="col-sm-3 col-xs-3">Cargo</div>
                                <div class="col-sm-3 col-xs-3">Teléfonos</div>
                                <div class="col-sm-3 col-xs-3">Correo</div>
                            </div>
                            <div class="p10 mb10 row bS1"  style="margin-bottom:-1px;">
                                <div class="col-sm-3 col-xs-3">Gregorio Cañizales</div>
                                <div class="col-sm-3 col-xs-3">Coordinador de disciplina</div>
                                <div class="col-sm-3 col-xs-3">312 123 4535 - 432 43234 ext. 12</div>
                                <div class="col-sm-3 col-xs-3">gregorio@buenaeducacion.co</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>

    </div>

</div>



