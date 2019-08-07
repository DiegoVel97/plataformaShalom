<div class="row">
	<div class="container">
		<div class="espacio col m1 l1 xl1">&nbsp;</div>

		<div class="formularioRenovacion col s12 m10 l10 xl12 card-panel" style="border-radius: 12px; ">
			<div class="encabezado col s12 m12 l12 xl4" style="border-bottom: 1px solid black;">
				<div class="logoEncabezado col s12 m4 l4 xl4">
					<img src="<?php echo addLib('img/logo/logo_nuevo_shalom.png'); ?>" alt="" width="100%">
				</div>
				<div class="tituloRenovacion col s12 m8 l8" style="text-align: center;">
					<h1><b>SOLICITUD DE CUPO NUEVO</b></h1>
				</div>
			</div>
			<div class="cuerpoRenovacion col s12 m12 l12 xl12">
				  <div class="card-panel green lighten-5">
				  		<b>
	    					<span class="black-text text-darken-2">
	    						<b><h5>
	    							Tener en cuenta que para que su solicitud de cupo tenga validez es importante realizar el pago de $50.000 = cincuenta mil pesos en Bancolombia cuenta de ahorros numero 30177006764 a nombre de Gloria Ines Salazar y adjuntar el comprobante en los adjuntos al final de este formulario
	    						</h5>
	    					</b>
	    					</span>
	    				</b>
	  			  </div>
	  			  <?php $error=getErrores(); ?>
	  			  <?php if (!$error=="") { ?>
	  			  	<div id="card-alert" class="card red">
	  			  		<div class="card-content white-text">
		                    <p><i class="mdi-alert-error"></i> <?php echo $error; ?> </p>
		                </div>

		                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">×</span>
		                </button>
		            </div>
		        <?php } ?>
		               	
		                <!--Inicio contenedor mensajes de error-->
        <div class="card red">
            <div id="cont_errors_ajax" class="card-content white-text">
            </div>
        </div>
        <!--Fin contenedor mensajes de error-->

					<p align="justify">
						<ul>
							<li>
								Los documentos que no sean anexados en este formulario de solicitud  de cupo serán exigidos en el momento de diligenciar el formato de matrícula.
							</li>
							<li>
								Nota importante : La foto del estudiante debe ser tipo carnet 3 x 4 
							</li>
							
						</ul>
					</p>
					<hr>
					<p>
				Llene el formulario, diligencie todos los campos, no olvide adjuntar los documento que son requeridos, las fotos del estudiante y del padre de familia deben ser tipo documento en formato 3×4 . si tiene dudas por favor comuníquese a 3154397111- 664 4571 y si se presenta algún problema por favor envié un correo a cedshalom@gmail.com</p>
			</div>
				    
				</div> <!-- DIV formularioRenovacionInputs -->
			</div> <!-- DIV formularioRenovacion Card panel -->
		</div>
	</div>

<form id="formularioSolicitudCupo" class="col s12 m12 l12 xl12 file-form-solicitud" data-action="<?php echo crearUrl("matricula","matricula", "solicitud", array('noVista')); ?>" enctype="multipart/form-data" method="POST" >

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="datosAlumno col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">person</i>
						<b>DATOS DEL ALUMNO</b>
					</h1>
				</center>
				<div class="camposFormulario col s12 m12 l12 xl12">
					<div class="row">
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="primer_nombre_alumno">
							<label for="">Primer nombre</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="segundo_nombre_alumno">
							<label for="">Segundo nombre</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="primero_apellido_alumno">
							<label for="">Primer apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="segundo_apellido_alumno">
							<label for="">Segundo apellido</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="lugar_de_nacimiento_alumno">
							<label for="">Lugar de nacimiento</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="date" name="fecha_de_nacimiento_alumno"><br>
							<label for="">Fecha de nacimiento</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="direccion_residencia_alumno">
							<label for="">Direcci&oacute;n de residencia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="barrio_actual_alumno">
							<label for="">Barrio actual:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="comuna_alumno">
							<label for="">Comuna o Localidad</label>
						</div>	


				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estrato_social_alumno" id="estrato_social_alumno">
					<select id="estrato_social_alumno_select">
						<option value="" disabled selected>Seleccionar:</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
					<label>Estrato social:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_documento_alumno" id="tipo_documento_alumno" value="">
							<select id="tipo_documento_alumno_select">
								<option value="" disabled selected>Seleccionar tipo documento</option>
								<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de documento</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="number" class="validate" name="numero_de_documento_alumno">
							<label for="">N&uacute;mero de documento</label>
						</div>


						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="ciudad_expedicion_documento_alumno">
							<label for="">Ciudad de expedici&oacute;n</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="tel_residencia_alumno">
							<label for="">Tel. de residencia actual:</label>
						</div>
