<div class="bBlue2" style="height:80px; padding:0 10%;">
    <div class="tabAll">
        <div class="tabIn t24 colorfff ff0">
            Personal Administrativo
        </div>
    </div>
</div>

<div style="padding:30px 10%;">

	<div class="contEstandar p30 bWhite mb20 lCreate1">
    
    	
        <a class="bBasic7 rr40 color666 taC cP fR p1025" style="margin-top:-15px;"><img src="resources/img/icons/excel.png" /> &nbsp; Excel</a>
        <a class="bBasic6 rr40 bBlue colorfff taC cP bCreate1 fR p1025" style="margin-top:-15px; margin-right:10px;"><img src="resources/img/icons/user.png" /> &nbsp; Agregar persona</a>
        <div class="t16 ff2 tU mb20 color666">Personas registradas (3)</div>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="bBlue3 colorfff">
                        <th class="bBlue3">Nombre</th>
                        <th class="bBlue3">Apellidos</th>
                        <th class="bBlue3">Área</th>
                        <th class="bBlue3">Cargo</th>
                        <th class="bBlue3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>William</td>
                        <td>Aragones</td>
                        <td>Comunicaciones</td>
                        <td>Director de comunicaciones</td>
                        <td class="taC">
                        	<a class="bBasic6 rr10 colorfff bBlue2 taC cP" title="Editar Persona"><img src="resources/img/icons/editar.png"></a>
                            <a class="bBasic6 rr10 colorfff bGray4 taC cP" title="Eliminar Persona"><img src="resources/img/icons/x.png"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Felipe</td>
                        <td>Cortés Bocaranda</td>
                        <td>Administración</td>
                        <td>Coordinador de logística</td>
                        <td class="taC">
                        	<a class="bBasic6 rr10 colorfff bBlue2 taC cP" title="Editar Persona"><img src="resources/img/icons/editar.png"></a>
                            <a class="bBasic6 rr10 colorfff bGray4 taC cP" title="Eliminar Persona"><img src="resources/img/icons/x.png"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

	</div>




	<div class="dCreate1 dN">
        <div class="contEstandar p30 bWhite mb20">
            
            <div class="t16 ff2 tU mb20 color666">Datos personales</div>
        
            <div class="row">
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Nombres</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Apellidos</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Tipo de documento</label>
                    <select class="selSt rr5">
                        <option>Seleccione</option>
                        <option>CC</option>
                        <option>TI</option>
                        <option>NIT</option>
                    </select>
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Número del documento</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Correo electrónico</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Celular</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Teléfono fijo</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Dirección</label>
                    <input class="inpSt1 rr5" type="text" />
                </div>
                
                <div class="col-sm-3 col-xs-3 mb20 taR" style="padding-top:9px;">
                    <label class="ff1 color999">Fecha de nacimiento:</label>
                </div>
                <div class="col-sm-3 col-xs-3 mb20">
                    <select class="selSt rr5">
                        <option>Día</option>
                        <?php for($rr=0; $rr<31; $rr++){ ?>
                            <option value="<?= $rr + 1; ?>"><?= $rr + 1; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-3 col-xs-3 mb20">
                    <select class="selSt rr5">
                        <option>Mes</option>
                        <?php for($rr=0; $rr<12; $rr++){ ?>
                            <option value="<?= $rr + 1; ?>"><?= $rr + 1; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-3 col-xs-3 mb20">
                    <select class="selSt rr5">
                        <option>Año</option>
                        <?php for($rr=2016; $rr>1940; $rr--){ ?>
                            <option value="<?= $rr; ?>"><?= $rr; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Género</label>
                    <select class="selSt rr5">
                        <option>Seleccione</option>
                    </select>
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Estado civil</label>
                    <select class="selSt rr5">
                        <option>Seleccione</option>
                    </select>
                </div>
            </div>
            
    		<div class="row">
                <div class="col-sm-3 col-xs-3 vcenter"><img src="resources/img/icons/logoInstit.jpg" /></div><!--
                --><div class="col-sm-9 col-xs-9 vcenter">
                    <input class="inpSt2" type="file" placeholder="Nombre de la Sede" />
                    <div class="bGray3 color999 t12 p10">La foto debe ser en formato  JPEG, Gif o Png, y menor a 200 Kb.</div>
                </div>
            </div>
        </div>
        
        
        <div class="contEstandar p30 bWhite mb20">
        
            <div class="t16 ff2 tU mb20 color666">Datos de estudios</div>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bBlue3 colorfff">
                            <th class="bBlue3">Nivel</th>
                            <th class="bBlue3">Título</th>
                            <th class="bBlue3">Institución</th>
                            <th class="bBlue3">Fecha egreso</th>
                            <th class="bBlue3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Universitario</td>
                            <td>Lider de Emprendimiento</td>
                            <td>Banco del Emprendimiento</td>
                            <td>2003</td>
                            <td class="taC">
                                <a class="bBasic6 rr10 colorfff bBlue2 taC cP" title="Editar"><img src="resources/img/icons/editar.png"></a>
                                <a class="bBasic6 rr10 colorfff bGray4 taC cP" title="Eliminar"><img src="resources/img/icons/x.png"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <a class="bBasic7 rr40 colorAzul taC cP bAdd2">Agregar estudio</a>
            
            <br><br>
            
            <div class="dAdd2 dN">
            
                <div class="ff2 mb20 color666">Creando estudio</div>
            
                <div class="row">
                    <div class="col-sm-6 col-xs-6 mb20">
                        <label class="ff1 color999">Nivel</label>
                        <select class="selSt rr5">
                            <option>Seleccione</option>
                            <option>Profesional</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb20">
                        <label class="ff1 color999">Institución</label>
                        <input class="inpSt1 rr5" type="text" />
                    </div>
                    <div class="col-sm-6 col-xs-6 mb20">
                        <label class="ff1 color999">Duración</label>
                        <input class="inpSt1 rr5" type="text" />
                    </div>
                    <div class="col-sm-6 col-xs-6 mb20">
                        <label class="ff1 color999">Tipo de duración</label>
                        <select class="selSt rr5">
                            <option>Seleccione</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-xs-2 taR" style="padding-top:9px;">
                        <label class="ff1 color999">Mes egreso:</label>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <select class="selSt rr5">
                            <option>Seleccione</option>
                        </select>
                    </div>
                    <div class="col-sm-2 col-xs-2 taR" style="padding-top:9px;">
                        <label class="ff1 color999">Año egreso:</label>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <select class="selSt rr5">
                            <option>Seleccione</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="taC">
                    <a class="bBasic7 rr40 bBlue colorfff taC cP bSave2">Confirmar</a>
                    <a class="bBasic7 rr40 color666 taC cP bSave2">Cancelar</a>
                </div>
            
            </div>
        
        </div>
        
        
        <div class="contEstandar p30 bWhite mb20">
            
            <div class="t16 ff2 tU mb20 color666">Datos de contacto institucional</div>
        
            <div class="row">
                
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Área</label>
                    <select class="selSt rr5">
                        <option>Seleccione</option>
                    </select>
                </div>
                <div class="col-sm-6 col-xs-6 mb20">
                    <label class="ff1 color999">Cargo</label>
                    <select class="selSt rr5">
                        <option>Seleccione</option>
                    </select>
                </div>
                
                <div class="col-sm-12 col-xs-12">
                    <label class="ff1 color999">Añade números de teléfono fijo o Celular donde se puedan contactar</label>
                </div>
                <div class="col-sm-6 col-xs-6 mb10">
                    <div class="input-group">
                        <div class="input-group-addon">+57</div>
                        <input type="text" class="form-control" id="" placeholder="Número telefónico">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 mb10">
                    <input class="inpSt1 rr5" type="text" placeholder="Extensión" />
                </div>
    
                <div class="dCambiar1 dN">
                    <div class="col-sm-6 col-xs-6 mb10">
                        <div class="input-group">
                            <div class="input-group-addon">+57</div>
                            <input type="text" class="form-control" id="" placeholder="Número telefónico">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb10">
                        <input class="inpSt1 rr5" type="text" placeholder="Extensión" />
                    </div>
                </div>
                
                <a class="colorAzul dB aSS ff1 bCambiar cP mb30" style="margin-left:20px;">Agregar otro teléfono</a>
    
            </div>
    
        </div>
        <br><br>
    
        <div class="taR">
			<a class="bBasic2 rr40 t16 ff2 color999 bGray taC cP bCreated1">Guardar</a>
            <a class="bBasic2 rr40 t16 ff2 color999 bGray taC cP bCreated1">Cancelar</a>
		</div>

	</div>
    
    <br><br>
    <div class="taR lCreate1">
        <a class="bBasic2 rr40 t16 ff2 colorfff bVerde taC bMsiguiente2 cP">Siguiente</a>
    </div>

</div>

