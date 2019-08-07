<?php  require_once("../web/templates/Encabezado_Formularios/headerFormEdicion.html.php"); ?>


<div class="row">
	<div class="formulariorenovacionDetalle s12 m12 l12" style="margin-top: 15px;">
			<br>
		<center>
			<h5>
				<b>DATOS DEL ALUMNO</b>
			</h5>
		</center>
		<br>
		
		<div class="informacion s12 m12 l12 xl12">
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>Foto del alumno</b>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>Tipo de documento: </b>
					<select name="">
						<?php foreach ($tipoDocumentos as $tipo) { ?>
								<?php if($tipo['id_tipo_documento'] == $alumno['tipo_documento']){ ?>
									<option value="<?php echo $tipo['id_tipo_documento']; ?>" selected><?php echo utf8_encode($tipo['id_descripcion_documento']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $tipo['id_tipo_documento']; ?>"><?php echo utf8_encode($tipo['id_descripcion_documento']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>N&uacute;mero de documento:</b> 
					<input type="text" value="<?php echo $alumno['id_alumno']; ?>" name="id_alumno"> 
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>Ciudad de expedici&oacute;n documento: </b>
					<input type="text" value="<?php echo $alumno['ciudad_expedicion_documento']; ?>" name="ciudad_expedicion_documento">
				</p>
			</div>

			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Nombre
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['primer_nombre']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Segundo nombre
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['segundo_nombre']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Apellido
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['primer_apellido']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Segundo apellido
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['segundo_apellido']; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Fecha de nacimiento <br>
					</b>
					
					<input type="date" value="<?php echo $alumno['fecha_nacimiento']; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Grado que ingreso
					</b>
					
					<select name="">
						<?php foreach ($grados as $grado) { ?>
								<?php if($grado['id_grado_colegio'] == $alumno['grado_que_ingreso']){ ?>
									<option value="<?php echo $grado['id_tipo_documento']; ?>" selected><?php echo utf8_encode($grado['descripcion_grado_Colegio']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $grado['id_tipo_documento']; ?>"><?php echo utf8_encode($grado['descripcion_grado_Colegio']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Ciudad de residencia
					</b>
					<input type="text" value="<?php echo $alumno['ciudad_residencia']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Comuna o Localidad
					</b>

					<input type="text" value="<?php echo $alumno['comuna_localidad']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Direccion residencia
					</b>

					<input type="text" value="<?php echo $alumno['direccion_residencia']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Barrio actual
					</b>

					<input type="text" value="<?php echo $alumno['barrio_actual']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Telefono residencia
					</b>
					<input type="number" value="<?php echo $alumno['telefono_residencia_actual']; ?>" required="">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Nro hermanos
					</b>
					<br>
					<input type="number" value="<?php echo $alumno['nro_hermanos']; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Con quien permanece el alumno en la tarde?
					</b>
					<input type="text" value="<?php echo $alumno['estudiante_permanece_en_la_tarde']; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Presenta discapacidad?
					</b>

					<select name="">
						<?php foreach ($discapacidades as $discapacidad) { ?>
								<?php if($discapacidad['id_discapacidad_medica'] == $alumno['presenta_discapacidad']){ ?>
									<option value="<?php echo $discapacidad['id_discapacidad_medica']; ?>" selected><?php echo utf8_encode($discapacidad['descripcion_discapacidad_medica']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $discapacidad['id_discapacidad_medica']; ?>"><?php echo utf8_encode($discapacidad['descripcion_discapacidad_medica']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Pertenece a grupos etnicos?
					</b>
					<select name="">
						<?php foreach ($gruposEtnicos as $grupoEtnico) { ?>
								<?php if($grupoEtnico['id_grupos_etnicos'] == $alumno['pertenece_grupos_etnicos']){ ?>
									<option value="<?php echo $grupoEtnico['id_grupos_etnicos']; ?>" selected><?php echo utf8_encode($grupoEtnico['descripcion_grupos_etnicos']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $grupoEtnico['id_grupos_etnicos']; ?>"><?php echo utf8_encode($grupoEtnico['descripcion_grupos_etnicos']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>

				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Ha recibido terapida de...
					</b>
					<select name="">
						<?php foreach ($terapias as $terapia) { ?>
								<?php if($terapia['id_terapia'] == $alumno['ha_recibido_terapia_de']){ ?>
									<option value="<?php echo $terapia['id_terapia']; ?>" selected><?php echo utf8_encode($terapia['descripcion_terapia']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $terapia['id_terapia']; ?>"><?php echo utf8_encode($terapia['descripcion_terapia']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica?
					</b>
					<select name="">
						<?php foreach ($opciones as $opcion) { ?>
								<?php if($opcion['id_opciones'] == $alumno['condicion_medica']){ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>" selected><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>

				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica relevante?
					</b>
					<select name="">
						<?php foreach ($opciones as $opcion) { ?>
								<?php if($opcion['id_opciones'] == $alumno['condicion_medica_relevante']){ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>" selected><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>

				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica de cuidado?
					</b>
					<select name="">
						<?php foreach ($opciones as $opcion) { ?>
								<?php if($opcion['id_opciones'] == $alumno['condicion_medica_cuidado']){ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>" selected><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>

				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Actualmente en terapia?
					</b>
					<select name="">
						<?php foreach ($opciones as $opcion) { ?>
								<?php if($opcion['id_opciones'] == $alumno['actualmente_terapia']){ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>" selected><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $opcion['id_opciones']; ?>"><?php echo utf8_encode($opcion['descripcion_opciones']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						¿Cual terapia?
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['cual_terapia']; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Tipo de sangre
					</b>
					<br>
					<select name="">
						<?php foreach ($tipoSangre as $sangre) { ?>
								<?php if($sangre['id_sangre'] == $alumno['tipo_sangre']){ ?>
									<option value="<?php echo $sangre['id_sangre']; ?>" selected><?php echo utf8_encode($sangre['descripcion_sangre']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $sangre['id_sangre']; ?>"><?php echo utf8_encode($sangre['descripcion_sangre']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						RH
					</b>
					<br>
					<select name="">
						<?php foreach ($rhSangre as $sangre) { ?>
								<?php if($sangre['id_rh_sangre'] == $alumno['rh_sangre']){ ?>
									<option value="<?php echo $sangre['id_rh_sangre']; ?>" selected><?php echo utf8_encode($sangre['descripcion_rh_sangre']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $sangre['id_rh_sangre']; ?>"><?php echo utf8_encode($sangre['descripcion_rh_sangre']); ?></option>
								<?php } ?>
						<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						EPS
					</b>
					<select>
					<?php foreach ($eps as $d_eps) { ?>
								<?php if($d_eps['id_rh_sangre'] == $alumno['eps']){ ?>
									<option value="<?php echo $d_eps['id_eps']; ?>" selected><?php echo utf8_encode($d_eps['descripcion_eps']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $d_eps['id_eps']; ?>"><?php echo utf8_encode($d_eps['descripcion_eps']); ?></option>
								<?php } ?>
						<?php } ?>
						</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>	
						¿Cual EPS?
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['cual_eps']; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Tipo de escritura
					</b>
					<select>
					<?php foreach ($tipoEscritura as $escritura) { ?>
								<?php if($escritura['id_tipo_escritura'] == $alumno['tipo_escritura']){ ?>
									<option value="<?php echo $escritura['id_tipo_escritura']; ?>" selected><?php echo utf8_encode($escritura['descripcion_tipo_escritura']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $escritura['id_tipo_escritura']; ?>"><?php echo utf8_encode($escritura['descripcion_tipo_escritura']); ?></option>
								<?php } ?>
					<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Año lectivo
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['ano_lectivo']; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estado en el Sistema
					</b>
					<br>
					<input type="text" value="<?php echo $alumno['estado']; ?>">
				</p>
			</div>
			
		</div>
		<br>


		<!-- =========================================================================== -->
		
		<div class="informacion s12 m12 l12 xl12">
			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>DATOS DEL ACUDIENTE</b>
					</h5>
				</center>
			</div>
			<br>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Identificaci&oacute;n
					</b>
					<?php echo $alumno[36]; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Nombre y apellido
					</b>
					<?php echo $alumno[38]; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estado civil
					</b>
					<select>
					<?php foreach ($estadosCiviles as $estadoCivil) { ?>
								<?php if($estadoCivil['id_estado_civil'] == $alumno[39]){ ?>
									<option value="<?php echo $estadoCivil['id_estado_civil']; ?>" selected><?php echo utf8_encode($estadoCivil['descripcion_estado_civil']); ?></option>
								<?php }else{ ?>
									<option value="<?php echo $estadoCivil['id_estado_civil']; ?>"><?php echo utf8_encode($estadoCivil['descripcion_estado_civil']); ?></option>
								<?php } ?>
					<?php } ?>
					</select>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Direccion residencia
					</b>

					<input type="text" value="<?php echo $alumno[40]; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estrato social
					</b>

					<input type="number" value="<?php echo $alumno[41]; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Telefono residencia
					</b>
					<input type="text" value="<?php echo $alumno[42]; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Telefono Oficina
					</b>
					<input type="text" value="<?php echo $alumno[43]; ?>" required>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Celular
					</b>
					<?php echo $alumno[44]; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Correo
					</b>
					<br>
					<?php echo $alumno[45]; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Empresa donde labora
					</b>

					<input type="text" value="<?php echo $alumno[46]; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Profesion
					</b>

					<input type="text" value="<?php echo $alumno[47]; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Ocupacion actual
					</b>
					<br>
					<input type="text" value="<?php echo $alumno[48]; ?>">
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estado en el sistema
					</b>
					<br>
					<input type="text" value="<?php echo $alumno[50]; ?>">
				</p>
			</div>

		</div>

		<!-- =========================================================================== -->

		<div class="informacion s12 m12 l12 xl12">
			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>DATOS DEL ACUDIENTE</b>
					</h5>
				</center>
			</div>
			<br>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Identificaci&oacute;n
					</b>
					<br>
					<?php echo $alumno['id_persona']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Nombre y apellido
					</b>
					<br>
					<?php echo $alumno['nombres_apellidos']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estado civil
					</b>
					<br>
					<?php echo $alumno['estado_civil']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Direccion residencia
					</b>
					<br>
					<?php echo $alumno['direccion_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estrato social
					</b>
					<br>
					<?php echo $alumno['estrato_social']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Telefono residencia
					</b>
					<br>
					<?php echo $alumno['telefono_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Telefono Oficina
					</b>
					<br>
					<?php echo $alumno['telefono_oficina_actual']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Celular
					</b>
					<br>
					<?php echo $alumno['numero_celular']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Correo
					</b>
					<br>
					<?php echo $alumno['correo_persona']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Empresa donde labora
					</b>
					<br>
					<?php echo $alumno['empresa_donde_trabaja']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Profesion
					</b>
					<br>
					<?php echo $alumno['profesion_persona']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Ocupacion actual
					</b>
					<br>
					<?php echo $alumno['ocupacion_actual']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						Estado en el sistema
					</b>
					<br>
					<?php echo $alumno['estado']; ?>
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						
					</b>
					<br>
					
				</p>
			</div>
			<div class="col s12 m3 l3 xl3">
				<p>
					<b>
						
					</b>
					<br>
					
				</p>
			</div>

		</div>
		<div class="row">
		<div class="informacion s12 m12 l12 xl12">
			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>INFORMACI&Oacute;N ADJUNTADA - ALUMNO</b>
					</h5>
				</center>
				<?php 

            $extension_rc = explode(".", $alumno['registro_civil']);
            if($extension_rc[1] == "jpeg" OR $extension_rc[1] == "jpg" OR $extension_rc[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/registro_civil-".$alumno['registro_civil'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - REGISTRO CIVIL</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - REGISTRO CIVIL</button>
            <?php } 

            $extension_ti = explode(".", $alumno['tarjeta_identidad']);
            if($extension_ti[1] == "jpeg" OR $extension_ti[1] == "jpg" OR $extension_ti[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/tarjeta_identidad-".$alumno['tarjeta_identidad'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - TARJETA IDENTIDAD</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - TARJETA IDENTIDAD</button>
            <?php } 


            $extension_cv = explode(".", $alumno['carnet_vacunacion']);
            if($extension_cv[1] == "jpeg" OR $extension_cv[1] == "jpg" OR $extension_cv[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/carnet_vacunacion-".$alumno['carnet_vacunacion'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARNET VACUNACION</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CARNET VACUNACION</button>
            <?php }
            

            $extension_eps = explode(".", $alumno['carnet_eps']);
            if($extension_eps[1] == "jpeg" OR $extension_eps[1] == "jpg" OR $extension_eps[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/carnet_vacunacion-".$alumno['carnet_eps'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARNET EPS</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CARNET EPS</button>
            <?php }



             $extension_cm = explode(".", $alumno['certificado_medico']);
            if($extension_cm[1] == "jpeg" OR $extension_cm[1] == "jpg" OR $extension_cm[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/certificado_medico-".$alumno['certificado_medico'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO MEDICO</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CERTIFICADO MEDICO</button>
            <?php } 


            $extension_cvi = explode(".", $alumno['certificado_visual']);
            if($extension_cvi[1] == "jpeg" OR $extension_cvi[1] == "jpg" OR $extension_cvi[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/certificado_visual-".$alumno['certificado_visual'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO VISUAL</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CERTIFICADO VISUAL</button>
            <?php }



            $extension_caudi = explode(".", $alumno['certificado_auditivo']);
            if($extension_caudi[1] == "jpeg" OR $extension_caudi[1] == "jpg" OR $extension_caudi[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/certificado_auditivo-".$alumno['certificado_auditivo'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO AUDITIVO</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CERTIFICADO AUDITIVO</button>
            <?php }

            echo "<div class='col s12 m12 l12'><hr></div>";


            $extension_ccm = explode(".", $alumno['cedula_madre']);
            if($extension_ccm[1] == "jpeg" OR $extension_ccm[1] == "jpg" OR $extension_ccm[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/cedula_madre-".$alumno['cedula_madre'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CEDULA MAM&Aacute;</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CEDULA MAM&Aacute;</button>
            <?php }

            $extension_ccp = explode(".", $alumno['cedula_padre']);
            if($extension_ccp[1] == "jpeg" OR $extension_ccp[1] == "jpg" OR $extension_ccp[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/cedula_padre-".$alumno['cedula_padre'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CEDULA PAP&Aacute;</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CEDULA PAP&Aacute;</button>
            <?php } 


          
              $extension_clbm = explode(".", $alumno['carta_laboral_madre']);
            if($extension_clbm[1] == "jpeg" OR $extension_clbm[1] == "jpg" OR $extension_clbm[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/carta_laboral_madre-".$alumno['carta_laboral_madre'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARTA LABORAL MAM&Aacute;</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CARTA LABORAL MAMA&Aacute;</button>
            <?php }


            $extension_clbp = explode(".", $alumno['carta_laboral_padre']);
            if($extension_clbp[1] == "jpeg" OR $extension_clbp[1] == "jpg" OR $extension_clbp[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/carta_laboral_padre-".$alumno['carta_laboral_padre'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARTA LABORAL PAP&Aacute;</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CARTA LABORAL PAP&Aacute;</button>
            <?php }


             $extension_rcpu = explode(".", $alumno['recibo_publico']);
            if($extension_rcpu[1] == "jpeg" OR $extension_rcpu[1] == "jpg" OR $extension_rcpu[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/servicios_publicos-".$alumno['recibo_publico'];
            	?>
				<button type="button" class="btn waves-effect col s1O m10 l10 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - RECIBO P&Uacute;BLICO</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s1O m10 l10 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - RECIBO RECIBO P&Uacute;BLICO</button>
            <?php }


             echo "<div class='col s12 m12 l12'><hr></div>";

             ?>


			</div>

			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>INFORMACI&Oacute;N ADJUNTADA - SI ES INDEPENDIENTE</b>
					</h5>
				</center>
				<?php 

            $extension_dcrta = explode(".", $alumno['declaracion_renta']);
            if($extension_dcrta[1] == "jpeg" OR $extension_dcrta[1] == "jpg" OR $extension_dcrta[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/declaracion_renta-".$alumno['declaracion_renta'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - DECLARACION RENTA</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - DECLARACION RENTA</button>
            <?php } 

            $extension_cavc = explode(".", $alumno['certificado_avalado_contador']);
            if($extension_cavc[1] == "jpeg" OR $extension_cavc[1] == "jpg" OR $extension_cavc[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/certificado_ingreso_avalado_contador-".$alumno['certificado_avalado_contador'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO AVALADO</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - CERTIFICADO AVALADO</button>
            <?php } 


            $extension_adis = explode(".", $alumno['antecedentes_disciplinarios']);
            if($extension_adis[1] == "jpeg" OR $extension_adis[1] == "jpg" OR $extension_adis[1] == "png"){
            	$url = "http://localhost/centroEducativoShalom/web/documentos/alumnos/".$alumno['id_alumno']."/antecedentes_disciplinarios-".$alumno['antecedentes_disciplinarios'];
            	?>
				<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - ANTECEDENTES DISCIPLINARIOS</button>
            <?php }else{ ?>
            	<button type="button" class="btn waves-effect col s5 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER PDF - ANTECEDENTES DISCIPLINARIOS</button>
            <?php }
            
             ?>


			</div>

		</div>
	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
        $('select').material_select('destroy');
        $('select').material_select();

    });
</script>