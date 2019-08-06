<?php

include_once ('../model/Matricula/matriculaModel.php');

class matriculaController {
	
    function listar(){
        include_once("../web/templates/formularios/renovacionCupo/renovacion_cupo.html.php");
    }
	function renovacion(){

		/* Empieza Validaciones del Formulario */
        $errores = array();
        $patronLetras = "/^[a-zA-Z_áéíóúñ\s]*$/";
        $patronLetrasNumeros = "/^[0-9a-zA-Z]+$/";
    


        if (!isset($_POST['lectivo']) or $_POST['lectivo'] == "") {
            $errores[] = "El año lectivo se encuentra vacio. <code><b>No puede quedar vacio</code></b>";
        }//Valida que el Nombre del equipo no este vacio
        if (!isset($_FILES['fotoAlumnoDiv1']) or $_FILES['fotoAlumnoDiv1'] == "") {
            $errores[] = "Seleccione una <code><b>Foto</b></code> del alumno";
        }//Valida que el Nombre del equipo no este vacio
        if (!isset($_POST['gradoCursar']) or $_POST['gradoCursar'] == "") {
            $errores[] = "Por favor, <code><b>Seleccione un grado a cursar </b></code> para el estudiante";
        }


        
        /* ==================  VALIDACION FORMULARIO ALUMNO ============= */


if(!isset($_FILES['fotoAlumnoDiv1']) or $_FILES['fotoAlumnoDiv1'] == ""){
    $errores[] = "La foto del alumno no debe quedar vacio";
}
if(!isset($_POST['nombreAlumno']) or $_POST['nombreAlumno'] == "") {
    $errores [] = "El campo <code>Nombre del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['apellidoAlumno']) or $_POST['apellidoAlumno'] == "") {
    $errores [] = "El campo <code>Apellido del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['fecha_nacimiento']) or $_POST['fecha_nacimiento'] == "") {
    $errores [] = "El campo <code>Fecha de nacimiento</code> no puede quedar vacio"; 
} 
if(!isset($_POST['tipoDocumentoAlumno']) or $_POST['tipoDocumentoAlumno'] == "") {
    $errores [] = "El campo <code>tipo documento</code> no puede quedar vacio"; 
} 
if(!isset($_POST['numeroDocumentoAlumno']) or $_POST['numeroDocumentoAlumno'] == "") {
    $errores [] = "El campo <code>Numero de documento del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['ciudadExpedicionDtoAlumno']) or $_POST['ciudadExpedicionDtoAlumno'] == "") {
    $errores [] = "El campo <code>Ciudad de expedicion del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['correoAlumno']) or $_POST['correoAlumno'] == "") {
    $errores [] = "El campo <code>Correo actual del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['confirmarCorreoAlumno']) or $_POST['confirmarCorreoAlumno'] == "") {
    $errores [] = "El campo <code>Confirmar correo alumno del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['gradoAlumno']) or $_POST['gradoAlumno'] == "") {
    $errores [] = "El campo <code>Grado del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['comunaAlumno']) or $_POST['comunaAlumno'] == "") {
    $errores [] = "El campo <code>Comuna del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['direccionAlumno']) or $_POST['direccionAlumno'] == "") {
    $errores [] = "El campo <code>Direccion del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['barrioAlumno']) or $_POST['barrioAlumno'] == "") {
    $errores [] = "El campo <code>Barrio del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['telefonoAlumno']) or $_POST['telefonoAlumno'] == "") {
    $errores [] = "El campo <code>Telefono del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['cantidadHermanoAlumno']) or $_POST['cantidadHermanoAlumno'] == "") {
    $errores [] = "El campo <code>cantidad de hermanos del alumno</code> no puede quedar vacio";
} 
if(!isset($_POST['discapacidadEstudiante']) or $_POST['discapacidadEstudiante'] == "") {
    $errores [] = "El campo <code>discapacidad del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['terapiaAlumno']) or $_POST['terapiaAlumno'] == "") {
    $errores [] = "El campo <code>terapia del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['condicionMedica']) or $_POST['condicionMedica'] == "") {
    $errores [] = "El campo <code>condicion medica del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['relevanteAlumno']) or $_POST['relevanteAlumno'] == "") {
    $errores [] = "El campo <code>relevante del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['deCuidado']) or $_POST['deCuidado'] == "") {
    $errores [] = "El campo <code>de cuidado del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['tipoSangreAlumno']) or $_POST['tipoSangreAlumno'] == "") {
    $errores [] = "El campo <code>tipo de sangre del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['rhSangreAlumno']) or $_POST['rhSangreAlumno'] == "") {
    $errores [] = "El campo <code>RH sangre del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['epsAlumno']) or $_POST['epsAlumno'] == "") {
    $errores [] = "El campo <code>EPS del alumno</code> no puede quedar vacio"; 
} 
if(!isset($_POST['tipoEscrituraAlumno']) or $_POST['tipoEscrituraAlumno'] == "") {
    $errores [] = "El campo <code>tipo escritura del alumno</code> no puede quedar vacio"; 
} 
        



        /* ============================= VALIDACION DATOS DEL ACUDIENTE MASCULINO =================== */

        


if(!isset($_POST['nombresAcudienteMen']) or $_POST['nombresAcudienteMen'] == ""){
    $errores[] = "El campo <code>Nombre del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['tipoDtoAcudienteMen']) or $_POST['tipoDtoAcudienteMen'] == ""){
    $errores[] = "El campo <code>tipo de documento del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['numeroDocumentoMenAcudienteMen']) or $_POST['numeroDocumentoMenAcudienteMen'] == ""){
    $errores[] = "El campo <code>numero de documento del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['estadoSentimentalAcudienteMen']) or $_POST['estadoSentimentalAcudienteMen'] == ""){
    $errores[] = "El campo <code>estado civil del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['direccionAcudienteMen']) or $_POST['direccionAcudienteMen'] == ""){
    $errores[] = "El campo <code>direccion del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['estratoSocialAcudienteMen']) or $_POST['estratoSocialAcudienteMen'] == ""){
    $errores[] = "El campo <code>estrato social del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['telefonoAcudienteMen']) or $_POST['telefonoAcudienteMen'] == ""){
    $errores[] = "El campo <code>telefono del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['telefonoOficinaAcudienteMen']) or $_POST['telefonoOficinaAcudienteMen'] == ""){
    $errores[] = "El campo <code>telefono oficina del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['numeroCelularAcudienteMen']) or $_POST['numeroCelularAcudienteMen'] == ""){
    $errores[] = "El campo <code>numero de celular del acudiente masculino</code> no puede quedar vacio";
} 

if(!isset($_POST['emailAcudienteMen']) or $_POST['emailAcudienteMen'] == ""){
    $errores[] = "El campo <code>email del acudiente masculino</code> no puede quedar vacio";
} 


if(!isset($_POST['ocupacionalActualAcudienteMen']) or $_POST['ocupacionalActualAcudienteMen'] == ""){
    $errores[] = "El campo <code>ocupacion del acudiente masculino</code> no puede quedar vacio";
} 





        /* ============================= VALIDACION DATOS DEL ACUDIENTE FEMENINO =================== */

if(!isset($_POST['nombresAcudienteFem']) or $_POST['nombresAcudienteFem'] == ""){
    $errores[] = "El campo <code>Nombre del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['tipoDtoAcudienteFem']) or $_POST['tipoDtoAcudienteFem'] == ""){
    $errores[] = "El campo <code>tipo documento del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['numeroDocumentoMenAcudienteFem']) or $_POST['numeroDocumentoMenAcudienteFem'] == ""){
    $errores[] = "El campo <code>numero de documento del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['estadoSentimentalAcudienteFem']) or $_POST['estadoSentimentalAcudienteFem'] == ""){
    $errores[] = "El campo <code>estado civil del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['direccionAcudienteFem']) or $_POST['direccionAcudienteFem'] == ""){
    $errores[] = "El campo <code>direccion del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['estratoSocialAcudienteFem']) or $_POST['estratoSocialAcudienteFem'] == ""){
    $errores[] = "El campo <code>estrato social del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['telefonoAcudienteFem']) or $_POST['telefonoAcudienteFem'] == ""){
    $errores[] = "El campo <code>telefono del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['telefonoOficinaAcudienteFem']) or $_POST['telefonoOficinaAcudienteFem'] == ""){
    $errores[] = "El campo <code>telefono de la oficina del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['numeroCelularAcudienteFem']) or $_POST['numeroCelularAcudienteFem'] == ""){
    $errores[] = "El campo <code>numero de celular del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['emailAcudienteFem']) or $_POST['emailAcudienteFem'] == ""){
    $errores[] = "El campo <code>email del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['empresaTrabajaAcudienteFem']) or $_POST['empresaTrabajaAcudienteFem'] == ""){
    $errores[] = "El campo <code>empresa donde trabaja del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['profesionAcudienteFem']) or $_POST['profesionAcudienteFem'] == ""){
    $errores[] = "El campo <code>profesion del acudiente femenino</code> no puede vacio";
}

if(!isset($_POST['ocupacionalActualAcudienteFem']) or $_POST['ocupacionalActualAcudienteFem'] == ""){
    $errores[] = "El campo <code>ocupacion del acudiente femenino</code> no puede vacio";
}





        /* ============================= VALIDACION DATOS DEL ADULTO RESPONSABLE =================== */
 

if(!isset($_POST['nombresAdultoResponsable']) or $_POST['nombresAdultoResponsable'] == ""){
    $errores[] = "El campo <code>nombre del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['tipoDocumentoAdultoResponsable']) or $_POST['tipoDocumentoAdultoResponsable'] == ""){
    $errores[] = "El campo <code>tipo documento del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['numeroDocumentoAdultoResponsable']) or $_POST['numeroDocumentoAdultoResponsable'] == ""){
    $errores[] = "El campo <code>numero de documento del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['estadoSentimentalAdultoResponsable']) or $_POST['estadoSentimentalAdultoResponsable'] == ""){
    $errores[] = "El campo <code>estado civil del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['direccionResponsable']) or $_POST['direccionResponsable'] == ""){
    $errores[] = "El campo <code>direccion del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['estratoSocialAdultoResponsable']) or $_POST['estratoSocialAdultoResponsable'] == ""){
    $errores[] = "El campo <code>estrato social del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['telefonoAdultoResponsable']) or $_POST['telefonoAdultoResponsable'] == ""){
    $errores[] = "El campo <code>telefono residencia del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['telefonoOficinaAdultoResponsable']) or $_POST['telefonoOficinaAdultoResponsable'] == ""){
    $errores[] = "El campo <code>telefono oficina del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['numeroCelularAdultoResponsable']) or $_POST['numeroCelularAdultoResponsable'] == ""){
    $errores[] = "El campo <code>numero de celular del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['emailAdultoResponsable']) or $_POST['emailAdultoResponsable'] == ""){
    $errores[] = "El campo <code>email del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['profesionAdultoResponsable']) or $_POST['profesionAdultoResponsable'] == ""){
    $errores[] = "El campo <code>profesion del adulto responsable</code> no puede quedar vacio.";
}
if(!isset($_POST['ocupacionalActualAdultoResponsable']) or $_POST['ocupacionalActualAdultoResponsable'] == ""){
    $errores[] = "El campo <code>ocupacion del adulto responsable</code> no puede quedar vacio.";
}



        /* ============================= VALIDACION ADJUNTAR DOCUMENTACION ALUMNO =================== */



if(!isset($_FILES['registroCivilFile']) or  $_FILES['registroCivilFile'] == ""){
    $errores[] = "El archivo <code>Registro civil</code> es importante, por favor subelo.";
}
if(!isset($_FILES['tarjetaIdentidadFile']) or  $_FILES['tarjetaIdentidadFile'] == ""){
    $errores[] = "El archivo <code>Tarjeta de identidad</code> es importante, por favor subelo.";
}
if(!isset($_FILES['carnetVacunacionFile']) or  $_FILES['carnetVacunacionFile'] == ""){
    $errores[] = "El archivo <code>carnet vacunacion</code> es importante, por favor subelo.";
}
if(!isset($_FILES['carnetEPSFile']) or  $_FILES['carnetEPSFile'] == ""){
    $errores[] = "El archivo <code>carnet EPS</code> es importante, por favor subelo.";
}
if(!isset($_FILES['certificadoVisualFile']) or  $_FILES['certificadoVisualFile'] == ""){
    $errores[] = "El archivo <code>Certificado visual</code> es importante, por favor subelo.";
}
if(!isset($_FILES['certificadoAuditivoFile']) or  $_FILES['certificadoAuditivoFile'] == ""){
    $errores[] = "El archivo <code>Certificado auditivo</code> es importante, por favor subelo.";
}






        /* ============================= VALIDACION ADJUNTAR DOCUMENTACION =================== */



if(!isset($_FILES['cedulaPadre150File']) or $_FILES['cedulaPadre150File'] == ""){
    $errores[] = "El archivo <code>cedula padre</code> es importante, subelo.";
} 
if(!isset($_FILES['cedulaMadre150File']) or $_FILES['cedulaMadre150File'] == ""){
    $errores[] = "El archivo <code>cedula madre</code> es importante, subelo.";
} 

if(!isset($_FILES['reciboPublicoFile']) or $_FILES['reciboPublicoFile'] == ""){
    $errores[] = "El archivo <code>recibo publico</code> es importante, subelo.";
}  




        /* ============================= VALIDACION SI ERES INDEPENDIENTE =================== */

 

        if(isset($_POST['seleccionIndependiente']) AND $_POST['seleccionIndependiente'] == "1"){
                if(!isset($_FILES['declaracionRentaFile']) or $_FILES['declaracionRentaFile'] == ""){
                    $errores[] = "El archivo <code>declaracion renta</code> son importantes, verifica y subelos";
                }
                if(!isset($_FILES['certificadoIngresoAvaladoFile']) or $_FILES['certificadoIngresoAvaladoFile'] == ""){
                    $errores[] = "El archivo <code>certificado avalado por el contador</code> son importantes, verifica y subelos";
                }
                if(!isset($_FILES['tarjetaProfesionalContadorFile']) or $_FILES['tarjetaProfesionalContadorFile'] == ""){
                    $errores[] = "El archivo <code>tarjeta profesional del contador</code> son importantes, verifica y subelos";
                }
                if(!isset($_FILES['antecedentesDisciplinariosContadorFile']) or $_FILES['antecedentesDisciplinariosContadorFile'] == ""){
                    $errores[] = "El archivo <code>antecedentes disciplinario</code> son importantes, verifica y subelos";
                }
        }else{
            
        }

        



        /* Termino Validaciones */
        $objMatricula = new matriculaModel();
        
        if (count($errores) > 0) {
            setErrores($errores);
        }else{

             /* ================= INSERCION DOCUMENTOS ============================== */
            

            $regsitro_civil = $_FILES['registroCivilFile']['name'];
            $tarjeta_indentidad = $_FILES['tarjetaIdentidadFile']['name'];
            $carnet_vacunacion = $_FILES['carnetVacunacionFile']['name'];
            $carnet_eps = $_FILES['carnetEPSFile']['name'];

            if(!isset($_FILES['certificadoMedicoFile']['name']) or $_FILES['certificadoMedicoFile']['name'] == ""){
                                $certificado_medico = "No registra";
            }else{
                $certificado_medico = $_FILES['certificadoMedicoFile']['name'];
            }
            
            

            $certificado_visul = $_FILES['certificadoVisualFile']['name'];
            $certificado_auditivo = $_FILES['certificadoAuditivoFile']['name'];

            if(!isset($_FILES['cartaLaboralPadreFile']['name']) or $_FILES['cartaLaboralPadreFile']['name'] == ""){
                $carta_laboral_padre = "No registra";
            }else{
                $carta_laboral_padre = $_FILES['cartaLaboralPadreFile']['name'];
            }

            if(!isset($_FILES['cartaLaboralMadreFile']) or $_FILES['cartaLaboralMadreFile'] == ""){
                $carta_laboral_madre = "No registra";
            }else{
                $carta_laboral_madre = $_FILES['cartaLaboralMadreFile']['name'];
            }

            $cedula_padre = $_FILES['cedulaPadre150File']['name'];
            $cedula_madre = $_FILES['cedulaMadre150File']['name'];
            $recibo_publico = $_FILES['reciboPublicoFile']['name'];

            

            $sql_documentos = "INSERT INTO documentacion (
                                    registro_civil,
                                    tarjeta_identidad,
                                    carnet_vacunacion,
                                    carnet_eps,
                                    certificado_medico,
                                    certificado_visual,
                                    certificado_auditivo,
                                    cedula_padre,
                                    cedula_madre,
                                    carta_laboral_padre,
                                    carta_laboral_madre,
                                    recibo_publico,
                                    estado_documento) 
                                    VALUES(
                                    '$regsitro_civil',
                                    '$tarjeta_indentidad',
                                    '$carnet_vacunacion',
                                    '$carnet_eps',
                                    '$certificado_medico',
                                    '$certificado_visul',
                                    '$certificado_auditivo',
                                    '$cedula_padre',
                                    '$cedula_madre',
                                    '$carta_laboral_padre',
                                    '$carta_laboral_madre',
                                    '$recibo_publico',
                                    'activo')";
            $insercion_documento = $objMatricula->insertar($sql_documentos);


                $sql = "SELECT * FROM documentacion ORDER BY id_documento ASC";
                $consulta = $objMatricula->find($sql);
                $id_documento_alumno = $consulta[0];



            /* ==================================== INDEPENDIENTE ====================================*/
               if($_POST['seleccionIndependiente'] == "1"){

                $declaracion_renta = $_FILES['declaracionRentaFile']['name'];
                $certificado_ingreso_contador = $_FILES['certificadoIngresoAvaladoFile']['name'];
                $tarjeta_profesional_contador = $_FILES['tarjetaProfesionalContadorFile']['name'];
                $antecedentes_disciplinarios = $_FILES['antecedentesDisciplinariosContadorFile']['name'];
          
                $sql_formulario_independiente = "INSERT INTO documentacion_independiente (
                                            declaracion_renta, 
                                            certificado_avalado_contador, 
                                            tarjeta_profesional_contador,
                                            antecedentes_disciplinarios,
                                            estado_documentacion_independiente) VALUES(
                                            '$declaracion_renta',
                                            '$certificado_ingreso_contador',
                                            '$tarjeta_profesional_contador',
                                            '$antecedentes_disciplinarios',
                                            'activo')";
            $insercion_independiente = $objMatricula->insertar($sql_formulario_independiente); 

            $sql = "SELECT * FROM documentacion_independiente ORDER BY id_documentacion_independiente ASC";
                $consulta_independiente = $objMatricula->find($sql);

                $id_documentacion_independiente = $consulta_independiente[0];

            }else{
                $id_documentacion_independiente = 0;
            }

