<div class="card-panel">
    <div class="container">
        <h5 class="header2"><i class="mdi-editor-format-align-justify"></i> CONSULTA FORMULARIO RENOVACI&Oacute;N</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("Matricula","renovacion","crearRenovacion") ?>">Agregar Formulario Renovacion</a></li>
            <li class="active">Listar Noticia</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; buscar toda la informaci&oacute;n de un alumno, por medio de su <code>Nombre, apellido, telefono, nombre del acudiente</code>.</p>
            </div>
        </div>
        <?php
        $errores = getErrores();
        if (!$errores == "") {
            ?>
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    <p><i class="mdi-alert-error"></i> 
                        <?php echo $errores ?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } 

        $errores = getErrores();
        if (!$errores == "") {
            ?>
            <div id="card-alert" class="card green">
                <div class="card-content white-text">
                        <?php echo $errores ?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } ?>
        <!--Fin mensaje de campos obligatorios-->
        <form class="col s12">
            <div class="input-field">
                <i class="mdi-action-search prefix"></i>
                <input type="text" class="active" id="buscarAlumno" name='buscarAlumno' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("Matricula", "formulario", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarAlumno" class="active">Digite el una palabra para empezar la Buqueda</label>
            </div>
        </form>
        
        <div id="divAlumno">
            <div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th><center>Id. formulario</center></th>
                                    <th>Nombre del alumno</th>
                                    <th>Apellido del alumno</th>
                                    <th>Nombre del acudiente</th>
                                    <th colspan="2"><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>     

                                <?php foreach ($consultaFormularios as $formulario) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $formulario['id_formulario']; ?>
                                        </td>
                                        <td>
                                            <?php echo $formulario['primer_nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $formulario['primer_apellido']; ?>
                                        </td>
                                        <td>
                                            <?php echo $formulario[38]; ?>
                                        </td>
                                        <td>
                                            <a class="btn-floating modal-trigger waves-effect waves-light teal editarFormularioRenovacion" 
                                       href="#editarFormularioRenovacion" data-url="<?php echo crearUrl('Matricula', 'formulario', 'editar', array('noVista' => "noVista", 'id' => $formulario['id_alumno'])) ?>">
                                                <i class="mdi-content-create small"></i>
                                            </a>
                                        </td>   
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal verDetalleFormRenovacion" href="#detalleFormulario" data-url="<?php echo crearUrl('Matricula', 'formulario', 'verDetalle', array('noVista' => "noVista", 'id' => $formulario['id_alumno'])) ?>">
                                                <i class="mdi-action-find-in-page tiny"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a title="Aprobar renovacion" class="btn-floating waves-effect teel darken-1" href="#">
                                               <i class="small mdi-action-done"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a title="Rechazar renovacion" class="btn-floating waves-effect red darken-1" href="#">
                                               <i class="small mdi-navigation-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $paginado->render();  ?>

                        <div id="editarFormularioRenovacion" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                        <div id="detalleFormulario" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                        <div id="editarFoto" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>