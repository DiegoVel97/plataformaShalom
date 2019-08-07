<?php

include_once ('../model/Matricula/matriculaModel.php');

class formularioController {
	
    function listadoRenovacion(){
        $objFormulario = new matriculaModel();

/*"SELECT * FROM datos_alumno, datos_acudiente, datos_adulto_responsable, documentacion, formulario_renovacion WHERE datos_alumno.id_acudiente=datos_acudiente.id_persona AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND datos_acudiente.id_documentacion_indpendiente=documentacion_independiente.id_documentacion_indpendiente AND datos_adulto_responsable.id_documentacion_indpendiente=documentacion_independiente.id_documentacion_indpendiente AND formulario_renovacion.id_alumno=datos_alumno.id_alumno";*/

	$query =  "SELECT * FROM datos_alumno, datos_acudiente_masculino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE  datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno";
		$consultaFormularios = $objFormulario->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('formulario', 'listadoRenovacion', 'listar');

        $paginado = new Paginado($consultaFormularios, $pagina, $url);
        
        $consultaFormularios = $paginado->getDatos();

		$objFormulario->cerrar();

		include_once('../view/Matricula/Formulario/Renovacion/consulta.html.php');
    }

    function verDetalle($parametros = false){
          $objFormulario = new matriculaModel();

          $sqlDtoIndependiente = "SELECT * FROM documentacion_independiente";
          $documentacionIndepentiente = $objFormulario->select($sqlDtoIndependiente);

          $id = $parametros[1];
          $sql = "SELECT *,datos_acudiente_masculino.nombres_apellidos AS nombre_masculino, datos_acudiente_masculino.estrato_social AS estratoSocialMasculino,
           datos_acudiente_masculino.telefono_residencia AS telefonoMasculino,
           datos_acudiente_masculino.telefono_oficina_actual AS telefonoOficinaMasculino,
           datos_acudiente_masculino.numero_celular AS celularMasculino,
            datos_acudiente_masculino.correo_persona AS correoMasculino,
            datos_acudiente_masculino.empresa_donde_trabaja AS empresaMasculino,
            datos_acudiente_masculino.profesion_persona AS profesionMasculino,
            datos_acudiente_masculino.ocupacion_actual AS ocupacionMasculino,
             datos_acudiente_masculino.estado AS estadoMasculino FROM datos_alumno, pag_grados_colegio, pag_discapacidad_medica, pag_opciones_true_false, pag_terapia, pag_grupos_etnicos, pag_tipo_sangre, pag_rh_sangre, pag_eps, pag_estado_civil, pag_tipo_escritura, pag_tipo_documento, datos_acudiente_masculino, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
          datos_alumno.grado_que_ingreso=pag_grados_colegio.id_grado_colegio AND 
            datos_alumno.tipo_documento=pag_tipo_documento.id_tipo_documento AND 
            datos_acudiente_masculino.estado_civil=pag_estado_civil.id_estado_civil AND
            datos_alumno.condicion_medica=pag_opciones_true_false.id_opciones AND
            datos_alumno.tipo_sangre=pag_tipo_sangre.id_sangre AND
            datos_alumno.rh_sangre=pag_rh_sangre.id_rh_sangre AND
            datos_alumno.eps=pag_eps.id_eps AND
            datos_alumno.tipo_escritura=pag_tipo_escritura.id_tipo_escritura AND
            datos_alumno.ha_recibido_terapia_de=pag_terapia.id_terapia AND
            datos_alumno.presenta_discapacidad=pag_discapacidad_medica.id_discapacidad_medica AND
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND datos_alumno.id_alumno='$id'";
          $alumno = $objFormulario->find($sql);

        include_once('../view/Matricula/Formulario/Renovacion/detalle.html.php');
    }

