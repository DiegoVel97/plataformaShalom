<?php

include_once ('../model/Matricula/matriculaModel.php');
require_once("../lib/correo/src/Exception.php");
require_once("../lib/correo/src/PHPMailer.php");
require_once("../lib/correo/src/SMTP.php");

class formularioController {
	
    function listadoRenovacion(){
        $objFormulario = new matriculaModel();

/*"SELECT * FROM datos_alumno, datos_acudiente, datos_adulto_responsable, documentacion, formulario_renovacion WHERE datos_alumno.id_acudiente=datos_acudiente.id_persona AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND datos_acudiente.id_documentacion_indpendiente=documentacion_independiente.id_documentacion_indpendiente AND datos_adulto_responsable.id_documentacion_indpendiente=documentacion_independiente.id_documentacion_indpendiente AND formulario_renovacion.id_alumno=datos_alumno.id_alumno";*/

	$query =  "SELECT *,datos_acudiente_masculino.nombres_apellidos AS nombre_masculino, datos_acudiente_masculino.estrato_social AS estratoSocialMasculino,
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
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno";
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
             datos_acudiente_masculino.estado AS estadoMasculino FROM datos_alumno, pag_grados_colegio, pag_discapacidad_medica, pag_opciones_true_false, pag_terapia, pag_grupos_etnicos, pag_tipo_sangre, pag_rh_sangre, pag_eps, pag_estado_civil, pag_tipo_escritura, pag_tipo_documento, datos_acudiente_masculino, datos_acudiente_femenino, datos_adulto_responsable, formulario_renovacion, documentacion, pag_matricula WHERE datos_alumno.pertenece_grupos_etnicos=pag_grupos_etnicos.id_grupos_etnicos AND
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
            datos_alumno.id_acudiente_masculino=datos_acudiente_masculino.id_persona_masculina AND datos_alumno.id_acudiente_femenino=datos_acudiente_femenino.id_persona_femenino AND datos_alumno.id_adulto_responsable=datos_adulto_responsable.id_persona AND datos_alumno.id_documentos=documentacion.id_documento AND formulario_renovacion.id_alumno=datos_alumno.id_alumno AND datos_alumno.id_alumno=pag_matricula.id_alumno AND
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


  /* =========  MATRICULAR ALUMNO ============ */

  function matricularAlumno($parametros){
    
    $objFormulario = new matriculaModel();
    $id = $parametros[1];
    
    $validar = "SELECT COUNT(*) AS total FROM pag_matricula WHERE id_alumno = '$id'";
    $resultado = $objFormulario->find($validar);

    $numero = $resultado['total'];

    if($numero >= 1){
      echo 0;
    }else{

      /* ------------ INSERCION ALUMNO ACEPTADO ------------- */


      $sql = "SELECT * FROM datos_alumno WHERE id_alumno = $id";
    $consulta = $objFormulario->find($sql);



            $numero_documento_alumno = $consulta['id_alumno']; 
            $tipo_documento_alumno = $consulta['tipo_documento']; 
            $foto_alumno = $consulta['foto_alumno']; 
            $nombre_alumno = $consulta['primer_nombre']; 
            $segundo_nombre = $consulta['segundo_nombre']; 
            $primer_apellido_alumno = $consulta['primer_apellido']; 
            $segundo_apellido_alumno = $consulta['segundo_apellido']; 
            $fecha_nacimiento_alumno = $consulta['fecha_nacimiento']; 
            $ciudad_expedicion_alumno = $consulta['ciudad_expedicion_documento']; 
            $correo_alumno = $consulta['correo']; 
            $grado_alumno = $consulta['grado_que_ingreso']; 
            $ciudad_residencia_alumno = $consulta['ciudad_residencia']; 
            $comuna_alumno = $consulta['comuna_localidad']; 
            $direccion_alumno = $consulta['direccion_residencia']; 
            $barrio_alumno = $consulta['barrio_actual']; 
            $telefono_alumno = $consulta['telefono_residencia_actual']; 
            $cantidad_alumno = $consulta['nro_hermanos']; 
            $permanece_estudiante_tarde = $consulta['estudiante_permanece_en_la_tarde']; 
            $discapacidad_alumno = $consulta['presenta_discapacidad']; 
            $grupos_etnicos_alumno = $consulta['pertenece_grupos_etnicos']; 
            $terapia_alumno = $consulta['ha_recibido_terapia_de']; 
            $condicion_medica = $consulta['condicion_medica']; 
            $relevante_alumno = $consulta['condicion_medica_relevante']; 
            $de_cuidado_alumno = $consulta['condicion_medica_cuidado']; 
            $actualmente_terapia = $consulta['actualmente_terapia']; 
            $cual_terapia_alumno = $consulta['cual_terapia']; 
            $tipo_sangre_alumno = $consulta['tipo_sangre']; 
            $rh_sangre_alumno = $consulta['rh_sangre']; 
            $eps_alumno = $consulta['eps'];
            $cual_eps_alumno = $consulta['cual_eps']; 
            $tipo_escritura_alumno = $consulta['tipo_escritura']; 
            $ano_lectivo = $consulta['ano_lectivo']; 
            $id_acudiente_masculino_alumno = $consulta['id_acudiente_masculino']; 
            $id_acudiente_femenino_alumno = $consulta['id_acudiente_femenino']; 
            $id_adulto_responsable_alumno = $consulta['id_adulto_responsable']; 
            $id_documentacion_alumno = $consulta['id_documentos']; 
            $estado = $consulta['estado']; 


    $insercionAlumno =  "INSERT INTO alumnos_matriculados (id_alumno, tipo_documento,  foto_alumno,  primer_nombre,  segundo_nombre,  primer_apellido,  segundo_apellido,  fecha_nacimiento, lugar_nacimiento, procedencia_academica, en_caso_de_emergencia, ciudad_expedicion_documento,  correo,  grado_que_ingreso,  ciudad_residencia,  comuna_localidad,  direccion_residencia,  barrio_actual,  telefono_residencia_actual,  nro_hermanos,  estudiante_permanece_en_la_tarde,  presenta_discapacidad,  pertenece_grupos_etnicos,  ha_recibido_terapia_de,  condicion_medica,  condicion_medica_relevante,  condicion_medica_cuidado,  actualmente_terapia,  cual_terapia,  tipo_sangre,  rh_sangre,  eps,  cual_eps,  tipo_escritura,  ano_lectivo,  id_acudiente_masculino, id_acudiente_femenino,  id_adulto_responsable,  id_documentos,  estado) VALUES($numero_documento_alumno, '$tipo_documento_alumno','$foto_alumno', '$nombre_alumno', '$segundo_nombre', '$primer_apellido_alumno', '$segundo_apellido_alumno', '$fecha_nacimiento_alumno', 'No hay registro', 'No hay registro', 'Acudiente responsable', '$ciudad_expedicion_alumno', '$correo_alumno', '$grado_alumno', '$ciudad_residencia_alumno', '$comuna_alumno', '$direccion_alumno', '$barrio_alumno', '$telefono_alumno', '$cantidad_alumno', '$permanece_estudiante_tarde', '$discapacidad_alumno', '$grupos_etnicos_alumno', '$terapia_alumno', '$condicion_medica', '$relevante_alumno', '$de_cuidado_alumno', '$actualmente_terapia', '$cual_terapia_alumno', '$tipo_sangre_alumno', '$rh_sangre_alumno', '$eps_alumno', '$cual_eps_alumno', '$tipo_escritura_alumno', '$ano_lectivo',  '$id_acudiente_masculino_alumno','$id_acudiente_femenino_alumno', '$id_adulto_responsable_alumno', '$id_documentacion_alumno', '$estado')";
      $insercion = $objFormulario->insertar($insercionAlumno);



      /* --------------- INSERCION MATRICULA ------------------ */

      $id_matricula = "M".$numero_documento_alumno."-".rand(5, 1000);
      $id_folio = "FOLIO-".rand(5, 1000);

      $sql_matricula = "INSERT INTO pag_matricula (id_matricula, folio_matricula, id_alumno, estado_matricula) VALUES ('$id_matricula','$id_folio',$numero_documento_alumno,'Aceptada')";
      $insercion_mastricula = $objFormulario->insertar($sql_matricula);


      /* INSERCION MODAL MATRICULA */
      $sql_matricula = "INSERT INTO modal_matricula (id_matricula, estado_modal_matricula) VALUES ('$id_matricula','false')";
      $insercion_mastricula = $objFormulario->insertar($sql_matricula);




      $sql_adulto_responsable = "SELECT * FROM datos_adulto_responsable WHERE id_persona = $id_adulto_responsable_alumno";
      $adulto_responsable = $objFormulario->find($sql_adulto_responsable);

      $per_id = $adulto_responsable['id_persona'];
      $usu_usuario = $adulto_responsable['correo_persona'];

      $correo_adulto = $adulto_responsable['correo_persona'];
      $nombres = $adulto_responsable['nombres_apellidos'];


      $salt = '$bgr$/';
      $usu_clave = sha1(md5($salt . $per_id));

      $validar_usuario = "SELECT COUNT(*) AS total FROM pag_usuario WHERE per_id = $per_id";
      $resultado_usuario = $objFormulario->find($validar_usuario);

      $numero = $resultado_usuario['total'];

      if($numero > 0){
        echo "NO SE PUEDO CREAR SU USUARIO, ESTO SE DEBE A QUE YA SE ENCUENTRA REGISTRADO, CONTACTATE CON EL ADMINISTRADOR DEL SITIO WEB";
      }else{


      
      $insercion_usuario = "INSERT INTO pag_usuario (per_id, usu_usuario, usu_clave, usu_estado, rol_id) VALUES('$per_id', '$usu_usuario', '$usu_clave', 'activo', '2')";
      $insercion_tabla_usuario = $objFormulario->find($insercion_usuario);

      $sql_eliminar = "DELETE FROM datos_alumno WHERE id_alumno = $numero_documento_alumno";
      $eliminar = $objFormulario->delete($sql_eliminar);

          /* ENVIO FORMULARIO */

          // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer\PHPMailer\PHPMailer();

          try {
              //Server settings
              $mail->SMTPDebug = 2;                                       // Enable verbose debug output
              $mail->isSMTP();                                            // Set mailer to use SMTP
              $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'diegofernando9705@gmail.com';                     // SMTP username
              $mail->Password   = '1234188670';                               // SMTP password
              $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
              $mail->Port       = 587;                                    // TCP port to connect to

              //Recipients
              $mail->setFrom('diegofernando9705@gmail.com', 'Centro Educativo Shalom');
              $mail->addAddress($correo_adulto, $nombres);     // Add a recipient
              /*$mail->addAddress('ellen@example.com');               // Name is optional
              $mail->addReplyTo('info@example.com', 'Information');
              $mail->addCC('cc@example.com');
              $mail->addBCC('bcc@example.com');*/

              // ENVIO DE ARCHIVOS GMAIL 
              /*
              $mail->addAttachment('/var/tmp/file.tar.gz');          Add attachments
              $mail->addAttachment('/tmp/image.jpg', 'new.jpg');     Optional name
              */

              // Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Usuario y contrase&ntilde;a - Centro Educativo Shalom';
              $mail->Body    = '<h1>Bienvenidos al centro educativo Shalom</h1> A continuacion se les dara acceso a la plataforma para que observen y terminen el proceso de matricula de su alumno <b>Usuario:</b>'.$usu_usuario.' <b>Contraseña:</b>'.$per_id;
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
          } catch (Exception $e) {
              
          }  


      }

    } 

    


    $objFormulario->cerrar();
  }


  function pararMatriculaAlumno($parametros){

    $objFormulario = new matriculaModel();
    $id = $parametros[1];
    
    $validar = "SELECT COUNT(*) AS total FROM pag_matricula WHERE id_alumno = '$id'";
    $resultado = $objFormulario->find($validar);

    $numero = $resultado['total'];

    if($numero >= 1){
      echo 0;
    }else{

      /* ------------ INSERCION ALUMNO ACEPTADO ------------- */


    $sql = "SELECT * FROM datos_alumno WHERE id_alumno = $id";
    $consulta = $objFormulario->find($sql);

    $numero_documento_alumno = $consulta['id_alumno'];

      /* --------------- INSERCION MATRICULA ------------------ */

      $id_matricula = "M".$numero_documento_alumno."-".rand(5, 1000);
      $id_folio = "FOLIO-".rand(5, 1000);

      $sql_matricula = "INSERT INTO pag_matricula (id_matricula, folio_matricula, id_alumno, estado_matricula) VALUES ('$id_matricula','$id_folio','$numero_documento_alumno','Rechazado')";
      $insercion_mastricula = $objFormulario->insertar($sql_matricula);


      /* INSERCION MODAL MATRICULA */
      $sql_matricula = "INSERT INTO modal_matricula (id_matricula, estado_modal_matricula) VALUES ('$id_matricula','false')";
      $insercion_mastricula = $objFormulario->insertar($sql_matricula);




      $sql_adulto_responsable = "SELECT * FROM datos_adulto_responsable WHERE id_persona = $id_adulto_responsable_alumno";
      $adulto_responsable = $objFormulario->find($sql_adulto_responsable);

      $correo_adulto = $adulto_responsable['correo_persona'];
      $nombres = $adulto_responsable['nombres_apellidos'];

          /* ENVIO FORMULARIO */

          // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer\PHPMailer\PHPMailer();

          try {
              //Server settings
              $mail->SMTPDebug = 2;                                       // Enable verbose debug output
              $mail->isSMTP();                                            // Set mailer to use SMTP
              $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'diegofernando9705@gmail.com';                     // SMTP username
              $mail->Password   = '1234188670';                               // SMTP password
              $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
              $mail->Port       = 587;                                    // TCP port to connect to

              //Recipients
              $mail->setFrom('diegofernando9705@gmail.com', 'Centro Educativo Shalom');
              $mail->addAddress($correo_adulto, $nombres);     // Add a recipient
              /*$mail->addAddress('ellen@example.com');               // Name is optional
              $mail->addReplyTo('info@example.com', 'Information');
              $mail->addCC('cc@example.com');
              $mail->addBCC('bcc@example.com');*/

              // ENVIO DE ARCHIVOS GMAIL 
              /*
              $mail->addAttachment('/var/tmp/file.tar.gz');          Add attachments
              $mail->addAttachment('/tmp/image.jpg', 'new.jpg');     Optional name
              */

              // Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Informaci&oacute;n importante - Centro Educativo Shalom';
              $mail->Body    = '<h1>Bienvenidos al centro educativo Shalom</h1> El proceso de matricula que hemos obtenido con usted ha sido cancelado. Para mayor informaci&oacute;n acerquese al centro educativo Shalom, o comuniquese por nuestras lineas telefonicas.';
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
          } catch (Exception $e) {
              
          }  
    } 
  }

}