            /* ============================================================================================================ FIN INSERCION DOCUMENTO  ============================================================================================================  ============================================================================================================ */ 


/* ========================= INGRESO ALUMNO  ===================== */
$numero_documento_alumno = $_POST['numeroDocumentoAlumno'];
$carpeta_foto = getDocumentRoot() . "/web/documentos/alumnos/" .$numero_documento_alumno;


            $tipo_documento_alumno = $_POST['tipoDocumentoAlumno'];
            $foto_alumno = $_FILES['fotoAlumnoDiv1']['name'];

            $TMP_NAME_foto_alumno = $_FILES['fotoAlumnoDiv1']['tmp_name'];
            $ruta_foto_alumno = $carpeta_foto."/foto_alumno-".$foto_alumno;

            if ($carpeta_foto <> "") {
                if (move_uploaded_file($TMP_NAME_foto_alumno, $foto_alumno)) {
                }
            } else {
                
            }


            $nombre_alumno = $_POST['nombreAlumno'];
            if(!isset($_POST['segundoNombreAlumno']) or $_POST['segundoNombreAlumno'] == ""){
                $segundo_nombre = "No registra";
            }else{
                $segundo_nombre = $_POST['segundoNombreAlumno'];
            }


            $primer_apellido_alumno = $_POST['apellidoAlumno'];
            if(!isset($_POST['segundoApellidoAlumno']) or $_POST['segundoApellidoAlumno'] == ""){
                $segundo_apellido_alumno = "No registra";
            }else{
                $segundo_apellido_alumno = $_POST['segundoApellidoAlumno'];
            }