    function editar($parametros = false){
      $objFormulario = new matriculaModel();

          $sqlTipo = "SELECT * FROM pag_tipo_documento";
          $tipoDocumentos = $objFormulario->select($sqlTipo);


          $sqlGrado = "SELECT * FROM pag_grados_colegio";
          $grados = $objFormulario->select($sqlGrado);


          $sqlOpciones = "SELECT * FROM pag_opciones_true_false";
          $opciones = $objFormulario->select($sqlOpciones);


          $sqlDispacidad = "SELECT * FROM pag_discapacidad_medica";
          $discapacidades = $objFormulario->select($sqlDispacidad);
          
          $sqlGrupos = "SELECT * FROM pag_grupos_etnicos";
          $gruposEtnicos = $objFormulario->select($sqlGrupos);

          $sqlTerapias = "SELECT * FROM pag_terapia";
          $terapias = $objFormulario->select($sqlTerapias);

          $sqlTipoSangre = "SELECT * FROM pag_tipo_sangre";
          $tipoSangre = $objFormulario->select($sqlTipoSangre);


          $sqlRHSangre = "SELECT * FROM pag_rh_sangre";
          $rhSangre = $objFormulario->select($sqlRHSangre);

          $sqlEPS = "SELECT * FROM eps";
          $eps = $objFormulario->select($sqlEPS);

          $sqlTipoEscritura = "SELECT * FROM pag_tipo_escritura";
          $tipoEscritura = $objFormulario->select($sqlTipoEscritura);

          $sqlEstadoCivil = "SELECT * FROM pag_estado_civil";
          $estadosCiviles = $objFormulario->select($sqlEstadoCivil);


          $id = $parametros[1];
          $sql = "SELECT * FROM datos_alumno, datos_acudiente, datos_adulto_responsable, formulario_renovacion, documentacion, documentacion_independiente WHERE datos_acudiente.id_documentacion_independiente=documentacion_independiente.id_documentacion_independiente  AND datos_alumno.id_acudiente=datos_acudiente.id_persona AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND datos_alumno.id_alumno='$id'";
          $alumno = $objFormulario->find($sql);
          echo "HOLA";

        include_once('../view/Matricula/Formulario/Renovacion/edicion.html.php');
    }


  function buscarAjax(){
    $objMatriculas = new matriculaModel();

        $buscarAlumno = $_POST['buscarAlumno'];
 
        $sql = "SELECT *,datos_acudiente_masculino.nombres_apellidos AS nombre_masculino, datos_acudiente_masculino.estrato_social AS estratoSocialMasculino,
           datos_acudiente_masculino.telefono_residencia AS telefonoMasculino,
           datos_acudiente_masculino.telefono_oficina_actual AS telefonoOficinaMasculino,
           datos_acudiente_masculino.numero_celular AS celularMasculino,
            datos_acudiente_masculino.correo_persona AS correoMasculino,
            datos_acudiente_masculino.empresa_donde_trabaja AS empresaMasculino,
            datos_acudiente_masculino.profesion_persona AS profesionMasculino,
            datos_acudiente_masculino.ocupacion_actual AS ocupacionMasculino,
             datos_acudiente_masculino.estado AS estadoMasculino FROM datos_alumno, pag_grados_colegio, pag_discapacidad_medica, pag_opciones_true_false, pag_terapia, pag_grupos_etnicos, pag_tipo_sangre, pag_rh_sangre, pag_eps, pag_estado_civil, pag_tipo_escritura, pag_tipo_documento, datos_acudiente_masculino, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
          datos_alumno.grado_que_ingreso=pag_grados_colegio.id_grado_colegio AND 
            datos_alumno.tipo_documento=pag_tipo_documento.id_tipo_documento AND 
            datos_acudiente_masculino.estado_civil=pag_estado_civil.id_estado_civil AND
            datos_alumno.condicion_medica=pag_opciones_true_false.id_opciones AND
            datos_alumno.tipo_sangre=pag_tipo_sangre.id_sangre AND
            datos_alumno.rh_sangre=pag_rh_sangre.id_rh_sangre AND
            datos_alumno.eps=pag_eps.id_eps AND
            datos_alumno.tipo_escritura=pag_tipo_escritura.id_tipo_escritura AND
            datos_alumno.ha_recibido_terapia_de=pag_terapia.id_terapia AND
            datos_alumno.presenta_discapacidad=pag_discapacidad_medica.id_discapacidad_medica AND
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND 
          datos_alumno.primer_nombre LIKE '%" . $buscarAlumno . "%' ";
        $consultaFormularios = $objMatriculas->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Matricula', 'formulario', 'listar');

        $paginado = new Paginado($consultaFormularios, $pagina, $url);
        
        $consultaFormularios = $paginado->getDatos();


        $objMatriculas->cerrar();

        include_once('../view/Matricula/Formulario/Renovacion/listar.html.php');
  }

  function verPDF($parametros = false){
    echo $parametros[1];

      $file = '../web/documentos/alumnos/'.$parametros[1].'/'.$parametros[2];
      $filename = 'Custom file name for the.pdf'; /* Note: Always use .pdf at the end. */
       
      header('Content-type: application/pdf');
      header('Content-Disposition: inline; filename="' . $filename . '"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: ' . filesize($file));
      header('Accept-Ranges: bytes');
       
      readfile($file);

  }



/* ================================== FUNCIONES LISTADO SOLICITUD ========================== */


