<div class="row">
	<div class="container">
		<div class="espacio col m1 l1 xl1">&nbsp;</div>

		<div class="formularioRenovacion col s12 m10 l10 xl12 card-panel" style="border-radius: 12px; ">
			<div class="encabezado col s12 m12 l12 xl4" style="border-bottom: 1px solid black;">
				<div class="logoEncabezado col s12 m4 l4 xl4">
					<img src="<?php echo addLib('img/logo/logo_nuevo_shalom.png'); ?>" alt="" width="100%">
				</div>
				<div class="tituloRenovacion col s12 m8 l8">
					<h1>RENOVACION DE CUPO</h1>
				</div>
			</div>
			<div class="cuerpoRenovacion col s12 m12 l12 xl12">
				  <div class="card-panel green lighten-5">
				  		<b>
	    					<span class="black-text text-darken-2">
	    						A continuacion se dara a conocer los documentos que se necesitan para una correcta renovacion de matricula
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
								*Adjunte Cartas laborales actualizadas de los padres de familia.	
							</li>
							<li>
								* Si son independientes, certificados  avalados por un contador público, este, debe anexar copia de la tarjeta profesional y antecedentes disciplinarios expedido por la Junta Central de Contadores, no mayor a tres meses.
							</li>
							<li>
								*Documentos de los padres de familia y estudiante.	
							</li>
						</ul>
					</p>
					<hr>
					<p>
				Llene el formulario, diligencie todos los campos, no olvide adjuntar los documento que son requeridos, las fotos del estudiante y del padre de familia deben ser tipo documento en formato 3×4 . si tiene dudas por favor comuníquese a 3154397111- 664 4571 y si se presenta algún problema por favor envié un correo a cedshalom@gmail.com</p>
			</div>


			<div class="formularioRenovacionInputs col s12 m12 l12 xl12">
				<div class="row">
				    <form id="formularioRenovacionCupo" class="col s12 m12 l12 xl12 file-form" data-action="<?php echo crearUrl("matricula","matricula", "renovacion", array('noVista')); ?>" enctype="multipart/form-data" method="POST" >
				    	<div class="input-field col s12 m4 l4 xl4">
						    <select name="lectivo">
						      <option value="" disabled selected>Año lectivo</option>
						      <option value="2019_2020">2019 - 2020</option>
						    </select>
						    <label>Seleccionar año lectivo</label>
						</div>
						<div class="errorTxt1"></div>

						<div class="file-field input-field col s12 m4 l4 xl4">
						      <div class="btn">
						        <span>Foto alumno</span>
						        <input type="file" id="fotoAlumnoDiv1" name="fotoAlumnoDiv1" >
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						</div>
						<div class="errorTxt2"></div>

						<div class="input-field col s12 m4 l4 xl4">
						    <select name="gradoCursar">
						      	<option value="" disabled selected>Grado a cursar</option>
						      <?php foreach(pag_grados_colegios() as $grados) { ?>
						      	<option value="<?php echo $grados['id_grado_colegio']; ?>"><?php echo $grados['descripcion_grado_Colegio']; ?></option>
						      <?php } ?>
						    </select>
						    <label>Grado que solicita</label>
						</div>
						<div class="errorTxt3"></div>

					</div>
				</div> <!-- DIV formularioRenovacionInputs -->
			</div> <!-- DIV formularioRenovacion Card panel -->
		</div>
	</div>

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
							<input id="" type="text" class="validate" name="nombreAlumno">
							<label for="">Primer nombre</b>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="segundoNombreAlumno">
							<label for="">Segundo nombre</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="apellidoAlumno">
							<label for="">Primer apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="segundoApellidoAlumno">
							<label for="">Segundo apellido</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="date" name="fecha_nacimiento"><br>
							<label for="">Fecha de nacimiento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipoDocumentoAlumno" id="tipoDocumentoAlumno" value="">
							<select id="tipoDocumentoAlumnoSelect">
								<option value="" disabled selected>Seleccionar tipo documento</option>
								<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
							</select>
							<label>Tipo de documento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="number" class="validate" name="numeroDocumentoAlumno">
							<label for="">N&uacute;mero de documento</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="ciudadExpedicionDtoAlumno">
							<label for="">Ciudad de expedici&oacute;n</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="email" class="validate" name="correoAlumno">
							<label for="">Correo</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="email" class="validate" name="confirmarCorreoAlumno">
							<label for="">Confirmar correo</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="gradoAlumno" id="gradoAlumno" value="">
							<select id="gradoAlumnoSelect">
								<option value="" disabled selected>Grado en el que ingreso el alumno</option>
						      <?php foreach(pag_grados_colegios() as $grados) { ?>
						      	<option value="<?php echo $grados['id_grado_colegio']; ?>"><?php echo $grados['descripcion_grado_Colegio']; ?></option>
						      <?php } ?>
							</select>
							<label>Grado en el que el estudiante ingreso al Centro Educativo Shalom por primera vez:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="ciudadResidenciaAlumno">
							<label for="">Ciudad de residencia</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="comunaAlumno">
							<label for="">Comuna o Localidad</label>
						</div>	
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="direccionAlumno">
							<label for="">Direcci&oacute;n de residencia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="barrioAlumno">
							<label for="">Barrio actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="telefonoAlumno">
							<label for="">Tel. de residencia actual:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="cantidadHermanoAlumno" id="cantidadHermanoAlumno" value="">
							<select id="cantidadHermanoAlumnoSelect">
								<option value="" disabled selected>Seleccionar cantidad</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6+">+ 6</option>
							</select>
							<label>N&uacute;mero de hermanos:</label>
						</div>
						<div class="input-field col s12 m8 l8 xl8">
							<input id="" type="text" class="validate" name="permaneceEstudianteTarde">
							<label for="">Con quien permanece el estudiante en las tardes:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="discapacidadEstudiante" id="discapacidadEstudiante" value="">
							<select id="discapacidadEstudianteSelect">
								<option value="" disabled selected>Discapacidad</option>
						      <?php foreach(pag_discapacidad_medica() as $discapacidadEstudiante) { ?>
						      	<option value="<?php echo $discapacidadEstudiante['id_discapacidad_medica']; ?>"><?php echo $discapacidadEstudiante['descripcion_discapacidad_medica']; ?></option>
						      <?php } ?>
							</select>
							<label>El estudiante presenta discapacidad, integrados Y no integrados a la educación formal:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="grupoEtnico" id="grupoEtnico">
							<select id="grupoEtnicoSelect">
								<option value="" disabled selected>Seleccionar</option>
						      <?php foreach(pag_grupos_etnicos() as $grupoEtnico) { ?>
						      	<option value="<?php echo $grupoEtnico['id_grupos_etnicos']; ?>"><?php echo $grupoEtnico['descripcion_grupos_etnicos']; ?></option>
						      <?php } ?>
							</select>
							<label>Pertenece a grupos étnicos:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="terapiaAlumno" id="terapiaAlumno" value="">
							<select id="terapiaAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(terapias() as $terapia) { ?>
						      	<option value="<?php echo $terapia['id_terapia']; ?>"><?php echo utf8_encode($terapia['descripcion_terapia']); ?></option>
						      <?php } ?>
							</select>
							<label>Ha recibido terapia de:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="condicionMedica" id="condicionMedica">
							<select id="condicionMedicaSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_opciones_true_false() as $opcion) { ?>
						      	<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo $opcion['descripcion_opciones']; ?></option>
						      <?php } ?>
							</select>
							<label>Tiene alguna condici&oacute;n m&eacute;dica:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="relevanteAlumno" id="relevanteAlumno">
							<select id="relevanteAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_opciones_true_false() as $opcion) { ?>
						      	<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo $opcion['descripcion_opciones']; ?></option>
						      <?php } ?>
							</select>
							<label>Relevante:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="deCuidado" id="deCuidado">
							<select id="deCuidadoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_opciones_true_false() as $opcion) { ?>
						      	<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo $opcion['descripcion_opciones']; ?></option>
						      <?php } ?>
							</select>
							<label>De cuidado:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="terapiaActualmenteAlumno" id="terapiaActualmenteAlumno" value="">
 							<select id="terapiaActualmenteAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_opciones_true_false() as $opcion) { ?>
						      	<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo $opcion['descripcion_opciones']; ?></option>
						      <?php } ?>
							</select>
							<label>Actualmente esta en terapia:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="cualTerapiaAlumno" id="cual">
							<label for="">Cual</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipoSangreAlumno" id="tipoSangreAlumno" value="">
							<select id="tipoSangreAlumnoSelecSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_tipo_sangre() as $sangre) { ?>
						      	<option value="<?php echo $sangre['id_sangre']; ?>"><?php echo $sangre['descripcion_sangre']; ?></option>
						      <?php } ?>
							</select>
							<label>Tipo de sangre:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="rhSangreAlumno" id="rhSangreAlumno">
							<select id="rhSangreAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_rh_sangre() as $rh_sangre) { ?>
						      	<option value="<?php echo $rh_sangre['id_rh_sangre']; ?>"><?php echo $rh_sangre['descripcion_rh_sangre']; ?></option>
						      <?php } ?>
							</select>
							<label>RH:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="epsAlumno" id="epsAlumno">
							<select id="epsAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_eps() as $eps) { ?>
						      	<option value="<?php echo $eps['id_eps']; ?>"><?php echo $eps['descripcion_eps']; ?></option>
						      <?php } ?>
							</select>
							<label>EPS/Seguro de accidentes:</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input id="" type="text" class="validate" name="cualEPSAlumno">
							<label for="">¿Cual?</label>
						</div>
						<div class="input-field col s12 m4 l4 xl4">
							<input type="hidden" name="tipoEscrituraAlumno" id="tipoEscrituraAlumno" value="">
							<select id="tipoEscrituraAlumnoSelect">
								<option value="" disabled selected>Seleccionar:</option>
								<?php foreach(pag_tipo_escritura() as $tipoEscritura) { ?>
						      	<option value="<?php echo $tipoEscritura['id_tipo_escritura']; ?>"><?php echo $tipoEscritura['descripcion_tipo_escritura']; ?></option>
						      <?php } ?>
							</select>
							<label>Tipo de escritura:</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="datosAcudienteMasculino col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ACUDIENTE MASCULINO</b>
					</h1>
				</center>
				<div class="row">
					<div class="input-field col s12 m12 l12 xl12">
						<input id="" type="text" class="validate" name="nombresAcudienteMen">
						<label for="">Nombres y apellidos</label>
					</div>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="tipoDtoAcudienteMen" id="tipoDtoAcudienteMen" value="">
					<select id="tipoDtoAcudienteMenSelect">
						<option value="" disabled selected>Seleccione un tipo de dto.</option>
						<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
					</select>
					<label>Tipo de documento</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="number" class="validate" name="numeroDocumentoMenAcudienteMen">
					<label for="">N&uacute;mero de documento</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estadoSentimentalAcudienteMen" id="estadoSentimentalAcudienteMen">
					<select id="estadoSentimentalAcudienteMenSelect">
						<option value="" disabled selected>Seleccionar:</option>
						<?php foreach(pag_estado_civil() as $civil) { ?>
									<option value="<?php echo $civil['id_estado_civil']; ?>"><?php echo utf8_encode($civil['descripcion_estado_civil']); ?></option>
								<?php } ?>
					</select>
					<label>Estado civil:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="direccionAcudienteMen">
					<label for="">Direcci&oacute;n de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estratoSocialAcudienteMen" id="estratoSocialAcudienteMen">
					<select id="estratoSocialAcudienteMenSelect">
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
					<input id="" type="text" class="validate" name="telefonoAcudienteMen">
					<label for="">Telefono de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="telefonoOficinaAcudienteMen">
					<label for="">Telefono oficina actual:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="numeroCelularAcudienteMen">
					<label for="">Numero del celular:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="email" class="validate" name="emailAcudienteMen">
					<label for="">Correo electronico:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="empresaTrabajaAcudienteMen">
					<label for="">Empresa donde trabaja:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="profesionAcudienteMen">
					<label for="">Profesion:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="ocupacionalActualAcudienteMen">
					<label for="">Ocupacion actual:</label>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="datosAcudienteMasculino col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ACUDIENTE FEMENINO</b>
					</h1>
				</center>
				<div class="row">
					<div class="input-field col s12 m12 l12 xl12">
						<input id="" type="text" class="validate" name="nombresAcudienteFem">
						<label for="">Nombres y apellidos</label>
					</div>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="tipoDtoAcudienteFem" id="tipoDtoAcudienteFem" value="">
					<select id="tipoDtoAcudienteFemSelect">
						<option value="" disabled selected>Seleccione un tipo de dto.</option>
						<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
					</select>
					<label>Tipo de documento</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<label for="">N&uacute;mero de documento</label>
					<input id="" type="number" class="validate" name="numeroDocumentoMenAcudienteFem">
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estadoSentimentalAcudienteFem" id="estadoSentimentalAcudienteFem">
					<select id="estadoSentimentalAcudienteFemSelect">
						<option value="" disabled selected>Seleccionar:</option>
						<?php foreach(pag_estado_civil() as $civil) { ?>
									<option value="<?php echo $civil['id_estado_civil']; ?>"><?php echo utf8_encode($civil['descripcion_estado_civil']); ?></option>
								<?php } ?>
					</select>
					<label>Estado civil:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="direccionAcudienteFem">
					<label for="">Direcci&oacute;n de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estratoSocialAcudienteFem" id="estratoSocialAcudienteFem">
					<select id="estratoSocialAcudienteFemSelect">
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
					<input id="" type="text" class="validate" name="telefonoAcudienteFem">
					<label for="">Telefono de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="telefonoOficinaAcudienteFem">
					<label for="">Telefono oficina actual:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="numeroCelularAcudienteFem">
					<label for="">Numero del celular:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="email" class="validate" name="emailAcudienteFem">
					<label for="">Correo electronico:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="empresaTrabajaAcudienteFem">
					<label for="">Empresa donde trabaja:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="profesionAcudienteFem">
					<label for="">Profesion:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="ocupacionalActualAcudienteFem">
					<label for="">Ocupacion actual:</label>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="container">
			<div class="espacio col m1 l1 xl1">&nbsp;</div>
			<div class="datosAdultoResponsable col s12 m10 l10 xl10 card-panel" style="border-radius: 12px; ">
				<center>
					<h1>
						<i class="material-icons small">portrait</i>
						<b>DATOS DEL ADULTO RESPONSABLE</b>
					</h1>
				</center>
				<div class="row">
					<div class="input-field col s12 m12 l12 xl12">
						<input id="" type="text" class="validate" name="nombresAdultoResponsable">
						<label for="">Nombres y apellidos</label>
					</div>
				</div>

				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="tipoDocumentoAdultoResponsable" id="tipoDocumentoAdultoResponsable">
					<select id="tipoDocumentoAdultoResponsableSelect">
						<option value="" disabled selected>Seleccione un tipo de dto.</option>
						<?php foreach(pag_tipo_documento() as $documento) { ?>
									<option value="<?php echo $documento['id_tipo_documento']; ?>"><?php echo utf8_encode($documento['id_descripcion_documento']); ?></option>
								<?php } ?>
					</select>
					<label>Tipo de documento</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="number" class="validate" name="numeroDocumentoAdultoResponsable">
					<label for="">N&uacute;mero de documento</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estadoSentimentalAdultoResponsable" id="estadoSentimentalAdultoResponsable">
					<select id="estadoSentimentalAdultoResponsableSelect">
						<option value="" disabled selected>Seleccionar:</option>
						<?php foreach(pag_estado_civil() as $civil) { ?>
									<option value="<?php echo $civil['id_estado_civil']; ?>"><?php echo utf8_encode($civil['descripcion_estado_civil']); ?></option>
								<?php } ?>
					</select>
					<label>Estado civil:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="direccionResponsable">
					<label for="">Direcci&oacute;n de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input type="hidden" name="estratoSocialAdultoResponsable" id="estratoSocialAdultoResponsable">
					<select id="estratoSocialAdultoResponsableSelect">
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
					<input id="" type="text" class="validate" name="telefonoAdultoResponsable">
					<label for="">Telefono de residencia:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="telefonoOficinaAdultoResponsable">
					<label for="">Telefono oficina actual:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="numeroCelularAdultoResponsable">
					<label for="">Numero del celular:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="email" class="validate" name="emailAdultoResponsable">
					<label for="">Correo electronico:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="empresaDondeTrabajaAdultoResponsable">
					<label for="">Empresa donde trabaja:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="profesionAdultoResponsable">
					<label for="">Profesion:</label>
				</div>
				<div class="input-field col s12 m4 l4 xl4">
					<input id="" type="text" class="validate" name="ocupacionalActualAdultoResponsable">
					<label for="">Ocupacion actual:</label>
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
						<span>Registro Civil</span>
						<input type="file" name="registroCivilFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Tarjeta de identidad</span>
						<input type="file" name="tarjetaIdentidadFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Carnet de vacunaci&oacute;n</span>
						<input type="file" name="carnetVacunacionFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>

				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Carnet EPS</span>
						<input type="file" name="carnetEPSFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Certificado medico</span>
						<input type="file" name="certificadoMedicoFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Certificado visual</span>
						<input type="file" name="certificadoVisualFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Certificado auditivo</span>
						<input type="file" name="certificadoAuditivoFile">
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
						<b>ADJUNTAR DOCUMENTACI&Oacute;N</b>
					</h1>
				</center>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>C&eacute;dula padre 150%</span>
						<input type="file" name="cedulaPadre150File">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>C&eacute;dula madre 150%</span>
						<input type="file" name="cedulaMadre150File">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Carta laboral Padre</span>
						<input type="file" name="cartaLaboralPadreFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Carta laboral Madre</span>
						<input type="file" name="cartaLaboralMadreFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="file-field input-field col s12 m4 l4 xl4">
					<div class="btn">
						<span>Recibo p&uacute;blico (agua y luz)</span>
						<input type="file" name="reciboPublicoFile">
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
					<div class="file-field input-field col s12 m4 l4 xl4">
						<div class="btn">
							<span>Declaraci&oacute;n de renta</span>
							<input type="file" name="declaracionRentaFile">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m8 l8 xl8">
						<div class="btn">
							<span>Certificado de ingreso avalado por un contador</span>
							<input type="file" name="certificadoIngresoAvaladoFile">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m4 l4 xl4">
						<div class="btn">
							<span>Tarjeta profesional contador</span>
							<input type="file" name="tarjetaProfesionalContadorFile">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field input-field col s12 m8 l8 xl8">
						<div class="btn">
							<span>Antecedentes Disciplinarios Contador</span>
							<input type="file" name="antecedentesDisciplinariosContadorFile">
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
			<button type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file" type="button" name="action" style="position: fixed; z-index: 10; bottom: 20px; right: 40px;">RENOVAR CUPO
			</button>
			<a href="<?php echo addLib(''); ?>">
				<button type="button" class="btn red waves-effect waves-light right animated infinite rubberBand" type="button" name="action" style="position: fixed; z-index: 10; bottom: 20px; right: 240px;">CANCELAR RENOVACI&Oacute;N
				</button>
			</a>
		</center>
	</div>
</form>