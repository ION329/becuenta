<div class="ccc_buscar">

    <div class="contEspecial bWhite rr5 p30">
        
        <div class="logoInstitucion rr50"><img src="resources/img/demo/logo-colegio-in.png"></div>
    
        <br><br><br><br><br>
    
        <div class="row">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-6">
            
                <input class="inpSearh rr10 ff2" placeholder="Ingrese un parámetro de búsqueda" />
                <button class="inpButSearh temp_search"><img src="resources/img/icons/lupe.png"></button>
                
                <br style="clear:both;" />
                <br><br><br>
                <br><br><br>
                
                <div class="row">
                
                <!--
                
                    <a class="col-sm-3 col-xs-3 cP dB">
                        <div class="tabAll btnAbSear taC rr10">
                            <div class="tabIn p20 colorfff ff2 tU">
                                <img src="resources/img/icons/opt1.png" /><br>
                                Registrar Pago
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-3 col-xs-3 cP dB">
                        <div class="tabAll btnAbSear taC rr10">
                            <div class="tabIn p20 colorfff ff2 tU">
                                <img src="resources/img/icons/opt2.png" /><br>
                                LLamado de atención
                            </div>
                        </div>
                    </a>
                    -->
                    <a href="#/plataforma/admin/certificados" class="col-sm-6 col-xs-3 cP dB">
                        <div class="tabAll btnAbSear taC rr10">
                            <div class="tabIn p20 colorfff ff2 tU">
                                <img src="resources/img/icons/opt3.png" /><br>
                                Certificados de estudio
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-6 col-xs-3 cP dB">
                        <div class="tabAll btnAbSear taC rr10">
                            <div class="tabIn p20 colorfff ff2 tU">
                                <img src="resources/img/icons/opt4.png" /><br>
                                Crear notificación
                            </div>
                        </div>
                    </a>
                </div>
                
                <br><br><br>
                <br><br><br>
                
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
    
    </div>

</div>



<div class="ccc_busqueda dN">

	<a href="#/plataforma/admin/inicio" class="bBasic3 rr20 mb10 cP temp_search"><img src="resources/img/icons/arR.png" width="8"> &nbsp; Volver</a>

    <div class="contEstandar bWhite rr5 p30">
           
		<div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Código</th>
                    <th>Asignado a</th>
                    <th>Jornada</th>
                  </tr>
                </thead>
                <tbody>
                <?php for($ii=0; $ii<5; $ii++){ ?>
                  <tr>
                    <td class="taC"><img src="resources/img/demo/not1.png" class="rr50" width="48"></td>
                    <td><a href="#/plataforma/admin/estudiante" class="aSS">Felipe Cortés Bejarano</a></td>
                    <td>Estudiante</td>
                    <td>646 486 6844</td>
                    <td>6° | 6-3</td>
                    <td>Tarde</td>
                  </tr>
                  <tr>
                  	<td class="taC"><img src="resources/img/demo/user2.png" class="rr50" width="48"></td>
                    <td><a href="#/plataforma/admin/profesor" class="aSS">Daniel Zea Ramírez</a></td>
                    <td>Profesor</td>
                    <td>0011 220511 51525</td>
                    <td>Matemáticas</td>
                    <td>Tarde</td>
                  </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>

</div>