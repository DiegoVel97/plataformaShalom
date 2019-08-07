-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 03:06:39
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_centroeducativo_shalom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_acudiente_femenino`
--

CREATE TABLE `datos_acudiente_femenino` (
  `id_persona_femenino` int(11) NOT NULL,
  `tipo_documento_femenino` longtext NOT NULL,
  `nombres_apellidos_femenino` longtext NOT NULL,
  `estado_civil_femenino` longtext NOT NULL,
  `direccion_residencia_femenino` longtext NOT NULL,
  `estrato_social_femenino` longtext NOT NULL,
  `telefono_residencia_femenino` longtext NOT NULL,
  `telefono_oficina_actual_femenino` longtext NOT NULL,
  `numero_celular_femenino` longtext NOT NULL,
  `correo_persona_femenino` longtext NOT NULL,
  `empresa_donde_trabaja_femenino` longtext NOT NULL,
  `profesion_persona_femenino` longtext NOT NULL,
  `ocupacion_actual_femenino` longtext NOT NULL,
  `id_documentacion_independiente_femenino` int(12) DEFAULT NULL,
  `actividad_economica_femenino` longtext DEFAULT NULL,
  `ingreso_promedio_femenino` longtext DEFAULT NULL,
  `otros_ingresos_femenino` longtext DEFAULT NULL,
  `total_ingresos_femenino` longtext DEFAULT NULL,
  `estado_femenino` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_acudiente_femenino`
--

