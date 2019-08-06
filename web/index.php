<?php
session_start();
// Licencia Software Propietario -->


// Se incluye archivo para helper
include_once("../lib/php/helper.php");

//PDF
include_once("../lib/php/global.php");


//se incluye el paginado
include_once("../lib/php/PaginadoClass.php");

//se incluye la clase para cargar el menú
include_once("../lib/php/MenuClass.php");

//se incluyen las funciones para validar
include_once("../lib/php/validaciones.php");

//if(!isset($modulo) && !isset($controller) && !isset($accion)){
if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == "/recordar") {
    include_once('templates/recordarPass/header.html.php');
    include_once('templates/recordarPass/recordarPass.html.php');
    include_once('templates/recordarPass/footer.html.php');
} else if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == "/renovacion_cupo"){
    include_once('templates/formularios/renovacionCupo/header.html.php');
    include_once('templates/formularios/renovacionCupo/renovacion_cupo.html.php');
    include_once('templates/formularios/renovacionCupo/footer.html.php');
}else if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == "/solicitud_cupo"){
    include_once('templates/formularios/solicitudCupo/header.html.php');
    include_once('templates/formularios/solicitudCupo/solicitud_cupo.html.php');
    include_once('templates/formularios/solicitudCupo/footer.html.php');
} else {
    if (!isset($_SESSION['login']) && (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] != "/sesion/sesion/postInicio/noVista") && (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] != "/matricula/matricula/renovacion/noVista") && (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] != "/matricula/matricula/renovacion/noVista") && (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] != "/matricula/matricula/solicitud/noVista") && (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] != "/matricula/matricula/solicitud/noVista")) {
        
        include_once('templates/login/header.html.php');
        include_once('templates/login/login.html.php');
        include_once('templates/login/footer.html.php');
   
    } elseif (!isset($_SERVER['PATH_INFO'])) {
        // Se carga el header de nuestra aplicación
        include_once('templates/header.html.php');
        include_once('templates/sidebar-left.html.php');
        // Se carga la vista principal del aplicativo
        include_once('templates/principal.html.php');
        include_once('templates/sidebar-right.html.php');
        // Se carga el footer de nuestra aplicación
        include_once('templates/footer.html.php');
    } else {

        // /equipos/equipos/crear
        $cadena = explode("/", $_SERVER['PATH_INFO']);
//    dd($_SESSION);
        // Captura el nombre del modulo con la primer letra mayuscula
        $modulo = ucwords($cadena[1]);
        
        // Captura el nombre del controlador 
        $controller = $cadena[2];

        // Captura la funcion del controlador
        $accion = $cadena[3];

        //Inicio para validar permisos de navegación
        include_once('../controller/Permisos/permisosController.php');
        $objPermiso = new PermisosController();
        if (!$objPermiso->validarAcceso($cadena)) {
            include_once('templates/errors/accessDenied.html.php');
            die();
        }
        //Fin validación permisos de navegación
        // /equipos/equipos/crear/noVista
        if (!isset($cadena[4]) || $cadena[4] != "noVista") {

            // Se carga el header de nuestra aplicación
            include_once('templates/header.html.php');

            include_once('templates/sidebar-left.html.php');

            echo "<section id='content'>
                <div class='container'>";
        }

        // Se cargan los parametros
        $count = 4;
        while (isset($cadena[$count])) {
            $parametros[] = $cadena[$count];
            $count++;
        }

        $pathController = "../controller/" . $modulo . "/" . $controller . "Controller.php";

        $controllerClass = ucwords($controller) . "Controller";

        include_once($pathController);

        // ajustar
        $objController = new $controllerClass();

        if (!isset($parametros)) {
            $objController->$accion();
        } else {
            $objController->$accion($parametros);
        }

        if (!isset($cadena[4]) || $cadena[4] != "noVista") {

            echo "</section'>
            </div>";

            include_once('templates/sidebar-right.html.php');

            // Se carga el footer de nuestra aplicación
            include_once('templates/footer.html.php');
        }
    }
}
?>