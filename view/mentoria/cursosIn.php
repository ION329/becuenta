<div class="barraRoja">
	<div class="row" style="margin:0">
        <div class="col-sm-2 col-xs-2 p0">
        </div>
        <div class="col-sm-10 col-xs-10 p0" style="height:400px;">
        </div>
    </div>
</div>

<div class="barraPost">
	<div class="row" style="margin:0">
        <div class="col-sm-2 col-xs-2 p0">
            <br /><br /><br />
            
            <a href="#/mentoria" class="btMenPpeBlue dB taC p20 colorfff">
                <img src="resources/img/icons/a1.png" />
                <br /><br />
                Mentoría
            </a>
            <a href="#/mentoria/agenda" class="btMenPpeBlue dB taC p20 colorfff">
                <img src="resources/img/icons/a5.png" />
                <br /><br />
                Agenda
            </a>
            <a href="#/mentoria/cursos" class="btMenPpeBlue selo dB taC p20 colorfff">
                <img src="resources/img/icons/a33.png" />
                <br /><br />
                Cursos creados
            </a>
            <a href="#/mentoria/recursos" class="btMenPpeBlue dB taC p20 colorfff">
                <img src="resources/img/icons/a4.png" />
                <br /><br />
                Recursos
            </a>
        </div>
        

        <div class="col-sm-10 col-xs-10 p20">
            
            <div class="ionix" style="padding-top:20px;">
                <div class="generalMin-ojo">

                <div class="dBeycker1">
                
                <div class="row m0" style="margin-bottom: 40px;">
                    <div class="col-xs-6 col-sm-6 ff11 vcenter"><div class="colorfff t40">Panel de Cursos</div></div><!--
                --><div class="col-xs-6 col-sm-6 vcenter taR">
                        <a class="bBasic3 rr5 taC fv_btn2x" href="">Crear un Curso</a>
                    </div>
                </div>

                <div class="row m0">
                    
                    <?php for($vv=0; $vv<3; $vv++) { ?>

                    <div class="col-xs-4 col-sm-4 cP bBeycker">
                        <div class="bWhite rr10">
                            <div class="pR">
                                <div class="">
                                    <img src="resources/img/temporal/Recurso2.png" style="width: 100%" />
                                </div>
                                <div class="pA" style="bottom: -25px; left: 3%;">
                                    <img src="resources/img/demo/user2.png" class="imgAbs">
                                </div>
                            </div>

                            <div class="color999 p20">
                                <div class="taC mb20">
                                    Alejandro Martinez <br>
                                    Comunicador Grafico
                                </div>

                                <div class="t20 color000 pLR20">
                                    Google Adwords <br>
                                    para principiantes
                                </div>
                                <hr>
                                <div class="pLR20">
                                    20 Reproduciones <br>
                                    56 Comentarios
                                </div>

                            </div>
                        </div>    
                    </div>

                    <?php } ?>

                </div>

                </div>

                <div class="dBeycker2 dN">
                    <div class="row m0">
                        <div class="col-xs-12 col-sm-12 mb20">
                            <span class="color333 mb20 cP bBeycker t16"><img src="resources/img/icons/arR.png" /> &nbsp; Panel de Cursos</span>
                        </div>
                    </div>

                    <div class="row m0">
                        <div class="bS1 bWhite">
                            <div class="row m0 bGray3 p20" style="border-bottom: 1px solid #ccc;">
                                <div class="col-xs-2 col-sm-2 p0">
                                    <img src="resources/img/temporal/pingui.png" width="80%" />
                                </div>
                                <div class="col-xs-4 col-sm-4 p0">
                                    <div class="ff2 t16 mb10">Aprende a editar imagenes con Adobe Photoshop</div>
                                    <div class="color666">Andres Ospina</div>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <div class="color666">Temas Creados</div>
                                    <div class="t50">5</div>
                                    <div class="color000">(Maximo 10)</div>
                                </div>
                                <div class="col-xs-3 col-sm-3 p0">
                                    <div class="color666 mb10">Tu curso <span class="colorRed"> no se ha publicado</span></div>
                                    <div><a class="bBasic3 rr5 taC bAzulBE colorfff" href="">Enviar para revisión</a></div>
                                </div>
                            </div>

                            <div class="row m0 p20">
                                <ul class="nav ff2 menu-bykr">
                                        
                                    <li class="active"><a data-toggle="tab" href="#informacion" target="_self" class="colorVerde2 pMenu">Informacion Básica</a></li>
                                    
                                    <li><a data-toggle="tab" href="#imagen" target="_self" class="colorVerde2 pMenu">Imagen</a></li>
                                    
                                    <li><a data-toggle="tab" href="#metas" target="_self" class="colorVerde2 pMenu">Metas del Curso</a></li>

                                    <li><a data-toggle="tab" href="#curriculo" target="_self" class="colorVerde2 pMenu">Currículo</a></li>   
                                    
                                </ul>  

                                
                            </div>

                            
                        </div>

                        <div class="tab-content">
                                <div id="informacion" class="tab-pane fade in active">
                                    <div class="row m0 bS1 bWhite p30" style="margin-top: -1px; margin-bottom: 20px">
                                        <div class="t24 color000 ff2 taC mb10">
                                            Información Básica
                                        </div>
                                        <div class="t18 color666 taC">
                                            Ayuda a los estudiantes a encontrar su curso
                                        </div>
                                    </div>

                                    <div class="row m0">
                                        <div class="col-xs-8 col-sm-8 col-xs-offset-2 col-sm-offset-2 p0">
                                            <div class="col-xs-12 col-sm-12 mb10">
                                                <div class="ff2 colorVerde2 mb5">Titulo</div>
                                                <input type="text" name="title" id="title" class="form-control input-bykr" value="Aprenda a editar imagenes con Adobe Photoshop">
                                                <!--<select name="titulo" id="titulo" class="selecStd rr5">
                                                    <option value="seleccione">Aprenda a editar imagenes con Adobe Photoshop</option>
                                                </select>-->
                                            </div>
                                            <div class="col-xs-6 col-sm-6 mb20">
                                                <div class="ff2 colorVerde2 mb5">Idioma</div>
                                                <select name="titulo" id="titulo" class="selecStd2 rr5">
                                                    <option value="español">Español</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 mb20">
                                                <div class="ff2 colorVerde2 mb5">Categoria</div>
                                                <select name="titulo" id="titulo" class="selecStd2 rr5">
                                                    <option value="español">-- Seleccione una --</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 mb20">
                                                <div class="ff2 colorVerde2 mb5">Nivel de instrucción</div>
                                                <div class="ff1 color666 mb5">Especifica el nivel del contenido del curso para que los estudiantes puedan decidir si se trata del curso apropiado para ellos. </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 mb20">
                                                <label for="basico"> <input type="radio" name="rdb" id="basico"> <span class="ff2 color000">Nivel Basico</span> </label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 mb20">
                                                <label for="intermedio"> <input type="radio" name="rdb" id="intermedio"> <span class="ff2 color000">Nivel Intermedio</span> </label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 mb20">
                                                <label for="avanzado"> <input type="radio" name="rdb" id="avanzado"> <span class="ff2 color000">Nivel Avanzado</span></label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 mb20">
                                                <label for="todos"> <input type="radio" name="rdb" id="todos"> <span class="ff2 color000">Todos los niveles</span></label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 mb20">
                                                <div class="ff2 colorVerde2 mb5">Resumen del Curso</div>
                                                <div class="ff1 color666 mb5">Resalta el contenido del curso, como se imparte, sus beneficios y porque deberian inscribirse los estudiantes. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="imagen" class="tab-pane fade">
                                    <div class="row m0 bS1 bWhite p30" style="margin-top: -1px; margin-bottom: 20px">
                                        <div class="t24 color000 ff2 taC mb10">
                                            Imagen del Curso
                                        </div>
                                        <div class="t18 color666 taC">
                                            Una buena imagen del curso es fundamental para que el curso sea un exito. <br>
                                            Debe atraer la atencion del espectador y ayudarle a entender que ofrece el curso.
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-8 col-sm-8 col-xs-offset-2 col-sm-offset-2">
                                        <div class="col-xs-12 col-sm-12 taC mb20">
                                            <img src="resources/img/temporal/pingui2.png" />
                                        </div> 

                                        <div class="col-xs-12 col-sm-12 mb5">
                                            <div class="ff2 color666">
                                                Agrega/cambia imagen:    
                                            </div>
                                        </div>   

                                        <div class="col-xs-8 col-sm-8">
                                            <input type="text" name="imagen" id="imagen" placeholder="Usa un archivo gif, jpg, jpeg o png" class="form-control input-bykr">
                                        </div>

                                        <div class="col-xs-4 col-sm-4 p0">
                                            <a class="bBasic3 rr5 taC bVerde colorfff" href="">Elige un archivo de imagen</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="metas" class="tab-pane fade">
                                    <div class="row m0 bS1 bWhite p30" style="margin-top: -1px; margin-bottom: 20px">
                                        <div class="t24 color000 ff2 taC mb10">
                                            Metas del Curso
                                        </div>
                                        <div class="t18 color666 taC">
                                            Establece tu publico, lo que aprenderan los estudiantes y lo que necesitaran para alcanzar el exito.
                                        </div>
                                    </div>

                                    <div class="col-xs-8 col-sm-8 col-xs-offset-2 col-sm-offset-2">
                                        <div class="col-xs-12 col-sm-12 ff2 mb10">
                                            <div class="mb5 colorVerde2">Al finalizar el curso, los estudiantes podrán...</div>
                                            <div class="ff1 color666">Incluye detalles sobre las destrezas especificas que aprenderan los estudiantes</div>
                                        </div>

                                        <div class="col-xs-10 col-sm-10 mb10">
                                            <div><input type="text" name="destrezas" id="destrezas" class="form-control input-bykr"></div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 mb10">
                                            <a class="bBasic3 rr5 taC bBlue colorfff" href="">Añadir</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 ff2 mb10 colorVerde2">
                                            ¿Quien deberia realizar este curso?
                                        </div>
                                        <div class="col-xs-10 col-sm-10 mb10">
                                            <div><input type="text" name="realizar" id="realizar" class="form-control input-bykr"></div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 mb10">
                                            <a class="bBasic3 rr5 taC bBlue colorfff" href="">Añadir</a>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 ff2 mb10 colorVerde2">
                                            ¿Que tiene que saber usted antes de comenzar este curso?
                                        </div>
                                        <div class="col-xs-10 col-sm-10 mb20">
                                            <div><input type="text" name="saber" id="saber" class="form-control input-bykr"></div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 mb20">
                                            <a class="bBasic3 rr5 taC bBlue colorfff" href="">Añadir</a>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 taC">
                                            <a class="bBasic3 rr5 taC fv_btn2x" href="">Guardar</a>
                                        </div>

                                    </div>
                                </div>
                                <div id="curriculo" class="tab-pane fade">
                                    <div class="row m0 bS1 bWhite p30" style="margin-top: -1px; margin-bottom: 20px">
                                        <div class="t24 color000 ff2 taC mb10">
                                            Currículo
                                        </div>
                                        <div class="t18 color666 taC">
                                            Establece tu publico, lo que aprenderan los estudiantes y lo que necesitaran para alcanzar el exito.
                                        </div>
                                    </div>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3" style="background-color: #555; color: white">Contenido</th>    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: transparent">
                                                <td>Introduccion a Google Adwards</td>
                                                <td>introducción.mov</td>
                                                <td>56 MB</td>
                                            </tr>
                                            
                                        </tbody>
                                    
                                    </table>
                                    
                                    <div class="col-xs-8 col-sm-8 col-xs-offset-2 col-sm-offset-2">
                                        <div class="col-xs-12 col-sm-12 mb10" style="padding-right: 0px">
                                            <input type="text" name="titulo-tema" id="titulo-tema" class="form-control input-bykr" placeholder="Título tema">
                                        </div>
                                        <div class="col-xs-9 col-sm-9 mb10" style="padding-right: 0px">
                                            <input type="text" name="archivo" id="archivo" class="form-control input-bykr">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 mb10 taR" style="padding: 0px">
                                            <a class="bBasic3 rr5 taC bBlue3 colorfff" href="">Seleccionar Archivo</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 mb20 colorVerde2">
                                            Utiliza archivos PDF. .mp4, .mov, o .wmv que no sean mayores de 4,0 GiB
                                        </div>
                                        <div class="col-xs-12 col-sm-12 mb20 taC">
                                            <a class="bBasic3 rr5 taC fv_btn2x" href="">Guardar</a>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                    </div>
                </div>


                </div>
            </div>
            
        </div>
    </div>
    
    
    <br /><br />
    <div class="endPp taC">
    	<img src="resources/img/temporal/end.jpg" style="margin-top:-25px;" />
    </div>
</div>