            $fecha_nacimiento_alumno = $_POST['fecha_nacimiento'];
            $ciudad_expedicion_alumno = $_POST['ciudadExpedicionDtoAlumno'];
            $correo_alumno = $_POST['correoAlumno'];
            $grado_alumno = $_POST['gradoAlumno'];

            if (!isset($_POST['ciudadResidenciaAlumno']) or $_POST['ciudadResidenciaAlumno'] == "") {
                $ciudad_residencia_alumno = "No registra";
            }else{
                $ciudad_residencia_alumno = $_POST['ciudadResidenciaAlumno'];
            }


            $comuna_alumno = $_POST['comunaAlumno'];
            $direccion_alumno = $_POST['direccionAlumno'];
            $barrio_alumno = $_POST['barrioAlumno'];
            $telefono_alumno = $_POST['telefonoAlumno'];
            $cantidad_alumno = $_POST['cantidadHermanoAlumno'];
            $permanece_estudiante_tarde = $_POST['permaneceEstudianteTarde'];
            $discapacidad_alumno = $_POST['discapacidadEstudiante'];
            $grupos_etnicos_alumno = $_POST['grupoEtnico'];
            $terapia_alumno = $_POST['terapiaAlumno'];
            $condicion_medica = $_POST['condicionMedica'];
            $relevante_alumno = $_POST['relevanteAlumno'];
            $de_cuidado_alumno = $_POST['deCuidado'];
            $actualmente_terapia = $_POST['terapiaActualmenteAlumno'];

            if (!isset($_POST['cualTerapiaAlumno']) or $_POST['cualTerapiaAlumno'] == "") {
                $cual_terapia_alumno = "No registra";
            }else{
                $cual_terapia_alumno = $_POST['cualTerapiaAlumno'];
            }

            $tipo_sangre_alumno = $_POST['tipoSangreAlumno'];
            $rh_sangre_alumno = $_POST['rhSangreAlumno'];
            $eps_alumno = $_POST['epsAlumno'];

            if (!isset($_POST['cualEPSAlumno']) or $_POST['cualEPSAlumno'] == "") {
                $cual_eps_alumno = "No registra";
            }else{
                $cual_eps_alumno = $_POST['cualEPSAlumno'];
            }

            $tipo_escritura_alumno = $_POST['tipoEscrituraAlumno'];
            $ano_lectivo = $_POST['lectivo'];
            $id_acudiente_masculino_alumno = $_POST['numeroDocumentoMenAcudienteMen'];
            $id_acudiente_femenino_alumno = $_POST['numeroDocumentoMenAcudienteFem'];
            $id_adulto_responsable_alumno = $_POST['numeroDocumentoAdultoResponsable'];
            $id_documentacion_alumno = $id_documento_alumno;
            
            
            


            $insercionAlumno = "INSERT INTO datos_alumno (id_alumno, tipo_documento,  foto_alumno,  primer_nombre,  segundo_nombre,  primer_apellido,  segundo_apellido,  fecha_nacimiento,  ciudad_expedicion_documento,  correo,  grado_que_ingreso,  ciudad_residencia,  comuna_localidad,  direccion_residencia,  barrio_actual,  telefono_residencia_actual,  nro_hermanos,  estudiante_permanece_en_la_tarde,  presenta_discapacidad,  pertenece_grupos_etnicos,  ha_recibido_terapia_de,  condicion_medica,  condicion_medica_relevante,  condicion_medica_cuidado,  actualmente_terapia,  cual_terapia,  tipo_sangre,  rh_sangre,  eps,  cual_eps,  tipo_escritura,  ano_lectivo,  id_acudiente_masculino, id_acudiente_femenino,  id_adulto_responsable,  id_documentos,  estado) VALUES('$numero_documento_alumno', '$tipo_documento_alumno','$foto_alumno', '$nombre_alumno', '$segundo_nombre', '$primer_apellido_alumno', '$segundo_apellido_alumno', '$fecha_nacimiento_alumno', '$ciudad_expedicion_alumno', '$correo_alumno', '$grado_alumno', '$ciudad_residencia_alumno', '$comuna_alumno', '$direccion_alumno', '$barrio_alumno', '$telefono_alumno', '$cantidad_alumno', '$permanece_estudiante_tarde', '$discapacidad_alumno', '$grupos_etnicos_alumno', '$terapia_alumno', '$condicion_medica', '$relevante_alumno', '$de_cuidado_alumno', '$actualmente_terapia', '$cual_terapia_alumno', '$tipo_sangre_alumno', '$rh_sangre_alumno', '$eps_alumno', '$cual_eps_alumno', '$tipo_escritura_alumno', '$ano_lectivo',  '$id_acudiente_masculino_alumno','$id_acudiente_femenino_alumno', '$id_adulto_responsable_alumno', '$id_documentacion_alumno', 'activo')";
            $insercion = $objMatricula->insertar($insercionAlumno);



            /* =================== INGRESO  DATOS DEL ACUDIENTE MASCULINO ============== */
$id_persona_masculina = $_POST['numeroDocumentoMenAcudienteMen'];
$tipo_documento_masculino = $_POST['tipoDtoAcudienteMen'];
$nombres_acudiente_masculino = $_POST['nombresAcudienteMen'];
$estado_civil_masculino = $_POST['estadoSentimentalAcudienteMen'];
$direccion_residencia_masculino = $_POST['direccionAcudienteMen'];
$estrato_social_masculino = $_POST['estratoSocialAcudienteMen'];
$telefono_residencia_masculino = $_POST['telefonoAcudienteMen'];
$telefono_oficina_masculino = $_POST['telefonoOficinaAcudienteMen'];
$numero_celular_masculino = $_POST['numeroCelularAcudienteMen'];
$correo_persona_masculino = $_POST['emailAcudienteMen'];

if(!isset($_POST['empresaTrabajaAcudienteMen']) or $_POST['empresaTrabajaAcudienteMen'] == ""){
    $empresa_donde_trabaja_masculino = "No registra";
}else{
    $empresa_donde_trabaja_masculino = $_POST['empresaTrabajaAcudienteMen'];
}

if(!isset($_POST['profesionAcudienteMen']) or $_POST['profesionAcudienteMen'] == ""){
    $profesion_masculino = "No registra";
}else{
    $profesion_masculino = $_POST['profesionAcudienteMen'];
}

$ocupacion_actual_masculino = $_POST['ocupacionalActualAcudienteMen'];

            $sql_acudiente = "INSERT INTO datos_acudiente_masculino ( id_persona_masculina, tipo_documento, nombres_apellidos, estado_civil, direccion_residencia, estrato_social, telefono_residencia, telefono_oficina_actual, numero_celular, correo_persona, empresa_donde_trabaja, profesion_persona, ocupacion_actual, id_documentacion_independiente, estado) VALUES( '$id_persona_masculina', '$tipo_documento_masculino', '$nombres_acudiente_masculino', '$estado_civil_masculino', '$direccion_residencia_masculino', '$estrato_social_masculino', '$telefono_residencia_masculino', '$telefono_oficina_masculino', '$numero_celular_masculino', '$correo_persona_masculino', '$empresa_donde_trabaja_masculino', '$profesion_masculino', '$ocupacion_actual_masculino', '$id_documentacion_independiente', 'activo')";
            $insercion_acudiente = $objMatricula->insertar($sql_acudiente);




            /* =================== INGRESO  DATOS DEL ACUDIENTE FEMENINO ============== */

            $id_persona_femenino  = $_POST['numeroDocumentoMenAcudienteFem'];
            $tipo_documento_femenino  = $_POST['tipoDtoAcudienteFem'];
            $nombres_acudiente_femenino  = $_POST['nombresAcudienteFem'];
            $estado_civil_femenino  = $_POST['estadoSentimentalAcudienteFem'];
            $direccion_residencia_femenino  = $_POST['direccionAcudienteFem'];
            $estrato_social_femenino = $_POST['estratoSocialAcudienteFem'];
            $telefono_residencia_femenino  = $_POST['telefonoAcudienteFem'];
            $telefono_oficina_femenino  = $_POST['telefonoOficinaAcudienteFem'];
            $numero_celular_femenino  = $_POST['numeroCelularAcudienteFem'];
            $correo_persona_femenino  = $_POST['emailAcudienteFem'];

            if(!isset($_POST['empresaTrabajaAcudienteFem']) or $_POST['empresaTrabajaAcudienteFem'] == ""){
                $empresa_donde_trabaja_femenino  = "No registra";
            }else{
                $empresa_donde_trabaja_femenino  = $_POST['empresaTrabajaAcudienteFem'];
            }

            if(!isset($_POST['profesionAcudienteFem']) or $_POST['profesionAcudienteFem'] == ""){
                $profesion_femenino  = "No registra";
            }else{
                $profesion_femenino  = $_POST['profesionAcudienteFem'];
            }

            $ocupacion_actual_femenino  = $_POST['ocupacionalActualAcudienteFem'];