<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="celular_alumno">
							<label for="">Tel. celular:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="email" class="validate" name="correo_alumno">
							<label for="">Correo</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="email" class="validate" name="confirmarCorreoAlumno">
							<label for="">Confirmar correo</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="vive_con_parentesco_alumno" id="vive_con_parentesco_alumno" value="">
							<select id="vive_con_parentesco_alumno_select">
								<option value="" disabled selected>Seleccionar parentesco</option>
								<option value="mama">Mam&aacute;</option>
								<option value="papa">Pap&aacute;</option>
								<option value="ambos_padres">Ambos padres</option>
								<option value="abuelos">Abuelos</option>
								<option value="otros">Otros</option>
							</select>
							<label>El aspirante vive con:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="cualesVive">
							<label for="">¿Cuales?</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="grado_que_ingreso_alumno" id="grado_que_ingreso_alumno" value="">
							<select id="grado_que_ingreso_alumno_select">
								<option value="" disabled selected>Seleccionar grado</option>
								<option value="Pre_Jardin_1">Pre Jardin 1</option>
								<option value="Pre_Jardin_2">Pre Jardin 2</option>
								<option value="Jardin">Jardin</option>
								<option value="Transicion">Transici&oacute;n</option>
								<option value="Primero">Primero</option>
								<option value="Segundo">Segundo</option>
								<option value="Tercero">Tercero</option>
								<option value="Cuarto">Cuarto</option>
								<option value="Quinto">Quinto</option>
							</select>
							<label>Grado en el que el estudiante ingreso al Centro Educativo Shalom por primera vez:</label>
						</div>
                      <div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="institucion_educativa_proviene_alumno">
							<label for="">Intittuci&oacute;n educativa de donde proviene</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="motivo_retiro_alumno" id="motivo_retiro_alumno" value="">
							<select id="motivoRetiroSelect">
								<option value="" disabled selected>Seleccionar grado</option>
								<option value="Academicos">Academicos</option>
								<option value="Convivencia">Convivencia</option>
								<option value="Economicos">Economicos</option>
								<option value="traslado_ciudad">Traslado de ciudad</option>
								<option value="Otros">Otros</option>
							</select>
							<label>El motivo del retiro</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="otro_retiro_alumno">
							<label for="">Otro, ¿cual?</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="motivacion_shalom_alumno" id="motivacion_shalom_alumno" value="">
							<select id="motivacion_shalom_alumno_select">
								<option value="" disabled selected>Seleccionar grado</option>
								<option value="Academicos">Academicos</option>
								<option value="Convivencia">Convivencia</option>
								<option value="Economicos">Economicos</option>
								<option value="traslado_ciudad">Traslado de ciudad</option>
								<option value="Otros">Otros</option>
							</select>
							<label>Que le motiva a matricular a sus hijos en el Centro Educativo Shalom Cali</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="persona_referida_alumno">
							<label for="">Nombre persona que lo refirio</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="alumno_referido_alumno">
							<label for="">Nombre de el/la estudiante</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1">&nbsp;</div>
			<div class="adjuntarDocumentacion col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>PROCEDENCIA ACAD&Eacute;MICA DE LOS &Uacute;LTIMO AÑOS</b>
					</h1>
				</center>
				<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="grado_procedencia">
							<label for="">Grado</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="institucion_procedencia">
							<label for="">Instituci&oacute;n Educativa</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="ano_lectivo_procedencia">
							<label for="">Año lectivo</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="grado_procedencia2">
							<label for="">Grado</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="institucion_procedencia2">
							<label for="">Instituci&oacute;n Educativa</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="ano_lectivo_procedencia2">
							<label for="">Año lectivo</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="grado_procedencia3">
							<label for="">Grado</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="institucion_procedencia3">
							<label for="">Instituci&oacute;n Educativa</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="ano_lectivo_procedencia3">
							<label for="">Año lectivo</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="grado_procedencia4">
							<label for="">Grado</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="institucion_educativa_procedencia4">
							<label for="">Instituci&oacute;n Educativa</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="ano_lectivo_procedencia4">
							<label for="">Año lectivo</label>
						</div>

						<div class="input-field col s12 m8 l8 xl8">
							<input type="hidden" name="terapia_alumno" id="terapia_alumno" value="">
							<select id="terapia_alumno_select">
								<option value="" disabled selected>Seleccionar terapia</option>
								<?php foreach(terapias() as $terapia) { ?>
									<option value="<?php echo $terapia['id_terapia']; ?>"><?php echo utf8_encode($terapia['descripcion_terapia']); ?></option>
								<?php } ?>
							</select>
							<label>El aspirante presenta algún tipo de discapacidad o lleva algún proceso terapéutico</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="cual_terapia_alumno">
							<label for="">Otros, ¿cual?</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="grupo_etnico_alumno" id="grupo_etnico_alumno" value="">
							<select id="grupo_etnico_alumno_select">
								<option value="" disabled selected>Seleccionar Grupo &Eacute;tnico</option>
								<?php foreach(pag_grupos_etnicos() as $grupo_etnico) { ?>
									<option value="<?php echo $grupo_etnico['id_grupos_etnicos']; ?>"><?php echo utf8_encode($grupo_etnico['descripcion_grupos_etnicos']); ?></option>
								<?php } ?>
							</select>
							<label>Pertenece grupos &eacute;nicos</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="actividades_extracurriculares_alumno" id="actividades_extracurriculares_alumno" value="">
							<select id="actividades_extracurriculares_alumno_select">
								<option value="" disabled selected>Seleccionar actividad</option>
								<option value="deportivas">Deportivas</option>
								<option value="artisticas">Artisticas</option>
								<option value="culturales">Culturales</option>
								<option value="de_ayuda_social">De ayuda social</option>
								
							</select>
							<label>¿Que otras actividades extracurriculares de importancia realiza el/la estudiante</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="otras_actividades_extracurriculares_alumno">
							<label for="">Otras, ¿cual?</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="eps_alumno" id="eps_alumno" value="">
							<select id="eps_alumno_select">
								<option value="" disabled selected>Seleccionar EPS</option>
								<?php foreach(pag_eps() as $eps) { ?>
									<option value="<?php echo $eps['id_eps']; ?>"><?php echo utf8_encode($eps['descripcion_eps']); ?></option>
								<?php } ?>
							</select>
							<label>EPS/ Seguro de accidentes</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="enfermedades_alumno">
							<label for="">¿Que enfermedades ha padecido o padece?</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_sangre_alumno" id="tipo_sangre_alumno" value="">
							<select id="tipo_sangre_alumno_select">
								<option value="" disabled selected>Seleccionar tipo de sangre</option>
								<?php foreach(pag_tipo_sangre() as $sangre) { ?>
									<option value="<?php echo $sangre['id_sangre']; ?>"><?php echo utf8_encode($sangre['descripcion_sangre']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de sangre</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="rh_sangre_alumno" id="rh_sangre_alumno" value="">
							<select id="rh_sangre_alumno_select">
								<option value="" disabled selected>Seleccionar RH</option>
								<?php foreach(pag_rh_sangre() as $rh) { ?>
									<option value="<?php echo $rh['id_rh_sangre']; ?>"><?php echo utf8_encode($rh['descripcion_rh_sangre']); ?></option>
								<?php } ?>
							</select>
							<label>RH</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="emergencia_llamar_alumno">
							<label for="">En caso de emergencia llevar a la clinica...</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_escritura_alumno" id="tipo_escritura_alumno" value="">
							<select id="tipo_escritura_alumno_select">
								<option value="" disabled selected>Seleccionar tipo escritura</option>
								<?php foreach(pag_tipo_escritura() as $escritura) { ?>
									<option value="<?php echo $escritura['id_tipo_escritura']; ?>"><?php echo utf8_encode($escritura['descripcion_tipo_escritura']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de escritura</label>
						</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1">&nbsp;</div>
			<div class="adjuntarDocumentacion col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ACUDIENTE MASCULINO</b>
					</h1>
				</center>
				<div class="input-field col s12 m8 l8 xl8">
							<input type="hidden" name="parentesco_acudiente_masculino" id="parentesco_acudiente_masculino" value="">
							<select id="parentesco_acudiente_masculino_select">
								<option value="" disabled selected>Seleccionar parentesco</option>
								<option value="Padre">Padre</option>
								<option value="Abuelo">Abuelo</option>
								<option value="Hermano">Hermano</option>
								<option value="Tio">Tio</option>

							</select>
							<label>Cual es su parentesco con el/la estudiante</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="otro_parentesco_masculino">
							<label for="">Otro, ¿cual?</label>
						</div>


				<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="primer_apellido_masculino">
							<label for="">Primer apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="segundo_apellido_masculino">
							<label for="">Segundo apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nombres_masculino">
							<label for="">Nombres</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="lugar_nacimiento_masculino">
							<label for="">Lugar de nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="date" class="validate" name="fecha_nacimiento_masculino">
							<label for="">Fecha nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="edad_masculino">
							<label for="">Edad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nacionalidad_masculino">
							<label for="">Nacionalidad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_documento_masculino" id="tipo_documento_masculino" value="">
							<select id="tipo_documento_masculino_select">
								<option value="" disabled selected>Seleccionar tipo documento</option>
								<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de documento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="number" class="validate" name="numero_id_masculino">
							<label for="">N&uacute;mero c&eacute;dula</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="direccion_residencia_masculino">
							<label for="">Direcci&oacute;n de residencia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="barrio_actual_masculino">
							<label for="">Barrio actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="tel_residencia_masculino">
							<label for="">Tel. de residencia actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="celular_masculino">
							<label for="">Tel. celular:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="email" class="validate" name="email_masculino">
							<label for="">Email:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="empresa_labora_masculino">
					<label for="">Empresa donde trabaja:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="profesion_masculino">
					<label for="">Profesion:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="ocupacion_actual_masculino">
					<label for="">Ocupacion actual:</label>
				</div>
				<div class="input-field col s12 m12 l12 xl12">
					<input  type="text" class="validate" name="si_no_es_empleado_masculino">
					<label for="">Si no es empleado, amplíe la información sobre su actividad económica:</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="ingreso_promedio_mensual_masculino">
					<label for="">Ingreso promedio mensuales - Salario</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="otros_ingresos_masculino">
					<label for="">Otros</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="total_ingresos_mensuales_masculino">
					<label for="">Total ingreso promedio mensuales</label>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1">&nbsp;</div>
			<div class="adjuntarDocumentacion col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ACUDIENTE FEMENINO</b>
					</h1>
				</center>
				<div class="input-field col s12 m8 l8 xl8">
							<input type="hidden" name="parentesco_acudiente_femenino" id="parentesco_acudiente_femenino" value="">
							<select id="parentesco_acudiente_femenino_select">
								<option value="" disabled selected>Seleccionar parentesco</option>
								<option value="Padre">Padre</option>
								<option value="Abuelo">Abuelo</option>
								<option value="Hermano">Hermano</option>
								<option value="Tio">Tio</option>

							</select>
							<label>Cual es su parentesco con el/la estudiante</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="otro_parentesco_femenino">
							<label for="">Otro, ¿cual?</label>
						</div>


				<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="primer_apellido_femenino">
							<label for="">Primer apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="segundo_apellido_femenino">
							<label for="">Segundo apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nombres_femenino">
							<label for="">Nombres</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="lugar_nacimiento_femenino">
							<label for="">Lugar de nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="date" class="validate" name="fecha_nacimiento_femenino">
							<label for="">Fecha nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="edad_femenino">
							<label for="">Edad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nacionalidad_femenino">
							<label for="">Nacionalidad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_documento_femenino" id="tipo_documento_femenino" value="">
							<select id="tipo_documento_femenino_select">
								<option value="" disabled selected>Seleccionar tipo documento</option>
								<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de documento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="number" class="validate" name="numero_id_femenino">
							<label for="">N&uacute;mero c&eacute;dula</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="direccion_residencia_femenino">
							<label for="">Direcci&oacute;n de residencia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="barrio_actual_femenino">
							<label for="">Barrio actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="tel_residencia_femenino">
							<label for="">Tel. de residencia actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="celular_femenino">
							<label for="">Tel. celular:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="email" class="validate" name="email_femenino">
							<label for="">Email:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="empresa_labora_femenino">
					<label for="">Empresa donde trabaja:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="profesion_femenino">
					<label for="">Profesion:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input  type="text" class="validate" name="ocupacion_actual_femenino">
					<label for="">Ocupacion actual:</label>
				</div>
				<div class="input-field col s12 m12 l12 xl12">
					<input  type="text" class="validate" name="si_no_es_empleado_femenino">
					<label for="">Si no es empleado, amplíe la información sobre su actividad económica:</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="ingreso_promedio_mensual_femenino">
					<label for="">Ingreso promedio mensuales - Salario</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="otros_ingresos_femenino">
					<label for="">Otros</label>
				</div>
				<div class="input-field col s4 m4 l4 xl4">
					<input  type="text" class="validate" name="total_ingresos_mensuales_femenino">
					<label for="">Total ingreso promedio mensuales</label>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1">&nbsp;</div>
			<div class="adjuntarDocumentacion col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ACUDIENTE FINANCIERO</b>
					</h1>
				</center>
				<div class="input-field col s12 m8 l8 xl8">
							<input type="hidden" name="parentesco_acudiente_financiero" id="parentesco_acudiente_financiero" value="">
							<select id="parentesco_acudiente_financiero_select">
								<option value="" disabled selected>Seleccionar parentesco</option>
								<option value="Padre">Padre</option>
								<option value="Abuelo">Abuelo</option>
								<option value="Hermano">Hermano</option>
								<option value="Tio">Tio</option>

							</select>
							<label>Cual es su parentesco con el/la estudiante</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="otro_parentesco_financiero">
							<label for="">Otro, ¿cual?</label>
						</div>


				<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="primer_apellido_financiero">
							<label for="">Primer apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="segundo_apellido_financiero">
							<label for="">Segundo apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nombres_financiero">
							<label for="">Nombres</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="lugar_nacimiento_financiero">
							<label for="">Lugar de nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="date" class="validate" name="fecha_nacimiento_financiero">
							<label for="">Fecha nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="edad_financiero">
							<label for="">Edad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="nacionalidad_financiero">
							<label for="">Nacionalidad</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipo_documento_financiero" id="tipo_documento_financiero" value="">
							<select id="tipo_documento_financiero_select">
								<option value="" disabled selected>Seleccionar tipo documento</option>
								<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de documento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="number" class="validate" name="numero_id_financiero">
							<label for="">N&uacute;mero Cèdula</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="direccion_residencia_financiero">
							<label for="">Direcci&oacute;n de residencia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="barrio_actual_financiero">
							<label for="">Barrio actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="tel_residencia_financiero">
							<label for="">Tel. de residencia actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input  type="text" class="validate" name="celular_financiero">
							<label for="">Tel. celular:</label>
						</div>

						<div class="input-field col s12 m4 l4 xl4">
							<input  type="email" class="validate" name="email_financiero">
							<label for="">Email:</label>
						</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="adjuntarDocumentoAlumno col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>ADJUNTAR DOCUMENTACI&Oacute;N ALUMNO</b>
					</h1>
				</center>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Foto alumno</span>
						<input type="file" name="foto_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Registro Civil</span>
						<input type="file" name="registro_civil_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Tarjeta de identidad al 150%</span>
						<input type="file" name="tarjeta_de_identidad_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del último informe académico del grado que cursa 
( excepto prejardín y jardín )</span>
						<input type="file" name="fotocopia_informe_academico_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Recibo p&uacute;blico (agua y luz)</span>
						<input type="file" name="recibo_publico_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Certificado original del último grado cursado</span>
						<input type="file" name="certificado_original_grado_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del informe de convivencia o comportamiento</span>
						<input type="file" name="fotocopia_convivencia_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del paz y salvo de la institución anterior</span>
						<input type="file" name="fotocopia_paz_y_salvo_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>


				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Carnet de vacunaci&oacute;n solo para primero infancia y grado primero</span>
						<input type="file" name="carnet_vacunacion_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del carnet de la EPS o constancia donde se encuentra afiliado a un sistema de Seguridad Social</span>
						<input type="file" name="fotocopia_carnet_eps_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>C&eacute;dula padre 150%</span>
						<input type="file" name="cedula_padre_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Foto tipo documento padre</span>
						<input type="file" name="cedulaPadre150File">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>C&eacute;dula madre 150%</span>
						<input type="file" name="cedula_madre_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Foto tipo documento madre</span>
						<input type="file" name="cedulaPadre150File">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Carta laboral Padre</span>
						<input type="file" name="carta_laboral_padre_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Carta laboral Madre</span>
						<input type="file" name="carta_laboral_madre_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Comprobante pago solicitud de cupo</span>
						<input type="file" name="comprobante_pago_alumno">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

			</div>
		</div>
	</div>


<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="adjuntarDocumentoAlumno col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>ADJUNTAR DOCUMENTACIÓN SOLO PARA ESTUDIANTES DE INCLUSIÓN ESCOLAR O CON NECESIDADES EDUCATIVAS ESPECIALES</b>
					</h1>
				</center>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del historial clínico</span>
						<input type="file" name="fotocopia_historial_clinico">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del informe de los avances terapeuticos</span>
						<input type="file" name="fotocopia_informe_avances">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del fonoaudiologia</span>
						<input type="file" name="fotocopia_fonoaudiologia">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del exmanen de psicologia</span>
						<input type="file" name="fotocopia_examen_psicologia">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Fotocopia del Terapia Ocupacional</span>
						<input type="file" name="fotocopia_terapia">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Evaluación Neurosicologica no mayor a un año</span>
						<input type="file" name="evaluacion_neurosicologica">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m12 l12 xl12">
					<div class="btn">
						<span>Otros</span>
						<input type="file" name="otro_documentos_inclusion">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1">&nbsp;</div>
			<div class="adjuntarDocumentacion col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>SI ERES INDEPENDIENTE</b>
					</h1>
				</center>
				<div class="input-field col s12 m12 l12 xl12">
					<input type="hidden" name="seleccionIndependiente" id="seleccionIndependiente" value="2">
					<br>
					<button type="button" id="mostrarCamposIndependiente" class="btn teal waves-effect waves-light center animated infinite rubberBand col s12 m12 l12 xl12" type="button" name="action">SOY INDEPENDIENTE
						<button type="button" id="ocultarCamposIndependiente" class="btn teal waves-effect waves-light center animated infinite rubberBand col s12 m12 l12 xl12" type="button" name="action" style="display: none;">NO SOY INDEPENDIENTE
					</button>
					<br><br><br>

				</div>
				<div class="inputsIndependiente col s12 m12 l12 xl12" style="display: none;">
					<div class="file-field input-field col s12 m12 l12 xl12">
						<div class="btn">
							<span>Declaraci&oacute;n de renta</span>
							<input type="file" name="declaracion_renta">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m8 l8 xl8">
						<div class="btn">
							<span>Certificado de ingreso avalado por un contador</span>
							<input type="file" name="certificado_ingreso_avalado">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m12 l12 xl12">
						<div class="btn">
							<span>Tarjeta profesional contador</span>
							<input type="file" name="tarjeta_profesional">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m8 l8 xl8">
						<div class="btn">
							<span>Antecedentes Disciplinarios Contador</span>
							<input type="file" name="antecedentes_disciplinarios">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btnSgForm col s12 m12 l12">
		<center>
			<button type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_solicitud" type="button" name="action" style="position: fixed; z-index: 10; bottom: 20px; right: 40px;">SOLICITAR CUPO
			</button>
			<a href="<?php echo addLib(''); ?>">
				<button type="button" class="btn red waves-effect waves-light right animated infinite rubberBand" type="button" name="action" style="position: fixed; z-index: 10; bottom: 20px; right: 240px;">CANCELAR SOLICITUD DE CUPO
				</button>
			</a>
		</center>
	</div>
</form>