<div class="contEstandar bWhite rr5 p30 mb20 dAbre1">
    <div class="titSep3 colorVirde ff2 tU t14">
        <div class="col-sm-1 col-xs-1 vcenter">
            <div class="btn-group" style="width:80px;">
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10"></button>
              <button type="button" class="btn btn-primary bGray" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10"></button>
            </div>
        </div><!--
        --><div class="col-sm-5 col-xs-5 vcenter">
            <span class="t24 colorVirde ff2">Enero</span>
            <span class="t24 color666 ff0">2016</span>
        </div><!--
        --><div class="navBarLog taC col-sm6 col-xs-6 vcenter taR">
        </div>
    </div>
    
    
    <div class="table-responsive bWhite">      
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Evento</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php for($rr=0; $rr<4; $rr++){ ?>
          <tr>
            <td>24 Oct/16</td>
            <td>8:00 am a 4:00 pm</td>
            <td><a class="aSS cP bAbrir1">Actividad de regreso a clases</a></td>
            <td><img src="resources/img/icons/arL.png" /></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    
    
</div>



<div class="contEstandar bWhite rr5 mb20 p30 dAbre1 dN">
    
    <div class="titSep3 colorVirde ff2 tU t14">
        <div class="col-sm-1 col-xs-1 vcenter">
            <div class="btn-group">
              <button class="btn btn-primary bGray bAbrir1" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10"></button>
            </div>
        </div><!--
        --><div class="col-sm-11 col-xs-11 vcenter">
            <span class="t24 colorVirde ff2">Título del evento institucional</span>
        </div>
    </div>

	<div class="dateEven2 p10">
        <div class="t60 colorfff taC">29</div>
        <div class="t20 colorfff taC">Feb/16</div>
    </div>
	<img src="resources/img/demo/evento.jpg" />
    
    <br /><br /><br />
    
    <div class="row">
    
    	<div class="col-sm-1 col-xs-1"></div>
        <div class="col-sm-3 col-xs-3 color999">
        	<strong>Admin</strong><br />
            Fecha: 15 de Sep / 16
            <br /><br />
            <strong>Importante</strong><br />
            Solo se permite la compra de máximo 10 boletas por estudiante.
            
        </div>
        <div class="col-sm-7 col-xs-7">
        	
            <strong>Lugar:</strong> Instalaciones de la institución.<br />
            <strong>Hora:</strong> de 9:30 am a 4:30 pm<br />
            <strong>Valor boleta:</strong> $4.000.<br /><br />
            
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            <br /><br />
            Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
        	<br /><br />
            
        </div>
        <div class="col-sm-1 col-xs-1"></div>
    
    </div>
    
    
</div>




<div class="contEstandar rr5 p20 bAzul5">
    <div class="titSep3  ff2 tU colorfff">Eventos destacados</div>
    <div class="row">
    	<?php for($rr=0; $rr<4; $rr++){ ?>
        <div class="col-sm-3 col-xs-3">
        	
            <a href="">
                <img src="resources/img/demo/eve<?= $rr+1; ?>.jpg" />
                <div class="dateEven p5">
                	<div class="t40 colorfff taC">29</div>
                    <div class="colorfff taC">Feb/16</div>
                </div>
                <div class="bWhite color999 p10" style="min-height:70px;">Campamento Departamental en empredimiento del Grado 11</div>
            </a>
            
        </div>
    	<?php } ?>
    </div>
</div>

