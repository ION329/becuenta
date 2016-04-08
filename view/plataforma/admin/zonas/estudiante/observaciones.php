<div class="contEstandar bWhite rr5 p10">

	<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">
        <div class="col-sm-9 col-xs-9 vcenter">
            <span class="t16 colorVirde ff2">RESUMEN OBSERVACIONES</span>
        </div><!--
        --><div class="taC col-sm-3 col-xs-3 vcenter taR">
        </div>
    </div>

	
        
            <div class="mFuq2">
            
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self">
                                    <span class="ff1">Enero 18 / 2016</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="ff2">Suspensión por mal comportamiento</span>
                                </a>
                            </div>
                        </div>
                        <div id="onbs1" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p50">
                                	Creado por: Nombre del coordinador de disciplina
                                    <br /><br /><br />
                                    <strong>Suspensión por mal comportamiento</strong><br /><br />
                                    
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
									<br /><br />
                                    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                    <br /><br />
                                    Coordinador de disciplina<br />
                                    (+57) 345 6789
           						</div>
                            </div>
                        </div>
                    </div>
                    
                    <?php for($yy=0; $yy<3; $yy++){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs<?= $yy+2; ?>" target="_self">
                                    <span class="ff1">Enero 18 / 2016</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="ff2">Suspensión por mal comportamiento</span>
                                </a>
                            </div>
                        </div>
                        <div id="onbs<?= $yy+2; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p50">
                                	Creado por: Nombre del coordinador de disciplina
                                    <br /><br /><br />
                                    <strong>Suspensión por mal comportamiento</strong><br /><br />
                                    
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
									<br /><br />
                                    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                    <br /><br />
                                    Coordinador de disciplina<br />
                                    (+57) 345 6789
           						</div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    

        		</div>
    </div>

</div>