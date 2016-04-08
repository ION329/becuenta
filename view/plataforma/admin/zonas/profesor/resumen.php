<div class="contEstandar bWhite rr5 p0">
    
    <div class="col-sm-8 col-xs-8 pInt">
    
    	<div class="row">
            <div class="col-sm-4 col-xs-4 taC">
                <img src="resources/img/demo/user4.png">
            </div>
            <div class="col-sm-8 col-xs-8 colorVirde">
                <div class="t20 ff2 mb5">Maria Fernanda Perlaza</div>
                <div class="t18 mb5 color999">Licenciada de Matemáticas, egresada de la Universidad del Valle</div>
                
                <br><br>
                <a href="" class="bBasic4 dB rr40 t16 ff2 colorVirde mb10">
                    Enviar mensaje
                    <img src="resources/img/icons/mailer.png" class="iconBrrn" />
                </a>
                <a href="" class="bBasic5 dB rr40 t16 ff2 colorVirde">
                    Actualizar datos
                    <img src="resources/img/icons/panel2.png" class="iconBrrn" height="35" />
                </a>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="col-sm-6 col-xs-6 colorVirde mb20">
                <div class="mb5 color666">Docente</div>
                <div class="t16 ff2">Matemáticas</div>
            </div>
            <div class="col-sm-6 col-xs-6 colorVirde mb20">
                <div class="mb5 color666">Jornada</div>
                <div class="t16 ff2">Diurna - Nocturna</div>
            </div>
            <div class="col-sm-6 col-xs-6 colorVirde mb20">
                <div class="mb5 color666">Asignaturas</div>
                <div class="t16 ff2">Algebra - Cá lculo</div>
            </div>
            <div class="col-sm-6 col-xs-6 colorVirde mb20">
                <div class="mb5 color666">Años en la Institución</div>
                <div class="t16 ff2">6 años</div>
            </div>
        </div>
        
        
        <div class="titSep colorVirde ff2 tU t16">Premios y credenciales</div>
        
        <div class="row bGray p10 mb3">
            <div class="col-sm-1 col-xs-1 colorVirde vcenter">
                <img src="resources/img/icons/graduado.png" />
            </div><!--
            --><div class="col-sm-9 col-xs-9 colorVirde vcenter">
                <div class="">Dic 1995- Grado de licenciatura en la Universidad del Valle, Cali Colombia</div>
            </div>
        </div>
        <div class="row bGray p10 mb3">
            <div class="col-sm-1 col-xs-1 colorVirde vcenter">
                <img src="resources/img/icons/premio.png" />
            </div><!--
            --><div class="col-sm-9 col-xs-9 colorVirde vcenter">
                <div class="">Dic 1995- Maestro del año en la institución educativa</div>
            </div>
        </div>
        
        
        <br><br>
        
    </div>
    <div class="col-sm-4 col-xs-4 bBlueL rr5 pInt colorVirde">
    	<select class="selecStd rr5 ff2 t18 colorVirde">
        	<option>Cálculo 11º A</option>
            <option>Cálculo 11º B</option>
            <option>Cálculo 11º C</option>
            <option>Álgebra 8º A</option>
            <option>Álgebra 8º B</option>
        </select>
        
        <div class="titSep2 colorVirde ff2 tU t14">Nota promedio</div>
        <div class="row">
            <div class="col-sm-6 col-xs-6 colorVirde vcenter">
                <div class="colorOrange t60 ff2">3.8</div>
            </div><!--
            --><div class="col-sm-6 col-xs-6 vcenter">
                <div class="t16 ff2 colorfff taC bVirde p20"><img src="resources/img/icons/up.png"> &nbsp;40%</div>
            </div>
        </div>
        
        <div class="titSep2 colorVirde ff2 tU t14">        
        	<div class="row">
                <div class="col-sm-3 col-xs-3">(1)P</div>
                <div class="col-sm-3 col-xs-3">(2)P</div>
                <div class="col-sm-3 col-xs-3">(3)P</div>
                <div class="col-sm-3 col-xs-3">EF</div>
            </div> 
        </div>
        <div class="row ff2 t16">
            <div class="col-sm-3 col-xs-3 vcenter"><span class="colorOrange">3.6</span></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><span class="colorVerde">4.2</span></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><img src="resources/img/icons/block.png"></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><img src="resources/img/icons/block.png"></div>
        </div>
        
        <div class="titSep2 colorVirde ff2 tU t14">Rendimiento por Logros</div>
        <div class="navBarLog ff5 taC mb10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="taC active">
                    <a href="#p1" target="_self" aria-controls="p1" role="tab" data-toggle="tab">
                        (1)P
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#p2" target="_self" aria-controls="p2" role="tab" data-toggle="tab">
                        (2)P
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#p3" target="_self" aria-controls="p3" role="tab" data-toggle="tab">
                        (3)P
                    </a>
                </li>
    
            </ul>
        </div>
        
        <div class="tab-content">
            <div id="p1" class="tab-pane fade in active">
            	<br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
            <div id="p2" class="tab-pane fade">
                <br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
            <div id="p3" class="tab-pane fade">
                <br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
        </div>
       
       <br /><br />
        
        <a href="" class="bBasic5 dB rr40 t16 ff2 colorfff bVerde taC">Todas las asignaturas</a>
        
        
    </div>
    <br style="clear:both;" />

 
    
</div>
