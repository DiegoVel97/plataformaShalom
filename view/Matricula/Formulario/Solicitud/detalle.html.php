<?php  require_once("../web/templates/Encabezado_Formularios/headerForm.html.php"); ?>


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
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>Foto del alumno</b>

				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>Tipo de documento: </b> 
					<?php echo $alumno['id_descripcion_documento']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>N&uacute;mero de documento:</b> 
					<?php echo $alumno['id_alumno']; ?> 
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>Ciudad de expedici&oacute;n documento: </b>
					<?php echo $alumno['ciudad_expedicion_documento']; ?>
				</p>
			</div>

			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Nombre
					</b>
					<br>
					<?php echo $alumno['primer_nombre']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Segundo nombre
					</b>
					<br>
					<?php echo $alumno['segundo_nombre']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Apellido
					</b>
					<br>
					<?php echo $alumno['primer_apellido']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Segundo apellido
					</b>
					<br>
					<?php echo $alumno['segundo_apellido']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Fecha de nacimiento <br>
					</b>
					<br>
					<?php echo $alumno['fecha_nacimiento']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Grado que ingreso
					</b>
					<br>
					<?php echo $alumno['descripcion_grado_Colegio']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Ciudad de residencia
					</b>
					<br>
					<?php echo $alumno['ciudad_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Comuna o Localidad
					</b>
					<br>
					<?php echo $alumno['comuna_localidad']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Direccion residencia
					</b>
					<br>
					<?php echo $alumno['direccion_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Barrio actual
					</b>
					<br>
					<?php echo $alumno['barrio_actual']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono residencia
					</b>
					<?php echo $alumno['telefono_residencia_actual']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Nro hermanos
					</b>
					<br>
					<?php echo $alumno['nro_hermanos']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estudiante permanece en la tarde
					</b>
					<br>
					<?php echo $alumno['estudiante_permanece_en_la_tarde']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Presenta discapacidad?
					</b>
					<br>
					<?php echo $alumno['descripcion_discapacidad_medica']; ?>
					
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Pertenece a grupos etnicos?
					</b>
					<?php echo $alumno['descripcion_grupos_etnicos']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Ha recibido terapia de...
					</b>
					<br>
					<?php echo $alumno['descripcion_terapia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica?
					</b>
					<br>
					<?php echo $alumno['descripcion_opciones']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica relevante?
					</b>
					<br>
					<?php echo $alumno['descripcion_opciones']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Condici&oacute;n M&eacute;dica de cuidado?
					</b>
					<br>
					<?php echo $alumno['descripcion_opciones']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Actualmente en terapia?
					</b>
					<br>
					<?php echo $alumno['descripcion_opciones']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						¿Cual terapia?
					</b>
					<br>
					<?php echo $alumno['cual_terapia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Tipo de sangre
					</b>
					<br>
					<?php echo $alumno['descripcion_sangre']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						RH
					</b>
					<br>
					<?php echo $alumno['descripcion_rh_sangre']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						EPS
					</b>
					<br>
					<?php echo $alumno['descripcion_eps']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>	
						¿Cual EPS?
					</b>
					<br>
					<?php echo $alumno['cual_eps']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Tipo de escritura
					</b>
					<br>
					<?php echo $alumno['descripcion_tipo_escritura']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Año lectivo
					</b>
					<br>
					<?php echo $alumno['ano_lectivo']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado en el Sistema
					</b>
					<br>
					<?php echo $alumno['estado']; ?>
				</p>
			</div>
			
		</div>
		<br>


		<!-- =========================================================================== -->
		
		<div class="informacion s12 m12 l12 xl12">
			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>DATOS DEL ACUDIENTE MASCULINO</b>
					</h5>
				</center>
			</div>
			<br>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Tipo de documento
					</b>
					<br>
					<?php echo $alumno['id_descripcion_documento']; ?>
				</p>
			</div>

			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Identificaci&oacute;n
					</b>
					<br>
					<?php echo $alumno['id_persona_masculina']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Nombre y apellido
					</b>
					<br>
					<?php echo $alumno['nombres_apellidos']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado civil
					</b>
					<br>
					<?php echo $alumno['descripcion_estado_civil']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Direccion residencia
					</b>
					<br>
					<?php echo $alumno[40]; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estrato social
					</b>
					<br>
					<?php echo $alumno['estratoSocialMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono residencia
					</b>
					<br>
					<?php echo $alumno['telefonoMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono Oficina
					</b>
					<br>
					<?php echo $alumno['telefonoOficinaMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Celular
					</b>
					<br>
					<?php echo $alumno['celularMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Correo
					</b>
					<br>
					<?php echo $alumno['correoMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Empresa donde labora
					</b>
					<br>
					<?php echo $alumno['empresaMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Profesion
					</b>
					<br>
					<?php echo $alumno['profesionMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Ocupacion actual
					</b>
					<br>
					<?php echo $alumno['ocupacionMasculino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado en el sistema
					</b>
					<br>
					<?php echo $alumno['estadoMasculino']; ?>
				</p>
			</div>

		</div>




		<!-- =========================================================================== -->
		
		<div class="informacion s12 m12 l12 xl12">
			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>DATOS DEL ACUDIENTE FEMENINO</b>
					</h5>
				</center>
			</div>
			<br>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Identificaci&oacute;n
					</b>
					<br>
					<?php echo $alumno['id_persona_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Nombre y apellido
					</b>
					<br>
					<?php echo $alumno['nombres_apellidos_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado civil
					</b>
					<br>
					<?php echo $alumno['estado_civil_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Direccion residencia
					</b>
					<br>
					<?php echo $alumno['direccion_residencia_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estrato social
					</b>
					<br>
					<?php echo $alumno['estrato_social_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono residencia
					</b>
					<br>
					<?php echo $alumno['telefono_residencia_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono Oficina
					</b>
					<br>
					<?php echo $alumno['telefono_oficina_actual_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Celular
					</b>
					<br>
					<?php echo $alumno['numero_celular_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Correo
					</b>
					<br>
					<?php echo $alumno['correo_persona_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Empresa donde labora
					</b>
					<br>
					<?php echo $alumno['empresa_donde_trabaja_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Profesion
					</b>
					<br>
					<?php echo $alumno['profesion_persona_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Ocupacion actual
					</b>
					<br>
					<?php echo $alumno['ocupacion_actual_femenino']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado en el sistema
					</b>
					<br>
					<?php echo $alumno['estado_femenino']; ?>
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
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Identificaci&oacute;n
					</b>
					<br>
					<?php echo $alumno['id_persona']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Nombre y apellido
					</b>
					<br>
					<?php echo $alumno['nombres_apellidos']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado civil
					</b>
					<br>
					<?php echo $alumno['estado_civil']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Direccion residencia
					</b>
					<br>
					<?php echo $alumno['direccion_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estrato social
					</b>
					<br>
					<?php echo $alumno['estrato_social']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono residencia
					</b>
					<br>
					<?php echo $alumno['telefono_residencia']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Telefono Oficina
					</b>
					<br>
					<?php echo $alumno['telefono_oficina_actual']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Celular
					</b>
					<br>
					<?php echo $alumno['numero_celular']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Correo
					</b>
					<br>
					<?php echo $alumno['correo_persona']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Empresa donde labora
					</b>
					<br>
					<?php echo $alumno['empresa_donde_trabaja']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Profesion
					</b>
					<br>
					<?php echo $alumno['profesion_persona']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Ocupacion actual
					</b>
					<br>
					<?php echo $alumno['ocupacion_actual']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						Estado en el sistema
					</b>
					<br>
					<?php echo $alumno['estado']; ?>
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
				<p>
					<b>
						
					</b>
					<br>
					
				</p>
			</div>
			<div class="col s12 m4 l4 xl4">
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
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/registro_civil-".$alumno['registro_civil'];
            	
            	?>
				<button type="button" class="btn waves-effect col s12 m12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - REGISTRO CIVIL</button>
           <?php }else if($extension_rc[1] == "pdf"){ ?>
           	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/registro_civil-".$alumno['registro_civil']; ?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARNET VACUNACION</button>
            	</a>
            <?php }else{

            }

            $extension_ti = explode(".", $alumno['tarjeta_identidad']);
            if($extension_ti[1] == "jpeg" OR $extension_ti[1] == "jpg" OR $extension_ti[1] == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/tarjeta_identidad-".$alumno['registro_civil'];
            	?>

				<button type="button" class="btn waves-effect col s12 m12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - TARJETA IDENTIDAD</button>

          <?php }else if($extension_ti[1] == "pdf"){ ?>
            	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/tarjeta_identidad-".$alumno['tarjeta_identidad']; ?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - TARJETA IDENTIDAD</button>
            	</a>
            <?php }else{

            }


            $extension_cv = explode(".", $alumno['carnet_vacunacion']);
            if($extension_cv[1] == "jpeg" OR $extension_cv[1] == "jpg" OR $extension_cv[1] == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carnet_vacunacion-".$alumno['carnet_vacunacion'];
            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARNET VACUNACION</button>
            <?php }else if($extension_cv[1] == "pdf"){ ?>
            	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carnet_vacunacion-".$alumno['carnet_vacunacion']; ?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARNET VACUNACION</button>
            	</a>
            <?php }else{

            }
            

            $extension_eps = explode(".", $alumno['carnet_eps']);
            if($extension_eps[1] == "jpeg" OR $extension_eps[1] == "jpg" OR $extension_eps[1] == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carnet_eps-".$alumno['carnet_eps'];
            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARNET EPS</button>
             <?php }else if($extension_eps[1] == "pdf"){ ?>
            	
             	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carnet_eps-".$alumno['carnet_eps']; ?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARNET EPS</button>
            	</a>
            <?php }else{

            }


  if($alumno['certificado_medico'] == "No registra"){
?>

          	<div class="col s12 m12 l12">
          		<code>NO POSEE CERTIFICADO MEDICO</code>
          	</div>
<?php
	          }else{

             $extension_cm = explode(".", $alumno['certificado_medico']);
            if($extension_cm[1] == "jpeg" OR $extension_cm[1] == "jpg" OR $extension_cm[1] == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_medico-".$alumno['certificado_medico']; ;
            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO MEDICO</button>
            <?php }else if($extension_cm[1] == "pdf"){ ?>
            	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_medico-".$alumno['certificado_medico']; ?>

            	<a href="<?PHP echo($url) ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CERTIFICADO MEDICO</button>
            	</a>
            <?php }else{

            }
        }


            $extension_cvi = explode(".", $alumno['certificado_visual']);
            if($extension_cvi[1] == "jpeg" OR $extension_cvi[1] == "jpg" OR $extension_cvi[1] == "png"){

            	$url =  "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_visual-".$alumno['certificado_visual'];
            	?>

				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO VISUAL</button>

            <?php }else if($extension_cvi[1] == "pdf"){ 

            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_visual-".$alumno['certificado_visual'];
            	
            	?>

            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CERTIFICADO VISUAL</button>
            	</a>

            <?php }else{

            }



            $extension_caudi = explode(".", $alumno['certificado_auditivo']);
            $extension_final_auditivo = end($extension_caudi);
            if($extension_final_auditivo == "jpeg" OR $extension_final_auditivo == "jpg" OR $extension_final_auditivo == "png"){

            	$url =  "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_auditivo-".$alumno['certificado_auditivo'];
            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO AUDITIVO</button>

            <?php }else if($extension_final_auditivo == "pdf"){ ?>

            	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_auditivo-".$alumno['certificado_auditivo']; 
            	?>

            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CERTIFICADO AUDITIVO</button>
            	</a>

            <?php }else{

            }

            echo "<div class='col s12 m12 l12'><hr></div>";


            $extension_ccm = explode(".", $alumno['cedula_madre']);
            $extension_final_ccm = end($extension_ccm);
            if($extension_final_ccm == "jpeg" OR $extension_final_ccm == "jpg" OR $extension_final_ccm == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/cedula_madre-".$alumno['cedula_madre'];

            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CEDULA MAM&Aacute;</button>
           <?php }else if($extension_final_ccm == "pdf"){ 
           	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/cedula_madre-".$alumno['cedula_madre'];
           	?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARNET VACUNACION</button>
            	</a>
            <?php }else{

            }


            $extension_ccp = explode(".", $alumno['cedula_padre']);
            $final_extension_ccp = end($extension_ccp);

            if($final_extension_ccp == "jpeg" OR $final_extension_ccp == "jpg" OR $final_extension_ccp == "png"){
            	$url =  "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/cedula_padre-".$alumno['cedula_padre'];

            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CEDULA PAP&Aacute;</button>
          <?php }else if($final_extension_ccp == "pdf"){ 

            	$url  = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/cedula_padre-".$alumno['cedula_padre'];
            	
            	?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CEDULA PAPA</button>
            	</a>
            <?php }else{

            }


          if($alumno['carta_laboral_madre'] == "No registra"){
?>

          	<div class="col s12 m12 l12">
          		<code>NO POSEE CARTA LABORAL MADRE</code>
          	</div>
<?php
	          }else{

	          	$extension_clbm = explode(".", $alumno['carta_laboral_madre']);
          	$final_extension_clbm = end($extension_clbm);
             if($final_extension_clbm == "jpeg" OR $final_extension_clbm == "jpg" OR $final_extension_clbm == "png"){

            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carta_laboral_madre-".$alumno['carta_laboral_madre'];

            	?>

				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARTA LABORAL MAM&Aacute;</button>
            <?php }else if($final_extension_clbm == "pdf"){ 
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carta_laboral_madre-".$alumno['carta_laboral_madre'];
            	?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARTA LABORAL MADRE</button>
            	</a>
            <?php }else{

            }

           }



          if($alumno['carta_laboral_padre'] == "No registra"){
?>

          	<div class="col s12 m12 l12">
          		<code>NO POSEE CARTA LABORAL PADRE</code>
          	</div>
<?php
	          }else{


            $extension_clbp = explode(".", $alumno['carta_laboral_padre']);
            $final_extension_clbp = end($extension_clbp);
            if($final_extension_clbp == "jpeg" OR $final_extension_clbp == "jpg" OR $final_extension_clbp == "png"){
            	 $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carta_laboral_padre-".$alumno['carta_laboral_padre'];

            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CARTA LABORAL PAP&Aacute;</button>
            <?php }else if($final_extension_clbp == "pdf"){ 
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/carta_laboral_padre-".$alumno['carta_laboral_padre'];

            	?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CARTA LABORAL PADRE</button>
            	</a>
            <?php }else{

            }

}
             $extension_rcpu = explode(".", $alumno['recibo_publico']);
             $final_extension_rcpu = end($extension_rcpu);
            if($final_extension_rcpu == "jpeg" OR $final_extension_rcpu == "jpg" OR $final_extension_rcpu == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/servicios_publicos-".$alumno['recibo_publico'];

            	?>
				<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - RECIBO P&Uacute;BLICO</button>
            <?php }else if($final_extension_rcpu == "pdf"){ 
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/servicios_publicos-".$alumno['recibo_publico'];
            	?>
            	<a href="<?php echo $url; ?>" target="_blank">
            		<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - RECIBO PUBLICO</button>
            	</a>
            <?php }else{

            }


             echo "<div class='col s12 m12 l12'><hr></div>";
            
             ?>


			</div>

			<div class="col s112 m12 l12 xl12">
				<center>
					<h5>
						<b>INFORMACI&Oacute;N ADJUNTADA - SI ES INDEPENDIENTE</b>
					</h5>
				</center>
		<?php foreach($documentacionIndepentiente as $documento){
			 if($documento['id_documentacion_independiente'] == $alumno['id_documentacion_independiente']){

			 $extension_dcrta = explode(".", $documento['declaracion_renta']); 
			 $extensionFinal = end($extension_dcrta); 

			
            if($extensionFinal == "jpeg" OR $extensionFinal == "jpg" OR $extensionFinal == "png"){
            	$url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/declaracion_renta-".$documento['declaracion_renta'];
            	 ?>

            	<button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - DECLARACION RENTA</button>

            <?php }else{ ?>

            	<?php $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/declaracion_renta-".$documento['declaracion_renta'];
            	?>
                  <a href="<?php echo $url; ?>" target="_blank">
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - DECLARACION RENTA</button>
                  </a>
            <?php }



            $extension_cavc = explode(".", $documento['certificado_avalado_contador']);
            $extensionFinal_cavc = end($extension_cavc);
            if($extensionFinal_cavc == "jpeg" OR $extensionFinal_cavc == "jpg" OR $extensionFinal_cavc == "png"){

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_ingreso_avalado_contador-".$documento['certificado_avalado_contador'];
                  ?>
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - CERTIFICADO AVALADO</button>

           <?php }else if($extensionFinal_cavc == "pdf"){ 

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/certificado_ingreso_avalado_contador-".$documento['certificado_avalado_contador'];
                ?>
                  <a href="<?php echo $url; ?>" target="_blank">
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CERTIFICADO AVALADO</button>
                  </a>

            <?php }else{
                  
            }




            $extension_acdis = explode(".", $documento['antecedentes_disciplinarios']);
            $extensionFinal_acdis = end($extension_acdis);
            if($extensionFinal_acdis == "jpeg" OR $extensionFinal_acdis == "jpg" OR $extensionFinal_acdis == "png"){

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/antecedentes_disciplinarios-".$documento['antecedentes_disciplinarios'];
                  ?>
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - ANTECEDENTES DISCIPLINARIOS</button>

           <?php }else if($extensionFinal_acdis == "pdf"){ 

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/antecedentes_disciplinarios-".$documento['antecedentes_disciplinarios'];
                ?>
                  <a href="<?php echo $url; ?>" target="_blank">
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CANTECEDENTES DISCIPLINARIOS</button>
                  </a>
                  
            <?php }else{
                  
            }



           $extension_tarjeta_contador = explode(".", $documento['tarjeta_profesional_contador']);
            $extensionFinal_tarjeta_conta = end($extension_tarjeta_contador);
            if($extensionFinal_tarjeta_conta == "jpeg" OR $extensionFinal_tarjeta_conta == "jpg" OR $extensionFinal_tarjeta_conta == "png"){

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/tarjeta_profesional-".$documento['tarjeta_profesional_contador'];
                  ?>
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>" id="verImgRC">VER IMAGEN - ANTECEDENTES DISCIPLINARIOS</button>

           <?php }else if($extensionFinal_tarjeta_conta == "pdf"){ 

                $url = "http://".$_SERVER['SERVER_NAME'].addLib('documentos/alumnos')."/".$alumno['id_alumno']."/tarjeta_profesional-".$documento['tarjeta_profesional_contador'];
                ?>
                  <a href="<?php echo $url; ?>" target="_blank">
                        <button type="button" class="btn waves-effect col s12 m12 l12 teal" style="margin:5px 5px;" value="<?php echo $url; ?>">VER PDF - CANTECEDENTES DISCIPLINARIOS</button>
                  </a>
                  
            <?php }else{
                  
            }


        } ?> 
    <?php } ?>


			</div>

		</div>
	</div>
	</div>
</div>