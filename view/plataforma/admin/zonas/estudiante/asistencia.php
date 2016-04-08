<div class="contEstandar bWhite rr5 p10">

    <div class="titSep2 colorVirde ff2 tU t14" style="margin-top:0;">
        <div class="col-sm-1 col-xs-1 vcenter">
            <div class="btn-group" style="width:80px;">
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
            </div>
        </div><!--
        --><div class="col-sm-5 col-xs-5 vcenter">
            <span class="t24 colorVirde ff2">Enero</span>
            <span class="t24 color666 ff0">2016</span>
        </div><!--
        --><div class="navBarLog taC col-sm6 col-xs-6 vcenter taR">
        	<a href="" class="bBasic2 rr40 taC">Editar</a>
            <a href="" class="bBasic2 rr40 taC">Descargar</a>
            <a href="" class="bBasic2 rr40 colorfff bVerde2 taC">Nueva asistencia</a>
        </div>
    </div>
    
    
    <div class="row" style="margin:0;">
        <div class="col-sm-3 col-xs-3 p0">
            
            <div class="tab">
                <div class="tabIn bloqAsis p10">
                    Materias
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bOrange p5 rr50"></div> &nbsp; Matemáticas
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bVerde p5 rr50"></div> &nbsp; Estadística
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bRed p5 rr50"></div> &nbsp; Lengua castellana
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bVerde p5 rr50"></div> &nbsp; La paz y el post-conflicto
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bOrange p5 rr50"></div> &nbsp; Ciencias sociales
                </div>
            </div>
            <div class="tab bGray">
                <div class="tabIn bloqAsis p10">
                    <div class="dIB bRed p5 rr50"></div> &nbsp; Lectura y compensión
                </div>
            </div>
        
        </div>
        <div class="col-sm-9 col-xs-9 p0 ff2 colorfff">
        	<div class="bloqAsisConte">
            	<div class="tab" style="width:1550px;"> <!-- widht: númerodíasdelmes * 40 -->
					<?php for($tt=0; $tt<31; $tt++){ ?>                    
                        <div class="tabIn bloqAsis taC">
                        	<div style="width:40px; margin:0 auto;">
                                <span class="colorVirde">Mie</span>
                                <div class="colorfff bVirde dIB rr10" style="padding:2px 2px;">&nbsp; <?= $tt+1; ?> &nbsp;</div>
                            </div>
                        </div>                        
                    <?php } ?>
                </div>
                <?php for($t1t=0; $t1t<6; $t1t++){ ?>  
                    <div class="tab bGray" style="width:1550px;"> <!-- widht: númerodíasdelmes * 40 -->
                        <?php for($tt=0; $tt<31; $tt++){ ?>                    
                            <div class="tabIn bloqAsis taC">
                            	<?php if($t1t % 2){ ?>
                                	<?php if($tt % 2){ ?>  
                                    	<div class="bVerde dIB rr50 pTipoe">P</div>
                                    <?php }else{ ?>
                                    	<div class="bRed dIB rr50 pTipoe">A</div>
                                    <?php } ?>  
                            	<?php }else{ ?>
                                	<?php if($tt % 2){ ?>  
                                    	<div class="bOrange dIB rr50 pTipoe">T</div>
                                    <?php }else{ ?>
                                    	<div class="taC dIB pTipoe p0"><img src="resources/img/icons/tarde.png" /></div>
                                    <?php } ?> 
                                <?php } ?>
                            </div>                        
                        <?php } ?>
                    </div>
                <?php } ?>  
                <br />
            </div>
        </div>
    </div>
        
	<br />
    <div class="row bOrangeL p10" style="margin:0;">
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





	
    <div class="titSep2 colorVirde ff2 tU t14">
        <div class="navBarLog ff5 taC col-sm-12 col-xs-12 vcenter">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation">                    
                    <a target="_self" aria-controls="p1" role="tab" data-toggle="tab" style="background-color:transparent; border:0;">
                        RESUMEN DE AUSENCIAS
                    </a>
                </li>
                <li role="presentation" class="taC active">
                    <a href="#asis1" target="_self" aria-controls="p1" role="tab" data-toggle="tab">
                        Ver todas
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#asis2" target="_self" aria-controls="p2" role="tab" data-toggle="tab">
                        Justificadas
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#asis3" target="_self" aria-controls="p3" role="tab" data-toggle="tab">
						Sin justificar
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#asis4" target="_self" aria-controls="p3" role="tab" data-toggle="tab">
						Llegadas tarde
                    </a>
                </li>
            </ul>
        </div>
    </div>
        
        
    <div class="tab-content">
        <div id="asis1" class="tab-pane fade in active">
        
            <div class="row p10 mb5" style="margin:0;">
                <div class="col-sm-2 col-xs-2 vcenter">Fecha</div><!--
                --><div class="col-sm-2 col-xs-2 vcenter">Asencia</div><!--
                --><div class="col-sm-5 col-xs-5 vcenter">Descripción</div><!--
                --><div class="col-sm-3 col-xs-3 vcenter">Recurso/aplicación</div>
            </div>
            
            <div class="row p10 mb5 bGray" style="margin:0;">
                <div class="col-sm-2 col-xs-2 colorVirde vcenter">Enero 11 2016</div><!--
                --><div class="col-sm-2 col-xs-2 colorVirde vcenter">Justificada</div><!--
                --><div class="col-sm-5 col-xs-5 colorVirde vcenter ff2">Incapacidad Médica enviada por el acudiente</div><!--
                --><div class="col-sm-3 col-xs-3 colorVirde taR vcenter"><a href="" class="bBasic2 rr40 taC dB">Archivo adjunto</a></div>
            </div>
            <div class="row p10 mb5 bGray" style="margin:0;">
                <div class="col-sm-2 col-xs-2 colorVirde vcenter">Noviembre 29 2015</div><!--
                --><div class="col-sm-2 col-xs-2 colorVirde vcenter">Justificada</div><!--
                --><div class="col-sm-5 col-xs-5 colorVirde vcenter ff2">Carta enviada y firmada por el acudiente</div><!--
                --><div class="col-sm-3 col-xs-3 colorVirde taR vcenter"><a href="" class="bBasic2 rr40 taC dB">Archivo adjunto</a></div>
            </div>
            
            
        </div>
        <div id="asis2" class="tab-pane fade taC">
            <br><img src="resources/img/icons/block.png" /><br /><br />
        </div>
        <div id="asis3" class="tab-pane fade taC">
            <br><img src="resources/img/icons/block.png" /><br /><br />
        </div>
    </div>


 
    
</div>