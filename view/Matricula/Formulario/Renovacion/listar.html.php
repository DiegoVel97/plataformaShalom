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
                        
    <script type="text/javascript">
        $('.modal-trigger').leanModal({
            dismissible: false , // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            ready: function () {
                //alert('Ready'); 
            }, // Callback for Modal open
            complete: function () {
                //alert('Closed'); 
            } // Callback for Modal close
        });
    </script>