   function listadoSolicitud(){
        $objFormulario = new matriculaModel();

  $query = "SELECT * FROM formulario_solicitud, pag_tipo_documento, pag_grados_colegio, pag_terapia, pag_grupos_etnicos, pag_eps, datos_acudiente_femenino, datos_acudiente_masculino WHERE 
formulario_solicitud.tipo_documento=pag_tipo_documento.id_tipo_documento AND 
formulario_solicitud.grado_ingreso=pag_grados_colegio.id_grado_colegio AND 
formulario_solicitud.terapia_alumno=pag_terapia.id_terapia AND 
formulario_solicitud.grupo_etnico_alumno=pag_grupos_etnicos.id_grupos_etnicos AND
formulario_solicitud.eps_alumno=pag_eps.id_eps AND formulario_solicitud.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND formulario_solicitud.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina";
    $consultaFormularios = $objFormulario->select($query);

      //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('formulario', 'listadoSolicitud', 'listar');

        $paginado = new Paginado($consultaFormularios, $pagina, $url);
        
        $consultaFormularios = $paginado->getDatos();

    $objFormulario->cerrar();

    include_once('../view/Matricula/Formulario/Solicitud/consulta.html.php');
    }

    function verDetalleSolicitud($parametros = false){
          $objFormulario = new matriculaModel();

          $sqlDtoIndependiente = "SELECT * FROM documentacion_independiente";
          $documentacionIndepentiente = $objFormulario->select($sqlDtoIndependiente);

          $id = $parametros[1];
          $sql = "SELECT *,datos_acudiente_masculino.nombres_apellidos AS nombre_masculino, datos_acudiente_masculino.estrato_social AS estratoSocialMasculino,
           datos_acudiente_masculino.telefono_residencia AS telefonoMasculino,
           datos_acudiente_masculino.telefono_oficina_actual AS telefonoOficinaMasculino,
           datos_acudiente_masculino.numero_celular AS celularMasculino,
            datos_acudiente_masculino.correo_persona AS correoMasculino,
            datos_acudiente_masculino.empresa_donde_trabaja AS empresaMasculino,
            datos_acudiente_masculino.profesion_persona AS profesionMasculino,
            datos_acudiente_masculino.ocupacion_actual AS ocupacionMasculino,
             datos_acudiente_masculino.estado AS estadoMasculino FROM datos_alumno, pag_grados_colegio, pag_discapacidad_medica, pag_opciones_true_false, pag_terapia, pag_grupos_etnicos, pag_tipo_sangre, pag_rh_sangre, pag_eps, pag_estado_civil, pag_tipo_escritura, pag_tipo_documento, datos_acudiente_masculino, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
          datos_alumno.grado_que_ingreso=pag_grados_colegio.id_grado_colegio AND 
            datos_alumno.tipo_documento=pag_tipo_documento.id_tipo_documento AND 
            datos_acudiente_masculino.estado_civil=pag_estado_civil.id_estado_civil AND
            datos_alumno.condicion_medica=pag_opciones_true_false.id_opciones AND
            datos_alumno.tipo_sangre=pag_tipo_sangre.id_sangre AND
            datos_alumno.rh_sangre=pag_rh_sangre.id_rh_sangre AND
            datos_alumno.eps=pag_eps.id_eps AND
            datos_alumno.tipo_escritura=pag_tipo_escritura.id_tipo_escritura AND
            datos_alumno.ha_recibido_terapia_de=pag_terapia.id_terapia AND
            datos_alumno.presenta_discapacidad=pag_discapacidad_medica.id_discapacidad_medica AND
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND datos_alumno.id_alumno='$id'";
          $alumno = $objFormulario->find($sql);

        include_once('../view/Matricula/Formulario/Solicitud/detalle.html.php');
    }