            $sql_acudiente_femenino = "INSERT INTO datos_acudiente_femenino (
                                    id_persona_femenino,
                                    tipo_documento_femenino,
                                    nombres_apellidos_femenino,
                                    estado_civil_femenino,
                                    direccion_residencia_femenino,
                                    estrato_social_femenino,
                                    telefono_residencia_femenino,
                                    telefono_oficina_actual_femenino,
                                    numero_celular_femenino,
                                    correo_persona_femenino,
                                    empresa_donde_trabaja_femenino,
                                    profesion_persona_femenino,
                                    ocupacion_actual_femenino,
                                    id_documentacion_independiente_femenino,
                                    estado_femenino) VALUES(
                                    '$id_persona_femenino',
                                    '$tipo_documento_femenino',
                                    '$nombres_acudiente_femenino',
                                    '$estado_civil_femenino',
                                    '$direccion_residencia_femenino',
                                    '$estrato_social_femenino',
                                    '$telefono_residencia_femenino',
                                    '$telefono_oficina_femenino',
                                    '$numero_celular_femenino',
                                    '$correo_persona_femenino',
                                    '$empresa_donde_trabaja_femenino',
                                    '$profesion_femenino',
                                    '$ocupacion_actual_femenino',
                                    '$id_documentacion_independiente',
                                    'activo')";
            $insercion_acudiente_femenino = $objMatricula->insertar($sql_acudiente_femenino);





            /* =================== INGRESO  DATOS DEL ADULTO RESPONSABLE ============== */

            $numero_documento_responsable = $_POST['numeroDocumentoAdultoResponsable'];
            $tipo_documento_responsable = $_POST['tipoDocumentoAdultoResponsable'];
            $nombres_responsable = $_POST['nombresAdultoResponsable'];
            $estado_civil_responsable = $_POST['estadoSentimentalAdultoResponsable'];
            $estrato_social_responsable = $_POST['estratoSocialAdultoResponsable'];
            $direccion_residencia_responsable = $_POST['direccionResponsable'];
            $telefono_residencia_actual_responsable = $_POST['telefonoAdultoResponsable'];
            $numero_oficina_actual_responsable = $_POST['telefonoOficinaAdultoResponsable'];
            $numero_celular_responsable = $_POST['numeroCelularAdultoResponsable'];
            $correo_actual_responsable = $_POST['emailAdultoResponsable'];


             if(!isset($_POST['empresaDondeTrabajaAdultoResponsable']) or $_POST['empresaDondeTrabajaAdultoResponsable'] == ""){
                $empresa_donde_trabaja_responsable  = "No registra";
            }else{
                $empresa_donde_trabaja_responsable  = $_POST['empresaDondeTrabajaAdultoResponsable'];
            }

            if(!isset($_POST['profesionAdultoResponsable']) or $_POST['profesionAdultoResponsable'] == ""){
                $profesion_responsable  = "No registra";
            }else{
                $profesion_responsable  = $_POST['profesionAdultoResponsable'];
            }

            $ocupacion_actual_responsable = $_POST['ocupacionalActualAdultoResponsable'];



            $sql_adulto = $sql_acudiente = "INSERT INTO datos_adulto_responsable (
                                    id_persona,
                                    tipo_documento,
                                    nombres_apellidos,
                                    estado_civil,
                                    direccion_residencia,
                                    estrato_social,
                                    telefono_residencia,
                                    telefono_oficina_actual,
                                    numero_celular,
                                    correo_persona,
                                    empresa_donde_trabaja,
                                    profesion_persona,
                                    ocupacion_actual,
                                    estado) VALUES(
                                     $numero_documento_responsable,
                                    '$tipo_documento_responsable',
                                    '$nombres_responsable',
                                    '$estado_civil_responsable',
                                    '$direccion_residencia_responsable',
                                    '$estrato_social_responsable',
                                    '$telefono_residencia_actual_responsable',
                                    '$numero_oficina_actual_responsable',
                                    '$numero_celular_responsable',
                                    '$correo_actual_responsable',
                                    '$empresa_donde_trabaja_responsable',
                                    '$profesion_responsable',
                                    '$ocupacion_actual_responsable',
                                    'activo')";

            $insercion_adulto = $objMatricula->insertar($sql_adulto);


            $sql_formulario = "INSERT INTO formulario_renovacion (id_alumno, estado_fr) VALUES($numero_documento_alumno, 'activo')";
            $insercion_adulto = $objMatricula->insertar($sql_formulario);  


            /* =================== ADJUNTAR DOCUMENTACI&Oacute;N ALUMNO / ADJUNTAR DOCUMENTACION ============== */

            $carpeta = getDocumentRoot() . "/web/documentos/alumnos/" .$numero_documento_alumno;
            
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }



            
            $registroCivilFile = $_FILES['registroCivilFile']['name'];
            $TMP_NAME_registroCivilFile = $_FILES['registroCivilFile']['tmp_name'];
            $ruta_registroCivilFile = $carpeta."/registro_civil-".$registroCivilFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_registroCivilFile, $ruta_registroCivilFile)) {
                }
            } else {
                
            }
            



            $tarjetaIdentidadFile = $_FILES['tarjetaIdentidadFile']['name'];
            $TMP_NAME_tarjetaIdentidadFile = $_FILES['tarjetaIdentidadFile']['tmp_name'];
            $ruta_tarjetaIdentidadFile = $carpeta."/tarjeta_identidad-".$tarjetaIdentidadFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_tarjetaIdentidadFile, $ruta_tarjetaIdentidadFile)) {
                }
            } else {
                
            }

            
            $carnetVacunacionFile = $_FILES['carnetVacunacionFile']['name'];
            $TMP_NAME_carnetVacunacionFile = $_FILES['carnetVacunacionFile']['tmp_name'];
            $ruta_carnetVacunacionFile = $carpeta."/carnet_vacunacion-".$carnetVacunacionFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_carnetVacunacionFile, $ruta_carnetVacunacionFile)) {
                }
            } else {
                
            }


            
            $carnetEPSFile = $_FILES['carnetEPSFile']['name'];
            $TMP_NAME_carnetEPSFile = $_FILES['carnetEPSFile']['tmp_name'];
            $ruta_carnetEPSFile = $carpeta."/carnet_EPS-".$carnetEPSFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_carnetEPSFile, $ruta_carnetEPSFile)) {
                }
            } else {
                
            }
            
            if(isset($_FILES['certificadoMedicoFile']['name'])){

                $certificadoMedicoFile = $_FILES['certificadoMedicoFile']['name'];
                $TMP_NAME_certificadoMedicoFile = $_FILES['certificadoMedicoFile']['tmp_name'];
                $ruta_certificadoMedicoFile = $carpeta."/certificado_medico-".$certificadoMedicoFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_certificadoMedicoFile, $ruta_certificadoMedicoFile)) {
                    }
                } else {
                    
                }

            }else{

            }


            $certificadoVisualFile = $_FILES['certificadoVisualFile']['name'];
            $TMP_NAME_certificadoVisualFile = $_FILES['certificadoVisualFile']['tmp_name'];
            $ruta_certificadoVisualFile = $carpeta."/certificado_visual-".$certificadoVisualFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_certificadoVisualFile, $ruta_certificadoVisualFile)) {
                }
            } else {
                
            }
            
            $certificadoAuditivoFile = $_FILES['certificadoAuditivoFile']['name'];
            $TMP_NAME_certificadoAuditivoFile = $_FILES['certificadoAuditivoFile']['tmp_name'];
            $ruta_certificadoAuditivoFile = $carpeta."/certificado_auditivo-".$certificadoAuditivoFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_certificadoAuditivoFile, $ruta_certificadoAuditivoFile)) {
                }
            } else {
                
            }



            /* =========== ADJUNTAR DOCUMENTACION ALUMNO =================== */


            $cedulaPadre150File = $_FILES['cedulaPadre150File']['name'];
            $TMP_NAME_cedulaPadre150File = $_FILES['cedulaPadre150File']['tmp_name'];
            $ruta_cedulaPadre150File = $carpeta."/cedula_padre-".$cedulaPadre150File;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_cedulaPadre150File, $ruta_cedulaPadre150File)) {
                }
            } else {
                
            }


            $cedulaMadre150File = $_FILES['cedulaMadre150File']['name'];
            $TMP_NAME_cedulaMadre150File = $_FILES['cedulaMadre150File']['tmp_name'];
            $ruta_cedulaMadre150File = $carpeta."/cedula_madre-".$cedulaMadre150File;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_cedulaMadre150File, $ruta_cedulaMadre150File)) {
                }
            } else {
                
            }

            if(isset($_FILES['cartaLaboralPadreFile']['name'])){            
                
                $cartaLaboralPadreFile = $_FILES['cartaLaboralPadreFile']['name'];
                $TMP_NAME_cartaLaboralPadreFile = $_FILES['cartaLaboralPadreFile']['tmp_name'];
                $ruta_cartaLaboralPadreFile = $carpeta."/carta_Laboral_Padre-".$cartaLaboralPadreFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_cartaLaboralPadreFile, $ruta_cartaLaboralPadreFile)) {
                    }
                } else {
                    
                }

            }else{

            }


            if(isset($_FILES['cartaLaboralMadreFile']['name'])){
                $cartaLaboralMadreFile = $_FILES['cartaLaboralMadreFile']['name'];
                $TMP_NAME_cartaLaboralMadreFile = $_FILES['cartaLaboralMadreFile']['tmp_name'];
                $ruta_cartaLaboralMadreFile = $carpeta."/carta_Laboral_Madre-".$cartaLaboralMadreFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_cartaLaboralMadreFile, $ruta_cartaLaboralMadreFile)) {
                    }
                } else {
                    
                }
            }else{

            }

            
            $reciboPublicoFile = $_FILES['reciboPublicoFile']['name'];
            $TMP_NAME_reciboPublicoFile = $_FILES['reciboPublicoFile']['tmp_name'];
            $ruta_reciboPublicoFile = $carpeta."/servicios_publicos-".$reciboPublicoFile;

            if ($carpeta <> "") {
                if (move_uploaded_file($TMP_NAME_reciboPublicoFile, $ruta_reciboPublicoFile)) {

                }
            } else {
                
            }


        if($_POST['seleccionIndependiente'] == "1"){
             $declaracionRentaFile = $_FILES['declaracionRentaFile']['name'];
                $TMP_NAME_declaracion_renta_File = $_FILES['declaracionRentaFile']['tmp_name'];
                $ruta_declaracion_renta = $carpeta."/declaracion_renta-".$reciboPublicoFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_declaracion_renta_File, $ruta_declaracion_renta)) {

                    }
                } else {
                    
                }


                

                $certificadoIngresoAvaladoFile = $_FILES['certificadoIngresoAvaladoFile']['name'];
                $TMP_NAME_certificadoIngresoAvaladoFile = $_FILES['certificadoIngresoAvaladoFile']['tmp_name'];
                $ruta_certificadoIngresoAvaladoFile = $carpeta."/certificado_ingreso_avalado_contador-".$certificadoIngresoAvaladoFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_certificadoIngresoAvaladoFile, $ruta_certificadoIngresoAvaladoFile)) {

                    }
                } else {
                    
                }


                $tarjetaProfesionalContadorFile = $_FILES['tarjetaProfesionalContadorFile']['name'];
                $TMP_NAME_tarjetaProfesionalContadorFile = $_FILES['tarjetaProfesionalContadorFile']['tmp_name'];
                $ruta_tarjetaProfesionalContadorFile = $carpeta."/tarjeta_profesional-".$tarjetaProfesionalContadorFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_tarjetaProfesionalContadorFile, $ruta_tarjetaProfesionalContadorFile)) {

                    }
                } else {
                    
                }



                $antecedentesDisciplinariosContadorFile = $_FILES['antecedentesDisciplinariosContadorFile']['name'];
                $TMP_NAME_antecedentesDisciplinariosContadorFile = $_FILES['antecedentesDisciplinariosContadorFile']['tmp_name'];
                $ruta_antecedentesDisciplinariosContadorFile = $carpeta."/antecedentes_disciplinarios-".$antecedentesDisciplinariosContadorFile;

                if ($carpeta <> "") {
                    if (move_uploaded_file($TMP_NAME_antecedentesDisciplinariosContadorFile, $ruta_antecedentesDisciplinariosContadorFile)) {
                        }
                } else {
                    
                }
        }else{

        }


        
        }
        $objMatricula->cerrar();

        echo getRespuestaAccion('listar');
		
	}

    function solicitud(){
        

        /* Empieza Validaciones del Formulario */
        $errores = array();
        $patronLetras = "/^[a-zA-Z_áéíóúñ\s]*$/";
        $patronLetrasNumeros = "/^[0-9a-zA-Z]+$/";
    

        /* ================================================================================= VALIDACION DATOS DEL ALUMNO ======================================================================================== */

        if(!isset($_POST['primer_nombre_alumno']) or $_POST['primer_nombre_alumno'] == ""){
            $errores[] = "El campo <code>Primer nombre del alumno </code> no puede quedar vacio, verificalo.";
        }
 
        if(!isset($_POST['primero_apellido_alumno']) or $_POST['primero_apellido_alumno'] == ""){
            $errores[] = "El campo <code>primer apllido del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['lugar_de_nacimiento_alumno']) or $_POST['lugar_de_nacimiento_alumno'] == ""){
            $errores[] = "El campo <code>lugar de nacimiento del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['fecha_de_nacimiento_alumno']) or $_POST['fecha_de_nacimiento_alumno'] == ""){
            $errores[] = "El campo <code> fecha de nacimiento del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['direccion_residencia_alumno']) or $_POST['direccion_residencia_alumno'] == ""){
            $errores[] = "El campo <code> direccion del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['barrio_actual_alumno']) or $_POST['barrio_actual_alumno'] == ""){
            $errores[] = "El campo <code> barrio actual del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['comuna_alumno']) or $_POST['comuna_alumno'] == ""){
            $errores[] = "El campo <code> comuna del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['estrato_social_alumno']) or $_POST['estrato_social_alumno'] == ""){
            $errores[] = "El campo <code> etsrato social del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['tipo_documento_alumno']) or $_POST['tipo_documento_alumno'] == ""){
            $errores[] = "El campo <code> tipo de documento del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['numero_de_documento_alumno']) or $_POST['numero_de_documento_alumno'] == ""){
            $errores[] = "El campo <code> numero de documento del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['ciudad_expedicion_documento_alumno']) or $_POST['ciudad_expedicion_documento_alumno'] == ""){
            $errores[] = "El campo <code>  ciudad de expedicion del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['tel_residencia_alumno']) or $_POST['tel_residencia_alumno'] == ""){
            $errores[] = "El campo <code> telefono de residencia del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['celular_alumno']) or $_POST['celular_alumno'] == ""){
            $errores[] = "El campo <code> celular del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['correo_alumno']) or $_POST['correo_alumno'] == ""){
            $errores[] = "El campo <code> correo del alumno </code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['vive_con_parentesco_alumno']) or $_POST['vive_con_parentesco_alumno'] == ""){
            $errores[] = "El campo <code><b> 'Aspirante vive con' del alumno </b></code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['grado_que_ingreso_alumno']) or $_POST['grado_que_ingreso_alumno'] == ""){
            $errores[] = "El campo <code><b>grado que ingreso del alumno</b></code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['institucion_educativa_proviene_alumno']) or $_POST['institucion_educativa_proviene_alumno'] == ""){
            $errores[] = "El campo <code><b> Institucion educativa donde proviene del alumno </b></code> no puede quedar vacio, verificalo.";
        } 

        if(!isset($_POST['motivo_retiro_alumno']) or $_POST['motivo_retiro_alumno'] == ""){
            $errores[] = "El campo <code><b>Motivo del retiro del alumno </b></code> no puede quedar vacio, verificalo.";
        } 


        if(!isset($_POST['motivacion_shalom_alumno']) or $_POST['motivacion_shalom_alumno'] == ""){
            $errores[] = "El campo <code>  del alumno </code> no puede quedar vacio, verificalo.";
        } 

        /* ============================================================================================= FIN VALIDACION DATOS DEL ALUMNO ==================================================================================================== */






        /* ================================================================================================================= PROCEDENCIA ACADÉMICA DE LOS ÚLTIMO AÑOS
         ================================================================================================================= */


        
        if(!isset($_POST['terapia_alumno']) or $_POST['terapia_alumno'] == ""){
            $errores[] = "El campo <code><b>terapia_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['cual_terapia_alumno']) or $_POST['cual_terapia_alumno'] == ""){
            $errores[] = "El campo <code><b>cual_terapia_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['grupo_etnico_alumno']) or $_POST['grupo_etnico_alumno'] == ""){
            $errores[] = "El campo <code><b>grupo_etnico_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['actividades_extracurriculares_alumno']) or $_POST['actividades_extracurriculares_alumno'] == ""){
            $errores[] = "El campo <code><b>actividades_extracurriculares_alumno</b></code> no puede quedar vacio";
        }

        if(!isset($_POST['otras_actividades_extracurriculares_alumno']) or $_POST['otras_actividades_extracurriculares_alumno'] == ""){
            $errores[] = "El campo <code><b>otras_actividades_extracurriculares_alumno</b></code> no puede quedar vacio";
        }

        if(!isset($_POST['eps_alumno']) or $_POST['eps_alumno'] == ""){
            $errores[] = "El campo <code><b>eps_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['enfermedades_alumno']) or $_POST['enfermedades_alumno'] == ""){
            $errores[] = "El campo <code><b>enfermedades_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['tipo_sangre_alumno']) or $_POST['tipo_sangre_alumno'] == ""){
            $errores[] = "El campo <code><b>tipo_sangre_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['rh_sangre_alumno']) or $_POST['rh_sangre_alumno'] == ""){
            $errores[] = "El campo <code><b>rh_sangre_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['emergencia_llamar_alumno']) or $_POST['emergencia_llamar_alumno'] == ""){
            $errores[] = "El campo <code><b>emergencia_llamar_alumno</b></code> no puede quedar vacio";
        }
        if(!isset($_POST['tipo_escritura_alumno']) or $_POST['tipo_escritura_alumno'] == ""){
            $errores[] = "El campo <code><b>tipo_escritura_alumno</b></code> no puede quedar vacio";
        }


         /* ================================================================================================================= FIN PROCEDENCIA ACADÉMICA DE LOS ÚLTIMO AÑOS
         ================================================================================================================= */




/* ================================================================================================================= INICIO DATOS DEL ACUDIENTE MASCULINO
         ================================================================================================================= */


        if(!isset($_POST['parentesco_acudiente_masculino']) or $_POST['parentesco_acudiente_masculino'] == ""){
            $errores[] = "El campo <code><b>parentesco_acudiente_mas</b></code> no puede queda vacio";
        }

        if(!isset($_POST['otro_parentesco_masculino']) or $_POST['otro_parentesco_masculino'] == ""){
            $errores[] = "El campo <code><b>otro_parentesco_masculin</b></code> no puede queda vacio";
        }

        if(!isset($_POST['primer_apellido_masculino']) or $_POST['primer_apellido_masculino'] == ""){
            $errores[] = "El campo <code><b>primer_apellido_masculin</b></code> no puede queda vacio";
        }

        if(!isset($_POST['segundo_apellido_masculino']) or $_POST['segundo_apellido_masculino'] == ""){
            $errores[] = "El campo <code><b>segundo_apellido_masculi</b></code> no puede queda vacio";
        }

        if(!isset($_POST['nombres_masculino']) or $_POST['nombres_masculino'] == ""){
            $errores[] = "El campo <code><b>or </b></code> no puede queda vacio";
        }

        if(!isset($_POST['lugar_nacimiento_masculino']) or $_POST['lugar_nacimiento_masculino'] == ""){
            $errores[] = "El campo <code><b>lugar_nacimiento_masculino </b></code> no puede queda vacio";
        }

        if(!isset($_POST['fecha_nacimiento_masculino']) or $_POST['fecha_nacimiento_masculino'] == ""){
            $errores[] = "El campo <code><b>fecha_nacimiento_masculino </b></code> no puede queda vacio";
        }

        if(!isset($_POST['edad_masculino']) or $_POST['edad_masculino'] == ""){
            $errores[] = "El campo <code><b>_P</b></code> no puede queda vacio";
        }

        if(!isset($_POST['nacionalidad_masculino']) or $_POST['nacionalidad_masculino'] == ""){
            $errores[] = "El campo <code><b>nacionalidad_masculino']</b></code> no puede queda vacio";
        }

        if(!isset($_POST['tipo_documento_masculino']) or $_POST['tipo_documento_masculino'] == ""){
            $errores[] = "El campo <code><b>tipo_documento_masculino</b></code> no puede queda vacio";
        }

        if(!isset($_POST['numero_celular_masculino']) or $_POST['numero_celular_masculino'] == ""){
            $errores[] = "El campo <code><b>numero_celular_masculino</b></code> no puede queda vacio";
        }

        if(!isset($_POST['direccion_residencia_masculino']) or $_POST['direccion_residencia_masculino'] == ""){
            $errores[] = "El campo <code><b>direccion_residencia_mas</b></code> no puede queda vacio";
        }

        if(!isset($_POST['barrio_actual_masculino']) or $_POST['barrio_actual_masculino'] == ""){
            $errores[] = "El campo <code><b>barrio_actual_masculino'</b></code> no puede queda vacio";
        }

        if(!isset($_POST['tel_residencia_masculino']) or $_POST['tel_residencia_masculino'] == ""){
            $errores[] = "El campo <code><b>tel_residencia_masculino</b></code> no puede queda vacio";
        }

        if(!isset($_POST['celular_masculino']) or $_POST['celular_masculino'] == ""){
            $errores[] = "El campo <code><b>or </b></code> no puede queda vacio";
        }

        if(!isset($_POST['email_masculino']) or $_POST['email_masculino'] == ""){
            $errores[] = "El campo <code><b>_</b></code> no puede queda vacio";
        }

        if(!isset($_POST['empresa_labora_masculino']) or $_POST['empresa_labora_masculino'] == ""){
            $errores[] = "El campo <code><b>empresa_labora_masculino</b></code> no puede queda vacio";
        }

        if(!isset($_POST['profesion_masculino']) or $_POST['profesion_masculino'] == ""){
            $errores[] = "El campo <code><b>o</b></code> no puede queda vacio";
        }

        if(!isset($_POST['ocupacion_actual_masculino']) or $_POST['ocupacion_actual_masculino'] == ""){
            $errores[] = "El campo <code><b>ocupacion_actual_masculi</b></code> no puede queda vacio";
        }

        if(!isset($_POST['si_no_es_empleado_masculino']) or $_POST['si_no_es_empleado_masculino'] == ""){
            $errores[] = "El campo <code><b>si_no_es_empleado_mascul</b></code> no puede queda vacio";
        }

        if(!isset($_POST['ingreso_promedio_mensual_masculino']) or $_POST['ingreso_promedio_mensual_masculino'] == ""){
            $errores[] = "El campo <code><b>ingreso_promedio_mensual</b></code> no puede queda vacio";
        }

        if(!isset($_POST['otros_ingresos_masculino']) or $_POST['otros_ingresos_masculino'] == ""){
            $errores[] = "El campo <code><b>otros_ingresos_masculino</b></code> no puede queda vacio";
        }

        if(!isset($_POST['total_ingresos_mensuales_masculino']) or $_POST['total_ingresos_mensuales_masculino'] == ""){
            $errores[] = "El campo <code><b>total_ingresos_mensuales</b></code> no puede queda vacio";
        }

/* ================================================================================================================= FIN DATOS DEL ACUDIENTE MASCULINO
         ================================================================================================================= */






/* ================================================================================================================= INICIO DATOS DEL ACUDIENTE FEMENINO
         ================================================================================================================= */



            if(!isset($_POST['parentesco_acudiente_femenino']) or $_POST['parentesco_acudiente_femenino'] == ""){
                $errores[] = "El campo <code><b>parentesco_acudiente_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['otro_parentesco_femenino']) or $_POST['otro_parentesco_femenino'] == ""){
                $errores[] = "El campo <code><b>otro_parentesco_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['primer_apellido_femenino']) or $_POST['primer_apellido_femenino'] == ""){
                $errores[] = "El campo <code><b>primer_apellido_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['segundo_apellido_femenino']) or $_POST['segundo_apellido_femenino'] == ""){
                $errores[] = "El campo <code><b>segundo_apellido_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['nombres_femenino']) or $_POST['nombres_femenino'] == ""){
                $errores[] = "El campo <code><b>nombres_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['lugar_nacimiento_femenino']) or $_POST['lugar_nacimiento_femenino'] == ""){
                $errores[] = "El campo <code><b>lugar_nacimiento_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['fecha_nacimiento_femenino']) or $_POST['fecha_nacimiento_femenino'] == ""){
                $errores[] = "El campo <code><b>fecha_nacimiento_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['edad_femenino']) or $_POST['edad_femenino'] == ""){
                $errores[] = "El campo <code><b>edad_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['nacionalidad_femenino']) or $_POST['nacionalidad_femenino'] == ""){
                $errores[] = "El campo <code><b>nacionalidad_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['tipo_documento_femenino']) or $_POST['tipo_documento_femenino'] == ""){
                $errores[] = "El campo <code><b>tipo_documento_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['numero_celular_femenino']) or $_POST['numero_celular_femenino'] == ""){
                $errores[] = "El campo <code><b>numero_celular_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['direccion_residencia_femenino']) or $_POST['direccion_residencia_femenino'] == ""){
                $errores[] = "El campo <code><b>direccion_residencia_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['barrio_actual_femenino']) or $_POST['barrio_actual_femenino'] == ""){
                $errores[] = "El campo <code><b>barrio_actual_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['tel_residencia_femenino']) or $_POST['tel_residencia_femenino'] == ""){
                $errores[] = "El campo <code><b>tel_residencia_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['celular_femenino']) or $_POST['celular_femenino'] == ""){
                $errores[] = "El campo <code><b>celular_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['email_femenino']) or $_POST['email_femenino'] == ""){
                $errores[] = "El campo <code><b>email_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['empresa_labora_femenino']) or $_POST['empresa_labora_femenino'] == ""){
                $errores[] = "El campo <code><b>empresa_labora_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['profesion_femenino']) or $_POST['profesion_femenino'] == ""){
                $errores[] = "El campo <code><b>profesion_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['ocupacion_actual_femenino']) or $_POST['ocupacion_actual_femenino'] == ""){
                $errores[] = "El campo <code><b>ocupacion_actual_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['si_no_es_empleado_femenino']) or $_POST['si_no_es_empleado_femenino'] == ""){
                $errores[] = "El campo <code><b>si_no_es_empleado_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['ingreso_promedio_mensual_femenino']) or $_POST['ingreso_promedio_mensual_femenino'] == ""){
                $errores[] = "El campo <code><b>ingreso_promedio_mensual_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['otros_ingresos_femenino']) or $_POST['otros_ingresos_femenino'] == ""){
                $errores[] = "El campo <code><b>otros_ingresos_femenino</b></code> no puede quedar vacio";
            }

            if(!isset($_POST['total_ingresos_mensuales_femenino']) or $_POST['total_ingresos_mensuales_femenino'] == ""){
                $errores[] = "El campo <code><b>total_ingresos_mensuales_femenino</b></code> no puede quedar vacio";
            }




         /* ================================================================================================================= FIN DATOS DEL ACUDIENTE FEMENINO
         ================================================================================================================= */




            /* ================================================================================================================= INICIO DATOS DEL ACUDIENTE FINANCIERO
         ================================================================================================================= */



        if(!isset($_POST['parentesco_acudiente_financiero']) or $_POST['parentesco_acudiente_financiero'] == ""){
            $errores[] = "El campo <code>parentesco_acudiente_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['otro_parentesco_financiero']) or $_POST['otro_parentesco_financiero'] == ""){
            $errores[] = "El campo <code>otro_parentesco_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['primer_apellido_financiero']) or $_POST['primer_apellido_financiero'] == ""){
            $errores[] = "El campo <code>primer_apellido_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['segundo_apellido_financiero']) or $_POST['segundo_apellido_financiero'] == ""){
            $errores[] = "El campo <code>segundo_apellido_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['nombres_financiero']) or $_POST['nombres_financiero'] == ""){
            $errores[] = "El campo <code>nombres_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['lugar_nacimiento_financiero']) or $_POST['lugar_nacimiento_financiero'] == ""){
            $errores[] = "El campo <code>lugar_nacimiento_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['fecha_nacimiento_financiero']) or $_POST['fecha_nacimiento_financiero'] == ""){
            $errores[] = "El campo <code>fecha_nacimiento_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['edad_financiero']) or $_POST['edad_financiero'] == ""){
            $errores[] = "El campo <code>edad_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['nacionalidad_financiero']) or $_POST['nacionalidad_financiero'] == ""){
            $errores[] = "El campo <code>nacionalidad_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['tipo_documento_financiero']) or $_POST['tipo_documento_financiero'] == ""){
            $errores[] = "El campo <code>tipo_documento_financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['numero_celular_financiero']) or $_POST['numero_celular_financiero'] == ""){
            $errores[] = "El campo <code>numero celular financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['direccion_residencia_financiero']) or $_POST['direccion_residencia_financiero'] == ""){
            $errores[] = "El campo <code>direccion residencia financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['barrio_actual_financiero']) or $_POST['barrio_actual_financiero'] == ""){
            $errores[] = "El campo <code>barrio actual financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['tel_residencia_financiero']) or $_POST['tel_residencia_financiero'] == ""){
            $errores[] = "El campo <code>telefono residencia financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['celular_financiero']) or $_POST['celular_financiero'] == ""){
            $errores[] = "El campo <code>celular financiero</code> no puede quedar vacio.";
        } 

        if(!isset($_POST['email_financiero']) or $_POST['email_financiero'] == ""){
            $errores[] = "El campo <code>email financiero</code> no puede quedar vacio.";
        } 



            /* ================================================================================================================= FIN DATOS DEL ACUDIENTE FINANCIERO
         ================================================================================================================= */





            /* ================================================================================================================= INICIO ADJUNTAR DOCUMENTACIÓN ALUMNO
         ================================================================================================================= */


            if(!isset($_FILES['foto_alumno']) or $_FILES['foto_alumno'] == ""){
                $errores[] = "El campo <code>Foto alumno</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['registro_civil_alumno']) or $_FILES['registro_civil_alumno'] == ""){
                $errores[] = "El campo <code>regsitro civil</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['tarjeta_de_identidad_alumno']) or $_FILES['tarjeta_de_identidad_alumno'] == ""){
                $errores[] = "El campo <code>Tarjeta de identidad</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['fotocopia_informe_academico_alumno']) or $_FILES['fotocopia_informe_academico_alumno'] == ""){
                $errores[] = "El campo <code>plataforma informe academico</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['recibo_publico_alumno']) or $_FILES['recibo_publico_alumno'] == ""){
                $errores[] = "El campo <code>recibo publico</code> no puede quedar vacio";
            } 

            if(!isset($_FILES['certificado_original_grado_alumno']) or $_FILES['certificado_original_grado_alumno'] == ""){
                $errores[] = "El campo <code>Certificado alumno</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['fotocopia_convivencia_alumno']) or $_FILES['fotocopia_convivencia_alumno'] == ""){
                $errores[] = "El campo <code>fotocopia convivencia alumno</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['fotocopia_paz_y_salvo_alumno']) or $_FILES['fotocopia_paz_y_salvo_alumno'] == ""){
                $errores[] = "El campo <code>Paz y salvo</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['carnet_vacunacion_alumno']) or $_FILES['carnet_vacunacion_alumno'] == ""){
                $errores[] = "El campo <code>Carnet vacunacion</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['fotocopia_carnet_eps_alumno']) or $_FILES['fotocopia_carnet_eps_alumno'] == ""){
                $errores[] = "El campo <code>fotocopia de EPS</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['cedula_padre_alumno']) or $_FILES['cedula_padre_alumno'] == ""){
                $errores[] = "El campo <code>c&eacute;dula padre </code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['cedulaPadre150File']) or $_FILES['cedulaPadre150File'] == ""){
                $errores[] = "El campo <code>c&eacute;dula panel padre al 150% </code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['cedula_madre_alumno']) or $_FILES['cedula_madre_alumno'] == ""){
                $errores[] = "El campo <code>c&eacute;dula madre al 150% </code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

            if(!isset($_FILES['cedulaPadre150File']) or $_FILES['cedulaPadre150File'] == ""){
                $errores[] = "El campo <code>c&eacute;dula padre al 150% </code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 

         


            if(!isset($_FILES['comprobante_pago_alumno']) or $_FILES['comprobante_pago_alumno'] == ""){
                $errores[] = "El campo <code>comprobante pago alumno</code> de la documentaci&oacute;n alumno no puede quedar vacio";
            } 



        /* ================================================================================================================= FIN ADJUNTAR DOCUMENTACIÓN ALUMNO
         ================================================================================================================= */


        /* ================================================================================================================= INICIO ADJUNTAR DOCUMENTACIÓN SOLO PARA ESTUDIANTES DE INCLUSIÓN ESCOLAR O CON NECESIDADES EDUCATIVAS ESPECIALES
         ================================================================================================================= */

        if(!isset($_FILES['fotocopia_historial_clinico']) or $_FILES['fotocopia_historial_clinico'] == ""){
            $errores[] = "El archivo <code>fotocopia historial clinica</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['fotocopia_informe_avances']) or $_FILES['fotocopia_informe_avances'] == ""){
            $errores[] = "El archivo <code>fotocopia informe avances</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['fotocopia_fonoaudiologia']) or $_FILES['fotocopia_fonoaudiologia'] == ""){
            $errores[] = "El archivo <code>fotocopia fonoaudiologia</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['fotocopia_examen_psicologia']) or $_FILES['fotocopia_examen_psicologia'] == ""){
            $errores[] = "El archivo <code>fotocopia examen psicologia</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['fotocopia_terapia']) or $_FILES['fotocopia_terapia'] == ""){
            $errores[] = "El archivo <code>fotocopia terapia</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['evaluacion_neurosicologica']) or $_FILES['evaluacion_neurosicologica'] == ""){
            $errores[] = "El archivo <code>evaluacion neurosicologica</code> de la seccion inclusion no debe quedar vacio.";
        } 

        if(!isset($_FILES['otro_documentos_inclusion']) or $_FILES['otro_documentos_inclusion'] == ""){
            $errores[] = "El archivo <code>Otro documento</code> de la seccion inclusion no debe quedar vacio.";
        } 


        /* ================================================================================================================= FIN ADJUNTAR DOCUMENTACIÓN SOLO PARA ESTUDIANTES DE INCLUSIÓN ESCOLAR O CON NECESIDADES EDUCATIVAS ESPECIALES
         ================================================================================================================= */



          /* ================================================================================================================= INICIO SI ERES INDEPENDIENTE
         ================================================================================================================= */

        if(!isset($_FILES['declaracion_renta']) or $_FILES['declaracion_renta'] == ""){
            $errores[] = "El archivo <code>declaracion de renta</code> de la secci&oacute;n ERES INDEPENDIENTE, se encuentra vacio, llenalo.";
        } 

        if(!isset($_FILES['certificado_ingreso_avalado']) or $_FILES['certificado_ingreso_avalado'] == ""){
            $errores[] = "El archivo <code>certificado ingreso</code> de la secci&oacute;n ERES INDEPENDIENTE, se encuentra vacio, llenalo.";
        } 

        if(!isset($_FILES['tarjeta_profesional']) or $_FILES['tarjeta_profesional'] == ""){
            $errores[] = "El archivo <code>tarjeta profesional</code> de la secci&oacute;n ERES INDEPENDIENTE, se encuentra vacio, llenalo.";
        } 

        if(!isset($_FILES['antecedentes_disciplinarios']) or $_FILES['antecedentes_disciplinarios'] == ""){
            $errores[] = "El archivo <code>antecedentes disciplinarios</code> de la secci&oacute;n ERES INDEPENDIENTE, se encuentra vacio, llenalo.";
        } 

          /* ================================================================================================================= FIN SI ERES INDEPENDIENTE
         ================================================================================================================= */


        /* Termino Validaciones */
        $objMatricula = new matriculaModel();
        
        if (count($errores) > 0) {
            setErrores($errores);
        }else{

            /* INSERCION TABLA DOCUMENTACION */

            $fotocopia_informe_academico_alumno = $_FILES['fotocopia_informe_academico_alumno']['name'];
            $certificado_original_grado_alumno = $_FILES['certificado_original_grado_alumno']['name'];
            $fotocopia_convivencia_alumno = $_FILES['fotocopia_convivencia_alumno']['name'];
            $fotocopia_paz_y_salvo_alumno = $_FILES['fotocopia_paz_y_salvo_alumno']['name'];
            $comprobante_pago_alumno = $_FILES['comprobante_pago_alumno']['name'];
            $registro_civil_alumno = $_FILES['registro_civil_alumno']['name'];
            $tarjeta_de_identidad_alumno = $_FILES['tarjeta_de_identidad_alumno']['name'];
            $carnet_vacunacion_alumno = $_FILES['carnet_vacunacion_alumno']['name'];
            $fotocopia_carnet_eps_alumno = $_FILES['fotocopia_carnet_eps_alumno']['name'];
            $certificado_medico = "No regista";            
            $certificado_visual = "No registra";
            $certificado_auditivo = "No registra";
            $cedula_padre_alumno = $_FILES['cedula_padre_alumno']['name'];
            $cedula_madre_alumno = $_FILES['cedula_madre_alumno']['name'];
            
            if(!isset($_FILES['carta_laboral_padre_alumno']) or $_FILES['carta_laboral_padre_alumno'] == ""){
                $carta_laboral_padre = "No registra";
            }else{
                $carta_laboral_padre = $_FILES['carta_laboral_padre_alumno']['name'];
            }

            if(!isset($_FILES['carta_laboral_madre_alumno']) or $_FILES['carta_laboral_madre_alumno'] == ""){
                $carta_laboral_madre = "No registra";
            }else{
                $carta_laboral_padre = $_FILES['carta_laboral_madre_alumno']['name'];
            } 


            $recibo_publico_alumno = $_FILES['recibo_publico_alumno'];
            $estado = "activo";

            $sql_documentos = "INSERT INTO documentacion (
                                    fotocopia_ultimo_informe_academico,
                                    certificado_ultimo_grado,
                                    fotocopia_informe_convivencia,
                                    fotocopia_paz_y_salvo,
                                    comprobante_pago_solicitud,
                                    registro_civil,
                                    tarjeta_identidad,
                                    carnet_vacunacion,
                                    carnet_eps,
                                    certificado_medico,
                                    certificado_visual,
                                    certificado_auditivo,
                                    cedula_padre,
                                    cedula_madre,
                                    carta_laboral_padre,
                                    carta_laboral_madre,
                                    recibo_publico,
                                    estado_documento) 
                                    VALUES(
                                    '$fotocopia_informe_academico_alumno',
                                    '$certificado_original_grado_alumno',
                                    '$fotocopia_convivencia_alumno',
                                    '$fotocopia_paz_y_salvo_alumno',
                                    '$comprobante_pago_alumno',
                                    '$registro_civil_alumno',
                                    '$tarjeta_de_identidad_alumno',
                                    '$carnet_vacunacion_alumno',
                                    '$fotocopia_carnet_eps_alumno',
                                    '$certificado_medico',
                                    '$certificado_visual',
                                    '$certificado_auditivo',
                                    '$cedula_padre_alumno',
                                    '$cedula_madre_alumno',
                                    '$carta_laboral_padre',
                                    '$carta_laboral_madre',
                                    '$recibo_publico_alumno',
                                    '$estado')";
            $insercion_documento = $objMatricula->insertar($sql_documentos);


            $sql = "SELECT * FROM documentacion ORDER BY id_documento ASC";
                $consulta = $objMatricula->find($sql);
                $id_documento_alumno = $consulta[0];

            /* INSERCION TABLA FORMULARIO DOCUMENTACION ALUMNO */

            $fotocopia_historial_clinico = $_FILES['fotocopia_historial_clinico']['name'];
            $fotocopia_informe_avances_terapeuticos = $_FILES['fotocopia_informe_avances']['name'];
            $fotocopia_fonoaudiologia = $_FILES['fotocopia_fonoaudiologia']['name'];
            $fotocopia_examen_psicologia = $_FILES['fotocopia_examen_psicologia']['name'];
            $fotocopia_terapia_ocupacional = $_FILES['fotocopia_terapia']['name'];
            $evaluacion_neurosicologica = $_FILES['evaluacion_neurosicologica']['name'];
            $otro_documento = $_FILES['otro_documentos_inclusion']['name'];
            
            if(!isset($_FILES['carta_laboral_padre_alumno']) or $_FILES['carta_laboral_padre_alumno'] == ""){
                $carta_laboral_padre = "No registra";
            }else{
                $carta_laboral_padre = $_FILES['carta_laboral_padre_alumno']['name'];
            }

            if(!isset($_FILES['carta_laboral_madre_alumno']) or $_FILES['carta_laboral_madre_alumno'] == ""){
                $carta_laboral_madre = "No registra";
            }else{
                $carta_laboral_padre = $_FILES['carta_laboral_madre_alumno']['name'];
            } 


            $recibo_publico_alumno = $_FILES['recibo_publico_alumno'];
            $estado = "activo";

            $sql_documentos = "INSERT INTO documentacion (
                                    fotocopia_ultimo_informe_academico,
                                    certificado_ultimo_grado,
                                    fotocopia_informe_convivencia,
                                    fotocopia_paz_y_salvo,
                                    comprobante_pago_solicitud,
                                    registro_civil,
                                    tarjeta_identidad,
                                    carnet_vacunacion,
                                    carnet_eps,
                                    certificado_medico,
                                    certificado_visual,
                                    certificado_auditivo,
                                    cedula_padre,
                                    cedula_madre,
                                    carta_laboral_padre,
                                    carta_laboral_madre,
                                    recibo_publico,
                                    estado_documento) 
                                    VALUES(
                                    '$fotocopia_informe_academico_alumno',
                                    '$certificado_original_grado_alumno',
                                    '$fotocopia_convivencia_alumno',
                                    '$fotocopia_paz_y_salvo_alumno',
                                    '$comprobante_pago_alumno',
                                    '$registro_civil_alumno',
                                    '$tarjeta_de_identidad_alumno',
                                    '$carnet_vacunacion_alumno',
                                    '$fotocopia_carnet_eps_alumno',
                                    '$certificado_medico',
                                    '$certificado_visual',
                                    '$certificado_auditivo',
                                    '$cedula_padre_alumno',
                                    '$cedula_madre_alumno',
                                    '$carta_laboral_padre',
                                    '$carta_laboral_madre',
                                    '$recibo_publico_alumno',
                                    '$estado')";
            $insercion_documento = $objMatricula->insertar($sql_documentos);


            $sql = "SELECT * FROM documentacion ORDER BY id_documento ASC";
                $consulta = $objMatricula->find($sql);
                $id_documento_alumno = $consulta[0];


            /*  FIN INSERCION TABLA FORMULARIO DOCUMENTACION ALUMNO */




            /* INSERCION TABLA FORMULARIO DE SOLICITUD */
            
            $numero_documento = $_POST['numero_de_documento_alumno'];
            $tipo_documento = $_POST['tipo_documento_alumno'];

            $primer_nombre = $_POST['primer_nombre_alumno'];

        if(!isset($_POST['segundo_nombre_alumno']) or $_POST['segundo_nombre_alumno'] == ""){
            $segundo_nombre = "No registra";
        }else{
            $segundo_nombre = $_POST['segundo_nombre_alumno'];
        }

        
        $primer_apellido = $_POST['primero_apellido_alumno'];

        if(!isset($_POST['segundo_apellido_alumno']) or $_POST['segundo_apellido_alumno'] == ""){
            $segundo_apellido = "No registra";
        }else{
            $segundo_apellido = $_POST['segundo_apellido_alumno'];
        }

        
        $lugar_nacimiento = $_POST['lugar_de_nacimiento_alumno'];
        $fecha_nacimiento = $_POST['fecha_de_nacimiento_alumno'];
        $direccion_residencia = $_POST['direccion_residencia_alumno'];
        $barrio_actual = $_POST['barrio_actual_alumno'];
        $comuna = $_POST['comuna_alumno'];
        $estrato_social = $_POST['estrato_social_alumno'];

        $ciudad_expedicion = $_POST['ciudad_expedicion_documento_alumno'];
        $telefono_residencia = $_POST['tel_residencia_alumno'];
        $celular = $_POST['celular_alumno'];
        $correo_alumno = $_POST['correo_alumno'];
        $vive_con = $_POST['vive_con_parentesco_alumno'];
        $grado_ingreso = $_POST['grado_que_ingreso_alumno'];
        $institucion_educativa = $_POST['institucion_educativa_proviene_alumno'];
        $motivo_retiro = $_POST['motivo_retiro_alumno'];
        $motivacion_shalom = $_POST['motivacion_shalom_alumno'];

            if(!isset($_POST['cualesVivo']) or $_POST['cualesVivo'] == ""){
                $parentesco_otros = "No registra";
            }else{
                $parentesco_otros = $_POST['cualesVivo'];
            }

            if(!isset($_POST['otro_retiro_alumno']) or $_POST['otro_retiro_alumno'] == ""){
                $otro_retiro = "No registra";
            }else{
                $otro_retiro = $_POST['otro_retiro_alumno'];
            } 

            if(!isset($_POST['persona_referida_alumno']) or $_POST['persona_referida_alumno'] == ""){
                $persona_referida = "No registra";
            }else{
                $persona_referida = $_POST['otro_retiro_alumno'];
            }

            if(!isset($_POST['alumno_referido_alumno']) or $_POST['alumno_referido_alumno'] == ""){
                $alumno_referido = "No registra";
            }else{
                $alumno_referido = $_POST['alumno_referido_alumno'];
            }

            $foto_aluno = $_FILES['foto_alumno']['name'];

            $sql_insercion_formulario = "INSERT INTO formulario_solicitud (
                                      id_alumno, 
                                      foto_alumno,
                                      primer_nombre,
                                      segundo_nombre,
                                      primer_apellido,
                                      segundo_apellido,
                                      lugar_de_nacimiento,
                                      fecha_de_nacimiento,
                                      direccion_residencia,
                                      barrio_actual,
                                      comunca_localidad,
                                      estrato_social,
                                      tipo_documento,
                                      ciudad_expedicion_cedula,
                                      telefono_residencia,
                                      telefono_celular,
                                      correo_actual,
                                      aspirante_vive,
                                      grado_ingreso,
                                      institucion_proviene,
                                      motivo_retiro,
                                      otro_motivo,
                                      motivacion_matricular,
                                      nombre_persona_referido,
                                      nombre_estudiante_referido,
                                      id_documentacion,
                                      id_documentacion_inclusion,
                                      id_documentacion_masculino,
                                      id_documentacion_femenino,
                                      id_documentacion_financiero,
                                      estado_alumno_solicitud)VALUES(
                                      $numero_documento,
                                      '$foto_alumno',
                                      '$primer_nombre',
                                      '$segundo_nombre',
                                      '$primer_apellido',
                                      '$segundo_apellido',
                                      '$lugar_nacimiento',
                                      '$fecha_nacimiento',
                                      '$direccion_residencia',
                                      '$barrio_actual',
                                      '$comuna',
                                      '$estrato_social',
                                      '$tipo_documento',
                                      '$ciudad_expedicion',
                                      '$telefono_residencia',
                                      '$celular',
                                      '$correo_alumno',
                                      '$vive_con',
                                      '$grado_ingreso',
                                      '$institucion_educativa',
                                      '$motivo_retiro',
                                      '$otro_retiro',
                                      '$motivacion_shalom',
                                      '$persona_referida',
                                      '$alumno_referido',
                                      '$id_documento_alumno',
                                      '$id_documentacion_inclusion',
                                      '$id_documentacion_masculino',
                                      '$id_documentacion_femenino',
                                      '$id_documentacion_financiero',
                                      'activo')";
            $insercion_formulario = $objMatricula->insertar($sql_insercion_formulario);





        }

        $objMatricula->cerrar();
        echo getRespuestaAccion('listar');

    }

}