INSERT INTO `datos_acudiente_femenino` (`id_persona_femenino`, `tipo_documento_femenino`, `nombres_apellidos_femenino`, `estado_civil_femenino`, `direccion_residencia_femenino`, `estrato_social_femenino`, `telefono_residencia_femenino`, `telefono_oficina_actual_femenino`, `numero_celular_femenino`, `correo_persona_femenino`, `empresa_donde_trabaja_femenino`, `profesion_persona_femenino`, `ocupacion_actual_femenino`, `id_documentacion_independiente_femenino`, `actividad_economica_femenino`, `ingreso_promedio_femenino`, `otros_ingresos_femenino`, `total_ingresos_femenino`, `estado_femenino`) VALUES
(555555, '1', 'asdfasdf', '1', 'dsgfsgdfsg', '1', 'dsgffsdgsgdh', 'fadsf', 'gsdfg', 'diego@gmail.com', 'sdfadsf', 'dsaf', 'adsf', 0, NULL, NULL, NULL, NULL, 'activo'),
(31982208, '1', 'Sol Marina', '1', 'Cra 23 # ', '2', '5676565', '3456545', '3006227815', 'sol@hotmail.com', 'No', 'No', 'no', 1, NULL, NULL, NULL, NULL, 'activo'),
(87686787, '1', 'Sol marina', '1', 'jgjhj', '3', '798989', 'jnjjhj', 'hjhjhjhjjh', 'diego@gmail.com', 'iojkj', 'kjkjk', 'kjk', 0, NULL, NULL, NULL, NULL, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_acudiente_financiero`
--

CREATE TABLE `datos_acudiente_financiero` (
  `id_acudiente_financiero` int(12) NOT NULL,
  `nombre_acudiente_financiero` longtext NOT NULL,
  `primer_apellido_acudiente_financiero` longtext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `lugar_nacimiento_acudiente_financiero` longtext NOT NULL,
  `fecha_nacimiento_acudiente_financiero` longtext NOT NULL,
  `edad_acudiente_financiero` longtext NOT NULL,
  `nacionalidad_acudiente_financiero` longtext NOT NULL,
  `tipo_documento_acudiente_financiero` int(12) NOT NULL,
  `direccion_residencia_acudiente_financiero` longtext NOT NULL,
  `barrio_acudiente_financiero` longtext NOT NULL,
  `telefono_acudiente_financiero` longtext DEFAULT NULL,
  `celular_acudiente_financiero` longtext DEFAULT NULL,
  `estado_acudiente_financiero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_acudiente_masculino`
--

CREATE TABLE `datos_acudiente_masculino` (
  `id_persona_masculina` int(11) NOT NULL,
  `tipo_documento` longtext NOT NULL,
  `nombres_apellidos` longtext NOT NULL,
  `estado_civil` longtext NOT NULL,
  `direccion_residencia` longtext NOT NULL,
  `estrato_social` longtext NOT NULL,
  `telefono_residencia` longtext NOT NULL,
  `telefono_oficina_actual` longtext NOT NULL,
  `numero_celular` longtext NOT NULL,
  `correo_persona` longtext NOT NULL,
  `empresa_donde_trabaja` longtext NOT NULL,
  `profesion_persona` longtext NOT NULL,
  `ocupacion_actual` longtext NOT NULL,
  `id_documentacion_independiente` int(12) DEFAULT NULL,
  `actividad_economica` longtext DEFAULT NULL,
  `ingreso_promedio` longtext DEFAULT NULL,
  `otros_ingresos` longtext DEFAULT NULL,
  `total_ingresos` longtext DEFAULT NULL,
  `estado` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_acudiente_masculino`
--

INSERT INTO `datos_acudiente_masculino` (`id_persona_masculina`, `tipo_documento`, `nombres_apellidos`, `estado_civil`, `direccion_residencia`, `estrato_social`, `telefono_residencia`, `telefono_oficina_actual`, `numero_celular`, `correo_persona`, `empresa_donde_trabaja`, `profesion_persona`, `ocupacion_actual`, `id_documentacion_independiente`, `actividad_economica`, `ingreso_promedio`, `otros_ingresos`, `total_ingresos`, `estado`) VALUES
(87887, '1', 'Jorge', '1', 'JJJJN', '3', '8767', '9876876', '8989789', 'diego@gmail.com', 'JH', 'JHJ', 'J', 0, NULL, NULL, NULL, NULL, 'activo'),
(6576555, '2', 'adsfasf', '1', 'asdfafdf', '1', 'asdf', 'asdf', 'asdf', 'diego@gmail.com', 'ddf', 'fsaf', 'adfsf', 0, NULL, NULL, NULL, NULL, 'activo'),
(94281939, '1', 'Jorge Velez', '1', 'Cra 23 # 52 - 23', '2', '4356576', '4675645', '3178430551', 'joevel9@hotmail.com', 'Jorvel pinturas y acabados sas', 'ontratista', 'ontratista', 1, NULL, NULL, NULL, NULL, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_adulto_responsable`
--

CREATE TABLE `datos_adulto_responsable` (
  `id_persona` int(11) NOT NULL,
  `tipo_documento` longtext NOT NULL,
  `nombres_apellidos` longtext NOT NULL,
  `estado_civil` longtext NOT NULL,
  `direccion_residencia` longtext NOT NULL,
  `estrato_social` longtext NOT NULL,
  `telefono_residencia` longtext NOT NULL,
  `telefono_oficina_actual` longtext NOT NULL,
  `numero_celular` longtext NOT NULL,
  `correo_persona` longtext NOT NULL,
  `empresa_donde_trabaja` longtext NOT NULL,
  `profesion_persona` longtext NOT NULL,
  `ocupacion_actual` longtext NOT NULL,
  `estado` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_adulto_responsable`
--

INSERT INTO `datos_adulto_responsable` (`id_persona`, `tipo_documento`, `nombres_apellidos`, `estado_civil`, `direccion_residencia`, `estrato_social`, `telefono_residencia`, `telefono_oficina_actual`, `numero_celular`, `correo_persona`, `empresa_donde_trabaja`, `profesion_persona`, `ocupacion_actual`, `estado`) VALUES
(987897, '1', 'adulto', '1', 'hbhbhbh', '3', '8978897', '9769869', '9889', 'diego@gmail.com', 'klnkn', 'klnkl', 'kln', 'activo'),
(223343435, '1', 'adsfasdfdasf', '1', 'asdfasf', '1', 'asdfadfs', 'adsfa', 'fasdfasdf', 'diego@gmail.com', 'adsfads', 'fadsfads', 'sadf', 'activo'),
(1111057654, '1', 'Valeria Marin', '1', 'Calle 52 ', '4', '4567656', '678765656', '31784366175', 'Independiente@hotmail.com', 'Claro', 'claro', 'claro', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_alumno`
--

CREATE TABLE `datos_alumno` (
  `id_alumno` int(12) NOT NULL,
  `tipo_documento` longtext NOT NULL,
  `foto_alumno` longtext NOT NULL,
  `primer_nombre` longtext NOT NULL,
  `segundo_nombre` longtext NOT NULL,
  `primer_apellido` longtext NOT NULL,
  `segundo_apellido` longtext NOT NULL,
  `fecha_nacimiento` longtext NOT NULL,
  `ciudad_expedicion_documento` longtext NOT NULL,
  `correo` longtext NOT NULL,
  `grado_que_ingreso` longtext NOT NULL,
  `ciudad_residencia` longtext DEFAULT NULL,
  `comuna_localidad` longtext DEFAULT NULL,
  `direccion_residencia` longtext NOT NULL,
  `barrio_actual` longtext NOT NULL,
  `telefono_residencia_actual` longtext NOT NULL,
  `nro_hermanos` longtext DEFAULT NULL,
  `estudiante_permanece_en_la_tarde` longtext NOT NULL,
  `presenta_discapacidad` longtext NOT NULL,
  `pertenece_grupos_etnicos` int(12) DEFAULT NULL,
  `ha_recibido_terapia_de` longtext DEFAULT NULL,
  `condicion_medica` longtext DEFAULT NULL,
  `condicion_medica_relevante` longtext DEFAULT NULL,
  `condicion_medica_cuidado` longtext DEFAULT NULL,
  `actualmente_terapia` longtext DEFAULT NULL,
  `cual_terapia` longtext DEFAULT NULL,
  `tipo_sangre` longtext NOT NULL,
  `rh_sangre` longtext NOT NULL,
  `eps` longtext NOT NULL,
  `cual_eps` longtext DEFAULT NULL,
  `tipo_escritura` varchar(100) NOT NULL,
  `ano_lectivo` varchar(100) NOT NULL,
  `id_acudiente_masculino` int(12) NOT NULL,
  `id_acudiente_femenino` int(12) NOT NULL,
  `id_adulto_responsable` int(12) NOT NULL,
  `id_documentos` int(100) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_alumno`
--

INSERT INTO `datos_alumno` (`id_alumno`, `tipo_documento`, `foto_alumno`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `ciudad_expedicion_documento`, `correo`, `grado_que_ingreso`, `ciudad_residencia`, `comuna_localidad`, `direccion_residencia`, `barrio_actual`, `telefono_residencia_actual`, `nro_hermanos`, `estudiante_permanece_en_la_tarde`, `presenta_discapacidad`, `pertenece_grupos_etnicos`, `ha_recibido_terapia_de`, `condicion_medica`, `condicion_medica_relevante`, `condicion_medica_cuidado`, `actualmente_terapia`, `cual_terapia`, `tipo_sangre`, `rh_sangre`, `eps`, `cual_eps`, `tipo_escritura`, `ano_lectivo`, `id_acudiente_masculino`, `id_acudiente_femenino`, `id_adulto_responsable`, `id_documentos`, `estado`) VALUES
(90000000, '1', '56c65b109d0f7.jpeg', 'kjbkjj', 'jhj', 'hjh', 'jjhj', '1993-12-12', 'kmkmkmk', 'diego@gmail.com', '1', 'bjbjbjbj', 'jbjbj', 'jbj', 'bj', 'mjnj', '4', 'papa', '3', 1, '1', '1', '1', '1', '1', 'No registra', '2', '1', '1', 'No registra', '2', '2019_2020', 6576555, 555555, 223343435, 3, 'activo'),
(1234188670, '1', '56c65b109d0f7.jpeg', 'Diego', 'No registra', 'Velez', 'barrera', '1996-12-13', 'Cali', 'diego@gmail.com', '2', 'Cali', 'Comuna 13', 'Cra 23 # 52 - 23', 'Trebol', '4357654', '2', 'Papa', '8', 6, '7', '2', '2', '2', '2', 'No registra', '4', '1', '2', 'No registra', '1', '2019_2020', 94281939, 31982208, 1111057654, 1, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_alumno_solicitud`
--

CREATE TABLE `datos_alumno_solicitud` (
  `id_alumno_solicitud` int(12) NOT NULL,
  `tipo_dto_alumno_solicitud` longtext NOT NULL,
  `primer_nombre_alumno_solicitud` longtext NOT NULL,
  `segundo_nombre_alumno_solicitud` longtext NOT NULL,
  `primer_apellido_alumno_solicitud` longtext NOT NULL,
  `lugar_nacimiento_alumno_solicitud` longtext NOT NULL,
  `direccion_alumno_solicitud` longtext NOT NULL,
  `barrio_alumno_solicitud` longtext NOT NULL,
  `comuna_localidad` longtext NOT NULL,
  `etsrato_social_alumno_solicitud` longtext NOT NULL,
  `ciudad_expedicion_alumno_solicitud` longtext NOT NULL,
  `telefono_residencia_alumno_solicitud` longtext NOT NULL,
  `telefono_celular_alumno_solicitud` longtext NOT NULL,
  `correo_alumno_solicitud` longtext NOT NULL,
  `grado_ingreso_alumno_solicitud` longtext NOT NULL,
  `colegio_proviene` longtext NOT NULL,
  `motivo_retiro_alumno_solicitud` longtext NOT NULL,
  `otro_motivo_alumno_solicitud` longtext NOT NULL,
  `motivacion_matriculacion_alumno_solicitud` longtext NOT NULL,
  `nombre_persona_referida_alumno_solicitud` longtext NOT NULL,
  `nombre_estudiante_referida_alumno_solicitud` longtext NOT NULL,
  `id_documentacion` int(12) NOT NULL,
  `id_documentacion_inclusion` int(12) NOT NULL,
  `id_documento_masculino` int(12) NOT NULL,
  `id_documento_femenino` int(12) NOT NULL,
  `id_documentacion_financiero` int(12) NOT NULL,
  `estado_alumno_solicitud` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

CREATE TABLE `documentacion` (
  `id_documento` int(12) NOT NULL,
  `fotocopia_ultimo_informe_academico` longtext DEFAULT NULL,
  `certificado_ultimo_grado` longtext DEFAULT NULL,
  `fotocopia_informe_convivencia` longtext DEFAULT NULL,
  `fotocopia_paz_y_salvo` longtext DEFAULT NULL,
  `comprobante_pago_solicitud` longtext DEFAULT NULL,
  `registro_civil` longtext NOT NULL,
  `tarjeta_identidad` longtext NOT NULL,
  `carnet_vacunacion` longtext NOT NULL,
  `carnet_eps` longtext NOT NULL,
  `certificado_medico` longtext DEFAULT NULL,
  `certificado_visual` longtext NOT NULL,
  `certificado_auditivo` longtext NOT NULL,
  `cedula_padre` longtext NOT NULL,
  `cedula_madre` longtext NOT NULL,
  `carta_laboral_padre` longtext DEFAULT NULL,
  `carta_laboral_madre` longtext DEFAULT NULL,
  `recibo_publico` longtext NOT NULL,
  `estado_documento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`id_documento`, `fotocopia_ultimo_informe_academico`, `certificado_ultimo_grado`, `fotocopia_informe_convivencia`, `fotocopia_paz_y_salvo`, `comprobante_pago_solicitud`, `registro_civil`, `tarjeta_identidad`, `carnet_vacunacion`, `carnet_eps`, `certificado_medico`, `certificado_visual`, `certificado_auditivo`, `cedula_padre`, `cedula_madre`, `carta_laboral_padre`, `carta_laboral_madre`, `recibo_publico`, `estado_documento`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '56c65b109d0f7.jpeg', 'Marvin Martinez Franco - alturas.pdf', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', 'No registra', '56c65b109d0f7.jpeg', 'activo'),
(2, NULL, NULL, NULL, NULL, NULL, '22.EDILBERTO JIMENEZ (1).pdf', '22.EDILBERTO JIMENEZ.pdf', 'punta-paquetes.png', 'Andres fernando ceron - alturas.pdf', 'Marvin Martinez Franco - alturas.pdf', '2650088.jpg', '2650088.jpg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', 'No registra', 'No registra', '56c65b109d0f7.jpeg', 'activo'),
(3, NULL, NULL, NULL, NULL, NULL, '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', '900534143-JORVEL PINTURAS Y ACABADOS S.A.S_.pdf', '900534143-JORVEL PINTURAS Y ACABADOS S.A.S_.pdf', '90e63d79351eea436b7e311d5ab62568.jpg', '900534143-JORVEL PINTURAS Y ACABADOS S.A.S_.pdf', '56c65b109d0f7.jpeg', '56c65b109d0f7.jpeg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion_inclusion_especial`
--

CREATE TABLE `documentacion_inclusion_especial` (
  `fotocopia_historial_clinico` longtext NOT NULL,
  `fotocopia_avances_terapeuticos` longtext NOT NULL,
  `fotocopia_fonoaudiologia` longtext NOT NULL,
  `fotocopia_examen_psicologia` longtext NOT NULL,
  `fotocopia_terapia_ocupacional` longtext NOT NULL,
  `evaluacion_neuropsicologia` longtext NOT NULL,
  `otros_documentos` longtext NOT NULL,
  `id_documentacion_inclusion` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion_independiente`
--

CREATE TABLE `documentacion_independiente` (
  `id_documentacion_independiente` int(11) NOT NULL,
  `declaracion_renta` longtext NOT NULL,
  `certificado_avalado_contador` longtext NOT NULL,
  `tarjeta_profesional_contador` longtext NOT NULL,
  `antecedentes_disciplinarios` longtext NOT NULL,
  `estado_documentacion_independiente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentacion_independiente`
--

INSERT INTO `documentacion_independiente` (`id_documentacion_independiente`, `declaracion_renta`, `certificado_avalado_contador`, `tarjeta_profesional_contador`, `antecedentes_disciplinarios`, `estado_documentacion_independiente`) VALUES
(1, '22.EDILBERTO JIMENEZ (1).pdf', '56c65b109d0f7.jpeg', '900534143-JORVEL PINTURAS Y ACABADOS S.A.S_.pdf', 'b8285fbf200991bca5a279ed7b1c6ee96684c019f91f2aea3aeaf193e3b171ce.jpeg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_renovacion`
--

CREATE TABLE `formulario_renovacion` (
  `id_formulario` int(12) NOT NULL,
  `id_alumno` int(12) NOT NULL,
  `estado_fr` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario_renovacion`
--

INSERT INTO `formulario_renovacion` (`id_formulario`, `id_alumno`, `estado_fr`) VALUES
(1, 1234188670, 'activo'),
(2, 1234188670, 'activo'),
(3, 90000000, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_solicitud`
--

CREATE TABLE `formulario_solicitud` (
  `id_alumno` int(12) NOT NULL,
  `foto_alumno` longtext NOT NULL,
  `primer_nombre` longtext NOT NULL,
  `segundo_nombre` longtext NOT NULL,
  `primer_apellido` longtext NOT NULL,
  `segundo_apellido` longtext NOT NULL,
  `lugar_de_nacimiento` longtext NOT NULL,
  `fecha_de_nacimiento` longtext NOT NULL,
  `direccion_residencia` longtext NOT NULL,
  `barrio_actual` longtext NOT NULL,
  `comunca_localidad` longtext NOT NULL,
  `estrato_social` int(12) NOT NULL,
  `tipo_documento` int(12) NOT NULL,
  `ciudad_expedicion_cedula` longtext NOT NULL,
  `telefono_residencia` longtext NOT NULL,
  `telefono_celular` longtext NOT NULL,
  `correo_actual` longtext NOT NULL,
  `aspirante_vive` longtext NOT NULL,
  `grado_ingreso` int(12) NOT NULL,
  `institucion_proviene` longtext NOT NULL,
  `motivo_retiro` varchar(100) NOT NULL,
  `otro_motivo` longtext NOT NULL,
  `motivacion_matricular` longtext NOT NULL,
  `nombre_persona_referido` longtext NOT NULL,
  `nombre_estudiante_referido` longtext NOT NULL,
  `id_acudiente_femenino` int(12) NOT NULL,
  `id_acudiente_financiero` int(12) NOT NULL,
  `id_acudiente_masculino` int(12) NOT NULL,
  `id_documentacion` int(12) NOT NULL,
  `id_documentacion_especial` int(12) NOT NULL,
  `estado_alumno_solicitud` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_controlador`
--

CREATE TABLE `pag_controlador` (
  `cont_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `cont_nombre` varchar(40) NOT NULL,
  `cont_icono` varchar(40) NOT NULL,
  `cont_display` varchar(40) NOT NULL,
  `cont_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_controlador`
--

INSERT INTO `pag_controlador` (`cont_id`, `mod_id`, `cont_nombre`, `cont_icono`, `cont_display`, `cont_descripcion`) VALUES
(1, 1, 'formularioController', 'mdi-editor-format-align-justify', 'Formulario', 'Renovacion'),
(2, 2, 'permisosController', 'mdi-action-lock', 'Permisos', 'Controlador de Permisos'),
(3, 3, 'rolesController', 'mdi-social-group', 'Roles', 'Controlador de Roles'),
(4, 4, 'usuariosController', 'mdi-action-account-circle', 'Usuarios', 'Controlador de Usuarios'),
(5, 4, 'personasController', 'mdi-action-perm-identity', 'Personas', 'Controlador de personas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_discapacidad_medica`
--

CREATE TABLE `pag_discapacidad_medica` (
  `id_discapacidad_medica` int(11) NOT NULL,
  `descripcion_discapacidad_medica` varchar(100) NOT NULL,
  `estado_discapacidad_medica` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_discapacidad_medica`
--

INSERT INTO `pag_discapacidad_medica` (`id_discapacidad_medica`, `descripcion_discapacidad_medica`, `estado_discapacidad_medica`) VALUES
(1, 'Auditiva', 'activo'),
(2, 'Visual', 'activo'),
(3, 'Motora', 'activo'),
(4, 'Cognitiva', 'activo'),
(6, 'Autismo', 'activo'),
(7, 'Otra', 'activo'),
(8, 'Ninguna', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_eps`
--

CREATE TABLE `pag_eps` (
  `id_eps` int(11) NOT NULL,
  `descripcion_eps` varchar(100) NOT NULL,
  `estado_eps` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_eps`
--

INSERT INTO `pag_eps` (`id_eps`, `descripcion_eps`, `estado_eps`) VALUES
(1, 'Cofesalud', 'activo'),
(2, 'Comfandi', 'activo'),
(3, 'Coomeva', 'activo'),
(4, 'Cruz Blanca', 'activo'),
(5, 'Medimas', 'activo'),
(6, 'Nueva EPS', 'activo'),
(7, 'Sanita', 'activo'),
(8, 'Sura', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_estado_civil`
--

CREATE TABLE `pag_estado_civil` (
  `id_estado_civil` int(11) NOT NULL,
  `descripcion_estado_civil` varchar(100) NOT NULL,
  `estado_estado_civil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_estado_civil`
--

INSERT INTO `pag_estado_civil` (`id_estado_civil`, `descripcion_estado_civil`, `estado_estado_civil`) VALUES
(1, 'Soltero', 'activo'),
(2, 'Casado', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_funcion`
--

CREATE TABLE `pag_funcion` (
  `func_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `func_nombre` varchar(40) NOT NULL,
  `func_display` varchar(40) NOT NULL,
  `func_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_funcion`
--

INSERT INTO `pag_funcion` (`func_id`, `cont_id`, `func_nombre`, `func_display`, `func_descripcion`) VALUES
(1, 1, 'listadoSolicitud', 'Solicitud', 'Listado formulario de renovacion'),
(2, 1, 'listadoRenovacion', 'Renovacion', 'Listado formulario de renovacion'),
(3, 2, 'crear', 'Asignar', 'Asignar Permisos'),
(4, 3, 'crear', 'Crear Rol', 'Crear Rol'),
(5, 3, 'editar', 'Editar Rol', 'Editar Rol'),
(6, 3, 'listar', 'Listar roles', 'Lista los roles'),
(7, 3, 'eliminar', 'ELiminar Rol', 'ELiminar Rol'),
(8, 4, 'crear', 'Crear Usuario', 'Crear Usuario'),
(9, 4, 'editar', 'Editar Usuario', 'Editar Usuario'),
(10, 4, 'listar', 'Listar Usuarios', 'Listar Usuarios'),
(11, 4, 'eliminar', 'Eliminar Usuario', 'Eliminar Usuario'),
(12, 5, 'crear', 'Importar Archivo Plano', 'Importar Plano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_grados_colegio`
--

CREATE TABLE `pag_grados_colegio` (
  `id_grado_colegio` int(12) NOT NULL,
  `descripcion_grado_Colegio` varchar(100) NOT NULL,
  `estado_grado_colegio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_grados_colegio`
--

INSERT INTO `pag_grados_colegio` (`id_grado_colegio`, `descripcion_grado_Colegio`, `estado_grado_colegio`) VALUES
(1, 'Pre jardin 1', 'activo'),
(2, 'Pre jardin 2', 'activo'),
(3, 'Jardin', 'activo'),
(4, 'Transicion', 'activo'),
(5, 'Primero', 'activo'),
(6, 'Segundo', 'activo'),
(7, 'Tercero', 'activo'),
(8, 'Cuarto', 'activo'),
(9, 'Quinto', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_grupos_etnicos`
--

CREATE TABLE `pag_grupos_etnicos` (
  `id_grupos_etnicos` int(11) NOT NULL,
  `descripcion_grupos_etnicos` varchar(100) NOT NULL,
  `estado_grupos_etnicos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_grupos_etnicos`
--

INSERT INTO `pag_grupos_etnicos` (`id_grupos_etnicos`, `descripcion_grupos_etnicos`, `estado_grupos_etnicos`) VALUES
(1, 'Indigenas', 'activo'),
(2, 'Romgitanos', 'activo'),
(3, 'Afrocolombianos', 'activo'),
(4, 'Mulatos', 'activo'),
(5, 'Autismo', 'activo'),
(6, 'Ningun', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_modulo`
--

CREATE TABLE `pag_modulo` (
  `mod_id` int(11) NOT NULL,
  `mod_nombre` varchar(20) NOT NULL,
  `mod_icono` varchar(40) NOT NULL,
  `mod_sitio_menu` varchar(20) NOT NULL,
  `mod_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_modulo`
--

INSERT INTO `pag_modulo` (`mod_id`, `mod_nombre`, `mod_icono`, `mod_sitio_menu`, `mod_descripcion`) VALUES
(1, 'Matricula', 'mdi-action-assignment', 'principal', 'Modulo Matriculas'),
(2, 'Permisos', 'mdi-action-lock', 'configuracion', 'Modulo de Permisos'),
(3, 'Roles', 'mdi-social-group', 'configuracion', 'Modulo asignar Roles a un usuario'),
(4, 'Usuarios', 'mdi-action-account-circle', 'configuracion', 'Modulo Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_opciones_true_false`
--

CREATE TABLE `pag_opciones_true_false` (
  `id_opciones` int(11) NOT NULL,
  `descripcion_opciones` varchar(10) NOT NULL,
  `estado_opciones` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_opciones_true_false`
--

INSERT INTO `pag_opciones_true_false` (`id_opciones`, `descripcion_opciones`, `estado_opciones`) VALUES
(1, 'Si', 'activo'),
(2, 'No', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_permisos`
--

CREATE TABLE `pag_permisos` (
  `perm_id` int(11) NOT NULL,
  `func_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_permisos`
--

INSERT INTO `pag_permisos` (`perm_id`, `func_id`, `rol_id`) VALUES
(6, 3, 1),
(5, 2, 1),
(4, 1, 1),
(7, 4, 1),
(8, 5, 1),
(9, 6, 1),
(10, 7, 1),
(11, 8, 1),
(12, 9, 1),
(13, 10, 1),
(14, 11, 1),
(15, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_persona`
--

CREATE TABLE `pag_persona` (
  `per_id` bigint(20) NOT NULL,
  `per_nombre` varchar(45) NOT NULL,
  `per_apellido` varchar(45) NOT NULL,
  `per_telefono` varchar(45) NOT NULL,
  `per_movil` varchar(45) NOT NULL,
  `per_email` varchar(45) NOT NULL,
  `per_direccion` varchar(45) DEFAULT NULL,
  `dept_id` int(11) NOT NULL,
  `per_valor_hora` int(11) NOT NULL,
  `per_horas` varchar(45) DEFAULT NULL,
  `per_sueldo` varchar(45) DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `cen_id` int(11) NOT NULL,
  `per_tipo` varchar(50) DEFAULT NULL,
  `estado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_persona`
--

INSERT INTO `pag_persona` (`per_id`, `per_nombre`, `per_apellido`, `per_telefono`, `per_movil`, `per_email`, `per_direccion`, `dept_id`, `per_valor_hora`, `per_horas`, `per_sueldo`, `car_id`, `cen_id`, `per_tipo`, `estado`) VALUES
(1151956249, 'super', 'Administrador', '3845030', '3135396721', 'esteban@gmail.com', 'cll 15 BIS #4-9', 2, 5000, NULL, NULL, 2, 1, 'usuario del sistema', NULL),
(9870111123, 'David Fernando', 'Barona Castrillon', '564767', '3123446547', 'dbarona@gmail.com', 'cll 56 #6-9', 1, 800, NULL, NULL, 1, 1, 'persona', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_rh_sangre`
--

CREATE TABLE `pag_rh_sangre` (
  `id_rh_sangre` int(11) NOT NULL,
  `descripcion_rh_sangre` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_rh_sangre`
--

INSERT INTO `pag_rh_sangre` (`id_rh_sangre`, `descripcion_rh_sangre`, `estado`) VALUES
(1, 'Positivo', 'activo'),
(2, 'Negativo', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_rol`
--

CREATE TABLE `pag_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(20) NOT NULL,
  `rol_descripcion` varchar(100) DEFAULT NULL,
  `estado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_rol`
--

INSERT INTO `pag_rol` (`rol_id`, `rol_nombre`, `rol_descripcion`, `estado`) VALUES
(1, 'Administrador', 'Tiene acceso a todo el sistema', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_terapia`
--

CREATE TABLE `pag_terapia` (
  `id_terapia` int(11) NOT NULL,
  `descripcion_terapia` varchar(100) NOT NULL,
  `estado_terapia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_terapia`
--

INSERT INTO `pag_terapia` (`id_terapia`, `descripcion_terapia`, `estado_terapia`) VALUES
(1, 'Psicologia', 'activo'),
(2, 'Fonoaudiologia', 'activo'),
(3, 'Neurosicologia', 'activo'),
(4, 'Psiquiatría', 'activo'),
(5, 'terapia ocupacional', 'activo'),
(6, 'Otra', 'activo'),
(7, 'Ninguna', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_tipo_documento`
--

CREATE TABLE `pag_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `id_descripcion_documento` varchar(100) NOT NULL,
  `estado_tipo_documento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_tipo_documento`
--

INSERT INTO `pag_tipo_documento` (`id_tipo_documento`, `id_descripcion_documento`, `estado_tipo_documento`) VALUES
(1, 'Cedula', 'activo'),
(2, 'Contraseña cedula', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_tipo_escritura`
--

CREATE TABLE `pag_tipo_escritura` (
  `id_tipo_escritura` int(11) NOT NULL,
  `descripcion_tipo_escritura` varchar(100) NOT NULL,
  `estado_tipo_escritura` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_tipo_escritura`
--

INSERT INTO `pag_tipo_escritura` (`id_tipo_escritura`, `descripcion_tipo_escritura`, `estado_tipo_escritura`) VALUES
(1, 'Diestro', 'activo'),
(2, 'Zurdo', 'activo'),
(3, 'Bidiestro', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_tipo_sangre`
--

CREATE TABLE `pag_tipo_sangre` (
  `id_sangre` int(11) NOT NULL,
  `descripcion_sangre` varchar(100) NOT NULL,
  `estado_sangre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_tipo_sangre`
--

INSERT INTO `pag_tipo_sangre` (`id_sangre`, `descripcion_sangre`, `estado_sangre`) VALUES
(1, 'A', 'estado'),
(2, 'B', 'estado'),
(3, 'AB', 'estado'),
(4, 'O', 'estado'),
(5, 'Definido', 'estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_usuario`
--

CREATE TABLE `pag_usuario` (
  `per_id` bigint(20) NOT NULL,
  `usu_usuario` varchar(45) NOT NULL,
  `usu_clave` varchar(200) NOT NULL,
  `usu_estado` varchar(45) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_usuario`
--

INSERT INTO `pag_usuario` (`per_id`, `usu_usuario`, `usu_clave`, `usu_estado`, `rol_id`) VALUES
(1151956249, 'admin', 'b9ddaf31e98e6d249804d3f7a9e936f82a12af32', 'activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedencia_academica_alumno`
--

CREATE TABLE `procedencia_academica_alumno` (
  `id` int(11) NOT NULL,
  `grado` longtext NOT NULL,
  `institucion` longtext NOT NULL,
  `ano_lectivo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_acudiente_femenino`
--
ALTER TABLE `datos_acudiente_femenino`
  ADD PRIMARY KEY (`id_persona_femenino`);

--
-- Indices de la tabla `datos_acudiente_masculino`
--
ALTER TABLE `datos_acudiente_masculino`
  ADD PRIMARY KEY (`id_persona_masculina`);

--
-- Indices de la tabla `datos_adulto_responsable`
--
ALTER TABLE `datos_adulto_responsable`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `datos_alumno`
--
ALTER TABLE `datos_alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `id_acudiente_masculino` (`id_acudiente_masculino`) USING BTREE,
  ADD UNIQUE KEY `id_grupos_etnicos` (`pertenece_grupos_etnicos`) USING BTREE;

--
-- Indices de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `documentacion_inclusion_especial`
--
ALTER TABLE `documentacion_inclusion_especial`
  ADD PRIMARY KEY (`id_documentacion_inclusion`);

--
-- Indices de la tabla `documentacion_independiente`
--
ALTER TABLE `documentacion_independiente`
  ADD PRIMARY KEY (`id_documentacion_independiente`);

--
-- Indices de la tabla `formulario_renovacion`
--
ALTER TABLE `formulario_renovacion`
  ADD PRIMARY KEY (`id_formulario`);

--
-- Indices de la tabla `formulario_solicitud`
--
ALTER TABLE `formulario_solicitud`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `pag_controlador`
--
ALTER TABLE `pag_controlador`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indices de la tabla `pag_discapacidad_medica`
--
ALTER TABLE `pag_discapacidad_medica`
  ADD PRIMARY KEY (`id_discapacidad_medica`);

--
-- Indices de la tabla `pag_eps`
--
ALTER TABLE `pag_eps`
  ADD PRIMARY KEY (`id_eps`);

--
-- Indices de la tabla `pag_estado_civil`
--
ALTER TABLE `pag_estado_civil`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indices de la tabla `pag_funcion`
--
ALTER TABLE `pag_funcion`
  ADD PRIMARY KEY (`func_id`);

--
-- Indices de la tabla `pag_grados_colegio`
--
ALTER TABLE `pag_grados_colegio`
  ADD PRIMARY KEY (`id_grado_colegio`);

--
-- Indices de la tabla `pag_grupos_etnicos`
--
ALTER TABLE `pag_grupos_etnicos`
  ADD PRIMARY KEY (`id_grupos_etnicos`);

--
-- Indices de la tabla `pag_modulo`
--
ALTER TABLE `pag_modulo`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `pag_opciones_true_false`
--
ALTER TABLE `pag_opciones_true_false`
  ADD PRIMARY KEY (`id_opciones`);

--
-- Indices de la tabla `pag_permisos`
--
ALTER TABLE `pag_permisos`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indices de la tabla `pag_persona`
--
ALTER TABLE `pag_persona`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `pag_rh_sangre`
--
ALTER TABLE `pag_rh_sangre`
  ADD PRIMARY KEY (`id_rh_sangre`);

--
-- Indices de la tabla `pag_rol`
--
ALTER TABLE `pag_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `pag_terapia`
--
ALTER TABLE `pag_terapia`
  ADD PRIMARY KEY (`id_terapia`);

--
-- Indices de la tabla `pag_tipo_documento`
--
ALTER TABLE `pag_tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `pag_tipo_escritura`
--
ALTER TABLE `pag_tipo_escritura`
  ADD PRIMARY KEY (`id_tipo_escritura`);

--
-- Indices de la tabla `pag_tipo_sangre`
--
ALTER TABLE `pag_tipo_sangre`
  ADD PRIMARY KEY (`id_sangre`);

--
-- Indices de la tabla `pag_usuario`
--
ALTER TABLE `pag_usuario`
  ADD PRIMARY KEY (`per_id`),
  ADD UNIQUE KEY `usu_usuario_UNIQUE` (`usu_usuario`);

--
-- Indices de la tabla `procedencia_academica_alumno`
--
ALTER TABLE `procedencia_academica_alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  MODIFY `id_documento` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documentacion_inclusion_especial`
--
ALTER TABLE `documentacion_inclusion_especial`
  MODIFY `id_documentacion_inclusion` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentacion_independiente`
--
ALTER TABLE `documentacion_independiente`
  MODIFY `id_documentacion_independiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formulario_renovacion`
--
ALTER TABLE `formulario_renovacion`
  MODIFY `id_formulario` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pag_controlador`
--
ALTER TABLE `pag_controlador`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pag_discapacidad_medica`
--
ALTER TABLE `pag_discapacidad_medica`
  MODIFY `id_discapacidad_medica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pag_eps`
--
ALTER TABLE `pag_eps`
  MODIFY `id_eps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pag_estado_civil`
--
ALTER TABLE `pag_estado_civil`
  MODIFY `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pag_funcion`
--
ALTER TABLE `pag_funcion`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pag_grados_colegio`
--
ALTER TABLE `pag_grados_colegio`
  MODIFY `id_grado_colegio` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pag_grupos_etnicos`
--
ALTER TABLE `pag_grupos_etnicos`
  MODIFY `id_grupos_etnicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pag_modulo`
--
ALTER TABLE `pag_modulo`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pag_opciones_true_false`
--
ALTER TABLE `pag_opciones_true_false`
  MODIFY `id_opciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pag_permisos`
--
ALTER TABLE `pag_permisos`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pag_rh_sangre`
--
ALTER TABLE `pag_rh_sangre`
  MODIFY `id_rh_sangre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pag_rol`
--
ALTER TABLE `pag_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_terapia`
--
ALTER TABLE `pag_terapia`
  MODIFY `id_terapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pag_tipo_documento`
--
ALTER TABLE `pag_tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pag_tipo_escritura`
--
ALTER TABLE `pag_tipo_escritura`
  MODIFY `id_tipo_escritura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pag_tipo_sangre`
--
ALTER TABLE `pag_tipo_sangre`
  MODIFY `id_sangre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `procedencia_academica_alumno`
--
ALTER TABLE `procedencia_academica_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