    function editarSolicitud($parametros = false){
      $objFormulario = new matriculaModel();

          $sqlTipo = "SELECT * FROM pag_tipo_documento";
          $tipoDocumentos = $objFormulario->select($sqlTipo);


          $sqlGrado = "SELECT * FROM pag_grados_colegio";
          $grados = $objFormulario->select($sqlGrado);


          $sqlOpciones = "SELECT * FROM pag_opciones_true_false";
          $opciones = $objFormulario->select($sqlOpciones);


          $sqlDispacidad = "SELECT * FROM pag_discapacidad_medica";
          $discapacidades = $objFormulario->select($sqlDispacidad);
          
          $sqlGrupos = "SELECT * FROM pag_grupos_etnicos";
          $gruposEtnicos = $objFormulario->select($sqlGrupos);

          $sqlTerapias = "SELECT * FROM pag_terapia";
          $terapias = $objFormulario->select($sqlTerapias);

          $sqlTipoSangre = "SELECT * FROM pag_tipo_sangre";
          $tipoSangre = $objFormulario->select($sqlTipoSangre);


          $sqlRHSangre = "SELECT * FROM pag_rh_sangre";
          $rhSangre = $objFormulario->select($sqlRHSangre);

          $sqlEPS = "SELECT * FROM eps";
          $eps = $objFormulario->select($sqlEPS);

          $sqlTipoEscritura = "SELECT * FROM pag_tipo_escritura";
          $tipoEscritura = $objFormulario->select($sqlTipoEscritura);

          $sqlEstadoCivil = "SELECT * FROM pag_estado_civil";
          $estadosCiviles = $objFormulario->select($sqlEstadoCivil);


          $id = $parametros[1];
          $sql = "SELECT *,datos_acudiente_masculino.nombres_apellidos AS nombre_masculino, datos_acudiente_masculino.estrato_social AS estratoSocialMasculino,
           datos_acudiente_masculino.telefono_residencia AS telefonoMasculino,
           datos_acudiente_masculino.telefono_oficina_actual AS telefonoOficinaMasculino,
           datos_acudiente_masculino.numero_celular AS celularMasculino,
            datos_acudiente_masculino.correo_persona AS correoMasculino,
            datos_acudiente_masculino.empresa_donde_trabaja AS empresaMasculino,
            datos_acudiente_masculino.profesion_persona AS profesionMasculino,
            datos_acudiente_masculino.ocupacion_actual AS ocupacionMasculino,
             datos_acudiente_masculino.estado AS estadoMasculino FROM datos_alumno, pag_grados_colegio, pag_discapacidad_medica, pag_opciones_true_false, pag_terapia, pag_grupos_etnicos, pag_tipo_sangre, pag_rh_sangre, pag_eps, pag_estado_civil, pag_tipo_escritura, pag_tipo_documento, datos_acudiente_masculino, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
          datos_alumno.grado_que_ingreso=pag_grados_colegio.id_grado_colegio AND 
            datos_alumno.tipo_documento=pag_tipo_documento.id_tipo_documento AND 
            datos_acudiente_masculino.estado_civil=pag_estado_civil.id_estado_civil AND
            datos_alumno.condicion_medica=pag_opciones_true_false.id_opciones AND
            datos_alumno.tipo_sangre=pag_tipo_sangre.id_sangre AND
            datos_alumno.rh_sangre=pag_rh_sangre.id_rh_sangre AND
            datos_alumno.eps=pag_eps.id_eps AND
            datos_alumno.tipo_escritura=pag_tipo_escritura.id_tipo_escritura AND
            datos_alumno.ha_recibido_terapia_de=pag_terapia.id_terapia AND
            datos_alumno.presenta_discapacidad=pag_discapacidad_medica.id_discapacidad_medica AND
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND datos_alumno.id_alumno='$id'";
          $alumno = $objFormulario->find($sql);
          echo "HOLA";

        include_once('../view/Matricula/Formulario/Renovacion/edicion.html.php');
    }


  function buscarAjaxSolicitud(){
    $objMatriculas = new matriculaModel();

        $buscarAlumno = $_POST['buscarAlumno'];
 
        $sql = "SELECT * FROM datos_alumno, datos_acudiente_masculino, pag_grupos_etnicos, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion WHERE  datos_alumno.id_acudiente=datos_acudiente_masculino.id_persona AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND 
          datos_alumno.id_documentos=documentacion.id_documento AND
          datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
          formulario_renovacion.id_alumno=datos_alumno.id_alumno AND 
          datos_alumno.primer_nombre LIKE '%" . $buscarAlumno . "%' ";
        $consultaFormularios = $objMatriculas->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Matricula', 'formulario', 'listar');

        $paginado = new Paginado($consultaFormularios, $pagina, $url);
        
        $consultaFormularios = $paginado->getDatos();


        $objMatriculas->cerrar();

        include_once('../view/Matricula/Formulario/Renovacion/listar.html.php');
  }

  function verPDFSolicitud($parametros = false){
    echo $parametros[1];

      $file = '../web/documentos/alumnos/'.$parametros[1].'/'.$parametros[2];
      $filename = 'Custom file name for the.pdf'; /* Note: Always use .pdf at the end. */
       
      header('Content-type: application/pdf');
      header('Content-Disposition: inline; filename="' . $filename . '"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: ' . filesize($file));
      header('Accept-Ranges: bytes');
       
      readfile($file);

  }


}