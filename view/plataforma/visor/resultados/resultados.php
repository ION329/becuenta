<div ng-include src=" 'view/plataforma/general/zona/menuVisor-buscar.php' "></div>
<div class="pAA50"></div>



<div style="max-width:1200px; margin:0 auto;">

	<div class="mb20 colorVerde2">
    	<a href="javascript:history.back()" class="bBasic3 rr20 mb10 cP temp_search fR"><img src="resources/img/icons/arR.png" width="8"> &nbsp; Volver</a>
    	<span class="ff2 t24">Resultados de búsqueda</span>
    </div>

    <div class="">



        <div class="contEstandar bWhite rr5 p30">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Municipio</th>
                        <th>Institución</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <!--<th></th>-->
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($ii=0; $ii<5; $ii++){ ?>

                          <tr>
                            <td class="bWhite">Riofrío, Valle del Cauca</td>
                            <td class="bWhite"><a href="#/plataforma/visor/institucion" class="aSS">Institución Educativa Primitivo Crespo</a></td>
                            <td class="bWhite">Institución Educativa Primitivo Crespo</td>
                            <td class="bWhite">Institución</td>
                            <!--<td class="bWhite taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>


                          <tr>
                            <td>Riofrío, Valle del Cauca</td>
                            <td>Institución Educativa Primitivo Crespo</td>
                            <td><a href="#/plataforma/visor/estudiante" class="aSS">Roberta Ossa Tiberui</a></td>
                            <td>Estudiante</td>
                            <!--<td class="taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>

                          <tr>
                            <td>Riofrío, Valle del Cauca</td>
                            <td>Institución Educativa Primitivo Crespo</td>
                            <td><a href="#/plataforma/visor/personal-acedemico" class="aSS">Geronimo Urrea</a></td>
                            <td>Profesor</td>
                            <!--<td class="taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>
