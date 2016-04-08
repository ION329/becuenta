<div class="contEstandar bWhite rr5 p10">

	<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">
        <div class="col-sm-1 col-xs-1 vcenter">
        	<a class="bBasic3 rr40 colorfff bVerde taC">Hoy</a>
        </div><!--
        --><div class="col-sm-3 col-xs-3 vcenter">
            <span class="t16 colorVirde ff2">Martes, Ene 13</span>
            <span class="t16 color666 ff0">2016</span>
        </div><!--
        --><div class="col-sm-7 col-xs-7 vcenter">
            <span class="t20 colorVirde ff2">Enero</span>
            <span class="t20 color666 ff0">2016</span>
        </div><!--
        --><div class="navBarLog taC col-sm-1 col-xs-1 vcenter taR">
        	<div class="btn-group" style="width:80px;">
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
            </div>
        </div>
    </div>

	<div class="row">
    
    	<div class="col-sm-4 col-xs-4">
        
            <div class="mFuq">
            
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#mat1" target="_self">
                                    <div class="ff2 mb5">
                                        <div class="dIB bOrange p10 rr50"></div> &nbsp;
                                        Matemáticas
                                    </div>
                                    <img src="resources/img/icons/tarde.png" style="margin:-13px 10px 0 3px" />
                                    <div class="dIB">
                                    	7:00 am - 8:30 am<br />
                                        <span class="t12">Nombre del profesor</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="mat1" class="panel-collapse collapse in">
                            <div class="panel-body">
                            	<div class="col-sm-2 col-xs-2 vcenter">
                                	<img src="resources/img/icons/actividad.png" />
                                </div><!--
                                --><div class="col-sm-10 col-xs-10 vcenter">
                                	Contenido<br />
                                    <strong>Nombre del Tema</strong>
                                </div>
                            </div>
                            <div class="panel-body">
                            	<div class="col-sm-2 col-xs-2 vcenter">
                                	<img src="resources/img/icons/evaluacion.png" />
                                </div><!--
                                --><div class="col-sm-10 col-xs-10 vcenter">
                                	Actividad calificable<br />
                                    <strong>Nombre de la actividad</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php for($yy=0; $yy<6; $yy++){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#mat<?= $yy+2; ?>" target="_self">
                                    <div class="ff2 mb5">
                                        <div class="dIB bOrange p10 rr50"></div> &nbsp;
                                        Matemáticas
                                    </div>
                                    <img src="resources/img/icons/tarde.png" style="margin:-13px 10px 0 3px" />
                                    <div class="dIB">
                                    	7:00 am - 8:30 am<br />
                                        <span class="t12">Nombre del profesor</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="mat<?= $yy+2; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="col-sm-2 col-xs-2 vcenter">
                                	<img src="resources/img/icons/actividad.png" />
                                </div><!--
                                --><div class="col-sm-10 col-xs-10 vcenter">
                                	Contenido<br />
                                    <strong>Nombre del Tema</strong>
                                </div>
                            </div>
                            <div class="panel-body">
                            	<div class="col-sm-2 col-xs-2 vcenter">
                                	<img src="resources/img/icons/evaluacion.png" />
                                </div><!--
                                --><div class="col-sm-10 col-xs-10 vcenter">
                                	Actividad calificable<br />
                                    <strong>Nombre de la actividad</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </div>
    
            </div>
        </div>
        
        <div class="col-sm-8 col-xs-8">
        
        	
        	<img src="resources/img/demo/calendario.jpg" style="width:100%" />
            
            <br />
            
            <div class="row p10" style="margin:0;">
                <div class="col-sm-3 col-xs-3 vcenter">
                    <div class="bVerde dIB rr50 pTipoe colorfff">P</div> &nbsp;
                    <span class="color666">Presente</span>
                </div><!--
                --><div class="col-sm-3 col-xs-3 vcenter">
                    <div class="bRed dIB rr50 pTipoe colorfff">A</div> &nbsp;
                    <span class="color666">Ausente</span>
                </div><!--
                --><div class="col-sm-3 col-xs-3 vcenter">
                    <div class="bOrange dIB rr50 pTipoe colorfff">T</div> &nbsp;
                    <span class="color666">Llegó tarde</span>
                </div><!--
                --><div class="col-sm-3 col-xs-3 vcenter">
                    <div class="taC dIB pTipoe p0"><img src="resources/img/icons/tarde.png" /></div> &nbsp;
                    <span class="color666">En clase</span>
                </div>
            </div>
            
            <div class="titSep2 colorVirde ff2 tU t16">Importante este mes</div>
            <div class="row p10">
                <div class="col-sm-2 col-xs-2 vcenter taC">
                    <img src="resources/img/icons/notif2.png" />
                </div><!--
                --><div class="col-sm-6 col-xs-6 vcenter">
                    <div class="ff2 mb3 t16">Taller de matemáticas</div>
                    <div class="color666 mb3">Subido por: Victor Mallarino</div>
                    <div class="t12 color999 color999">Febrero 18 / 2016</div>
                </div><!--
                --><div class="col-sm-4 col-xs-4 vcenter taR">
                    <a href="" class="bBasic2 rr40 colorfff bVerde2 taC">Descargar archivo</a>
                </div>
            </div>
            <div class="row p10">
                <div class="col-sm-2 col-xs-2 vcenter taC">
                    <img src="resources/img/icons/notif.png" />
                </div><!--
                --><div class="col-sm-6 col-xs-6 vcenter">
                    <div class="colorBlue mb3">Campamento Departamental reúne las mejores ideas jóvenes en empredimiento del Grado 11</div>
                </div><!--
                --><div class="col-sm-4 col-xs-4 vcenter taR">
                    <a href="" class="bBasic2 rr40 colorfff bVerde2 taC">Ver evento</a>
                </div>
            </div>
        
        
        
        </div>
    
    </div>


</div>