<?php

include_once('../model/Usuarios/usuariosModel.php');

class UsuariosController {

    function editar($parametros = false) {

        //-------Consulta de tablas para el formulario editar------

        $objUsuarios = new UsuariosModel();

        $sql = "SELECT rol_id,rol_nombre FROM pag_rol";
        $perfiles = $objUsuarios->select($sql);

        // Cierra la conexion
        $objUsuarios->cerrar();

        //---------------------fin consultas----------------
        //--------------------------------------------------*/

        $UsuariosModel = new UsuariosModel();

        $idcon = $parametros[1];

        $edcos = "SELECT pag_persona.per_tipo "
                . "FROM pag_persona "
                . "WHERE pag_persona.per_id='$idcon'";

        $prueba = $UsuariosModel->find($edcos);

        if ($prueba['per_tipo']==='persona') {

            $sqlpersona = "SELECT pag_persona.per_id,pag_persona.per_nombre,pag_persona.per_apellido,"
                    . "pag_persona.per_telefono,pag_persona.per_movil,"
                    . "pag_persona.per_email,pag_persona.per_direccion "
                    . "FROM pag_persona "
                    . "WHERE pag_persona.per_id='$idcon'";

            $per = $UsuariosModel->find($sqlpersona);

            include_once("../view/Usuarios/personas/editar.html.php");
        } else {

                    $sqlusu = "SELECT pag_rol.rol_id,"
                    . "pag_usuario.usu_usuario,pag_usuario.usu_clave, pag_usuario.usu_estado,pag_persona.per_id, pag_persona.per_nombre,pag_persona.per_apellido, pag_persona.per_telefono,pag_persona.per_movil, pag_persona.per_email,pag_persona.per_direccion FROM pag_usuario,pag_persona,pag_rol "
                    . "WHERE pag_usuario.rol_id=pag_rol.rol_id "
                    . "and pag_usuario.per_id=pag_persona.per_id "
                    . "and pag_persona.per_id='$idcon'";

            $usu = $UsuariosModel->find($sqlusu);

            include_once("../view/Usuarios/usuarios/editar.html.php");
        }

        // Cierra la conexion
        $UsuariosModel->cerrar();
        //*---------------------------------------------------------
    }

    function postEditar() {

        $ed = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $movil = $_POST['movil'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];

        $objUsuarios = new UsuariosModel();

        $editar = "SELECT pag_persona.per_tipo "
                . "FROM pag_persona "
                . "WHERE pag_persona.per_id='$ed'";

        $comprobar = $objUsuarios->find($editar);

        //--------expresiones regulares--------------------
        $errores = array();
        $patronNumeros = "/[0-9]{1,9}(\.[0-9]{0,2})?$/";
        $patronLetras = "/^[a-zA-Z_áéíóúñ\s]*$/";
        $NumerosLetras = "/^[0-9a-zA-Z]+$/";
        $patronCorreo = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        $patronDireccio = "/^.*(?=.*[0-9])(?=.*[a-zA-ZñÑ\s]).*$/";

        //--------------VALIDACIONES---------------------------------------

        if ($comprobar['per_tipo']==='usuario del sistema') {

            if (!isset($_POST['login']) or $_POST['login'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>login</b></code> es obligatorio';
            }
            
            if(!empty($_POST['clave'])){
                if (isset($_POST['clave']) && !preg_match($NumerosLetras, $_POST['clave'])) {
                    $errores[] = 'Para editar usuario el campo <code><b>clave</b></code> debe contener numeros o letras';
                }
            }

            if (!isset($_POST['perfil']) or $_POST['perfil'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>perfil</b></code> es obligatorio';
            }
            
            if (!isset($_POST['estado']) or $_POST['estado'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>Estado</b></code> es obligatorio';
            }

            if (!isset($_POST['id']) or $_POST['id'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>identificacion</b></code> es obligatorio';
            }
            if (isset($_POST['id']) && !preg_match($patronNumeros, $_POST['id'])) {
                $errores[] = 'Para editar usuario el campo <code><b>identificacion</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['nombre']) or $_POST['nombre'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>nombre</b></code> es obligatorio';
            }
            if (isset($_POST['nombre']) && !preg_match($patronLetras, $_POST['nombre'])) {
                $errores[] = 'Para editar usuario el campo <code><b>nombre</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['apellido']) or $_POST['apellido'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>apellido</b></code> es obligatorio';
            }
            if (isset($_POST['apellido']) && !preg_match($patronLetras, $_POST['apellido'])) {
                $errores[] = 'Para editar usuario el campo <code><b>apellido</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['telefono']) or $_POST['telefono'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>telefono</b></code> es obligatorio';
            }
            if (isset($_POST['telefono']) && !preg_match($patronNumeros, $_POST['telefono'])) {
                $errores[] = 'Para editar usuario el campo <code><b>telefono</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['movil']) or $_POST['movil'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>movil</b></code> es obligatorio';
            }
            if (isset($_POST['movil']) && !preg_match($patronNumeros, $_POST['movil'])) {
                $errores[] = 'Para editar usuario el campo <code><b>movil</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['email']) or $_POST['email'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>email</b></code> es obligatorio';
            }
            if (isset($_POST['email']) && !preg_match($patronCorreo, $_POST['email'])) {
                $errores[] = 'Para editar usuario el campo <code><b>email</b></code> debe ser valido';
            }

            if (!isset($_POST['direccion']) or $_POST['direccion'] == "") {
                $errores[] = 'Para editar usuario el campo <code><b>direccion</b></code> es obligatorio';
            }
            if (isset($_POST['direccion']) && !preg_match($patronDireccio, $_POST['direccion'])) {
                $errores[] = 'Para editar usuario el campo <code><b>direccion</b></code> debe ser valido';
            }



            if (count($errores) > 0) {
                setErrores($errores);
                echo getErrores();
                //----------------fin validaciones-----------------
            } else {

                $sql = "UPDATE "
                        . "pag_persona "
                        . "SET "
                        . "per_nombre='$nombre',"
                        . "per_apellido='$apellido',"
                        . "per_telefono='$telefono',"
                        . "per_movil='$movil',"
                        . "per_email='$email',"
                        . "per_direccion='$direccion' "
                        . "WHERE per_id='$ed'";

                $respuesta1 = $objUsuarios->update($sql);

                if ($comprobar['per_tipo']==='usuario del sistema' &&
                        isset($_POST['login']) &&
                        isset($_POST['clave']) &&
                        isset($_POST['estado']) &&
                        isset($_POST['perfil'])) {

                    $login = $_POST['login'];
                    $clave = $_POST['clave'];
                    $estado = $_POST['estado'];
                    $perfil = $_POST['perfil'];

                    $sqls = "UPDATE "
                            . "pag_usuario "
                            . "SET "
                            . "usu_usuario='$login',"
                            . "usu_estado='$estado',"
                            . "rol_id='$perfil' "
                            . "WHERE per_id='$ed'";

                    $respuesta = $objUsuarios->update($sqls);
                    
                    if(!empty($clave)){
                        //aqui Inicia encriptacion de Password
                        $salt = '$bgr$/';
                        $password = sha1(md5($salt . $clave));
                        //aqui termina encriptacion password
                        $scla = "UPDATE "
                            . "pag_usuario "
                            . "SET "
                            . "usu_clave='$password' "
                            . "WHERE per_id='$ed'";

                    $upclave = $objUsuarios->update($scla);
                        
                    }
                }
                echo true;
            }
        } else {


            if (!isset($_POST['id']) or $_POST['id'] == "") {
                $errores[] = 'El campo <code><b>identificacion</b></code> es obligatorio';
            }
            if (isset($_POST['id']) && !preg_match($patronNumeros, $_POST['id'])) {
                $errores[] = 'El campo <code><b>identificacion</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['nombre']) or $_POST['nombre'] == "") {
                $errores[] = 'El campo <code><b>nombre</b></code> es obligatorio';
            }
            if (isset($_POST['nombre']) && !preg_match($patronLetras, $_POST['nombre'])) {
                $errores[] = 'El campo <code><b>nombre</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['apellido']) or $_POST['apellido'] == "") {
                $errores[] = 'El campo <code><b>apellido</b></code> es obligatorio';
            }
            if (isset($_POST['apellido']) && !preg_match($patronLetras, $_POST['apellido'])) {
                $errores[] = 'El campo <code><b>apellido</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['telefono']) or $_POST['telefono'] == "") {
                $errores[] = 'El campo <code><b>telefono</b></code> es obligatorio';
            }
            if (isset($_POST['telefono']) && !preg_match($patronNumeros, $_POST['telefono'])) {
                $errores[] = 'El campo <code><b>telefono</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['movil']) or $_POST['movil'] == "") {
                $errores[] = 'El campo <code><b>movil</b></code> es obligatorio';
            }
            if (isset($_POST['movil']) && !preg_match($patronNumeros, $_POST['movil'])) {
                $errores[] = 'El campo <code><b>movil</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['email']) or $_POST['email'] == "") {
                $errores[] = 'El campo <code><b>email</b></code> es obligatorio';
            }
            if (isset($_POST['email']) && !preg_match($patronCorreo, $_POST['email'])) {
                $errores[] = 'El campo <code><b>email</b></code> debe ser valido';
            }

            if (!isset($_POST['direccion']) or $_POST['direccion'] == "") {
                $errores[] = 'El campo <code><b>direccion</b></code> es obligatorio';
            }
            if (isset($_POST['direccion']) && !preg_match($patronDireccio, $_POST['direccion'])) {
                $errores[] = 'El campo <code><b>direccion</b></code> debe ser valido';
            }

            if (count($errores) > 0) {
                setErrores($errores);
                echo getErrores();
                //----------------fin validaciones-----------------
            } else {

                $sql = "UPDATE "
                        . "pag_persona "
                        . "SET "
                        . "per_nombre='$nombre',"
                        . "per_apellido='$apellido',"
                        . "per_telefono='$telefono',"
                        . "per_movil='$movil',"
                        . "per_email='$email',"
                        . "per_direccion='$direccion' "
                        . "WHERE per_id='$ed'";

                $respuesta2 = $objUsuarios->update($sql);
                
                echo true;
            }
        }
        // Cierra la conexion
        $objUsuarios->cerrar();
    }

    function listar() {
        include_once("../view/Usuarios/usuarios/consultar.html.php");
    }

    function consultarAjax() {
        $objUsuarios = new UsuariosModel();

        $usuario = $_POST['usuario'];

        $sql = "SELECT pag_persona.per_id,pag_persona.per_nombre,"
                . "pag_persona.per_apellido,pag_persona.per_tipo "
                . "FROM pag_persona "
                . "WHERE pag_persona.per_id LIKE '%$usuario%' "
                . "OR pag_persona.per_nombre LIKE '%$usuario%' "
                . "OR pag_persona.per_apellido LIKE '%$usuario%' "
                . "OR pag_persona.per_tipo LIKE '%$usuario%' "
                . "ORDER BY pag_persona.per_id ASC";

        $usuar = $objUsuarios->select($sql);

        /*
         * Paginado
         */
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('usuarios', 'usuarios', 'listar');
        $paginado = new Paginado($usuar, $pagina, $url);
        $usuar = $paginado->getDatos();
        /*
         * Fin paginado
         */

        // Cierra la conexion
        $objUsuarios->cerrar();

        include_once("../view/Usuarios/usuarios/listar.html.php");
    }

    function consultar() {
        $objUsuarios = new UsuariosModel();

        $sql = "SELECT pag_persona.per_id,pag_persona.per_nombre,"
                . "pag_persona.per_apellido,pag_persona.per_tipo "
                . "FROM pag_persona ";

        $usuar = $objUsuarios->select($sql);

        // Cierra la conexion
        $objUsuarios->cerrar();

        include_once("../view/Usuarios/usuarios/listar.html.php");
    }

    function crear() {

        $objUsuarios = new UsuariosModel();

        $sql = "SELECT rol_id,rol_nombre FROM pag_rol";
        $perfiles = $objUsuarios->select($sql);

        //---------------------------------------------

        // Cierra la conexion
        $objUsuarios->cerrar();

        include_once("../view/Usuarios/usuarios/crear.html.php");
    }

    function postCrear(){

        $objUsuarios = new UsuariosModel();


        //--------expresiones regulares--------------------
        $errores = array();
        $patronNumeros = "/[0-9]{1,9}(\.[0-9]{0,2})?$/";
        $patronLetras = "/^[a-zA-Z_áéíóúñ\s]*$/";
        $NumerosLetras = "/^[0-9a-zA-Z]+$/";
        $patronCorreo = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        $patronDireccio = "/^.*(?=.*[0-9])(?=.*[a-zA-ZñÑ\s]).*$/";

        //-----------------validaciones para usuario--------------------
        if (isset($_POST) &&
                isset($_POST['login']) && $_POST['login'] != "" or
                isset($_POST['clave']) && $_POST['clave'] != "" or
                isset($_POST['estado']) && $_POST['estado'] != "" or
                isset($_POST['perfil']) && $_POST['perfil'] != "") {

            if (!isset($_POST['login']) or $_POST['login'] == "") {
                $errores[] = '<strong>Para el registro de usuario el campo <code><b>login</b></code> es obligatorio</strong>';
            }

            if (!isset($_POST['clave']) or $_POST['clave'] == "") {
                $errores[] = '<strong>Para el registro de usuario el campo <code><b>clave</b></code> es obligatorio</strong>';
            }
            
            if (isset($_POST['clave']) && !preg_match($NumerosLetras, $_POST['clave'])) {
                $errores[] = '<strong>Para el registro de usuario el campo <code><b>clave</b></code> debe contener numeros o letras</strong>';
            }

            if (!isset($_POST['estado']) or $_POST['estado'] == "") {
                $errores[] = '<strong>Para el registro de usuario el campo <code><b>estado</b></code> es obligatorio</strong>';
            }

            if (!isset($_POST['perfil']) or $_POST['perfil'] == "") {
                $errores[] = '<strong>Para el registro de usuario el campo <code><b>perfil</b></code> es obligatorio</strong>';
            }


            if (!isset($_POST['identificacion']) or $_POST['identificacion'] == "") {
                $errores[] = 'El campo <code><b>identificacion</b></code> es obligatorio';
            }
            if (isset($_POST['identificacion']) && !preg_match($patronNumeros, $_POST['identificacion'])) {
                $errores[] = 'El campo <code><b>identificacion</b></code> debe contener numeros unicamente';
            }

            //-------------------------------------------------------------
            $doc = "SELECT per_id FROM pag_persona";
            $ids = $objUsuarios->select($doc);

            foreach ($ids as $id) {
                if ($id['per_id'] == $_POST['identificacion']) {
                    $errores[] = '<strong>El <code><b>No. Identificacion</b></code> ingresado ya se encuentra registrado</strong>';
                }
            }
            //-------------------------------------------------------------

            if (!isset($_POST['nombre']) or $_POST['nombre'] == "") {
                $errores[] = 'El campo <code><b>nombre</b></code> es obligatorio';
            }
            if (isset($_POST['nombre']) && !preg_match($patronLetras, $_POST['nombre'])) {
                $errores[] = 'El campo <code><b>nombre</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['apellido']) or $_POST['apellido'] == "") {
                $errores[] = 'El campo <code><b>apellido</b></code> es obligatorio';
            }
            if (isset($_POST['apellido']) && !preg_match($patronLetras, $_POST['apellido'])) {
                $errores[] = 'El campo <code><b>apellido</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['telefono']) or $_POST['telefono'] == "") {
                $errores[] = 'El campo <code><b>telefono</b></code> es obligatorio';
            }
            if (isset($_POST['telefono']) && !preg_match($patronNumeros, $_POST['telefono'])) {
                $errores[] = 'El campo <code><b>telefono</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['movil']) or $_POST['movil'] == "") {
                $errores[] = 'El campo <code><b>movil</b></code> es obligatorio';
            }
            if (isset($_POST['movil']) && !preg_match($patronNumeros, $_POST['movil'])) {
                $errores[] = 'El campo <code><b>movil</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['email']) or $_POST['email'] == "") {
                $errores[] = 'El campo <code><b>email</b></code> es obligatorio';
            }
            if (isset($_POST['email']) && !preg_match($patronCorreo, $_POST['email'])) {
                $errores[] = 'El campo <code><b>email</b></code> debe ser valido';
            }

            if (!isset($_POST['direccion']) or $_POST['direccion'] == "") {
                $errores[] = 'El campo <code><b>email</b></code> es obligatorio';
            }
        } else {
            //-----------------validaciones para persona--------------------

            if (!isset($_POST['identificacion']) or $_POST['identificacion'] == "") {
                $errores[] = 'El campo <code><b>identificacion</b></code> es obligatorio';
            }
            if (isset($_POST['identificacion']) && !preg_match($patronNumeros, $_POST['identificacion'])) {
                $errores[] = 'El campo <code><b>identificacion</b></code> debe contener numeros unicamente';
            }

            //-------------------------------------------------------------
            $doc = "SELECT per_id FROM pag_persona";
            $ids = $objUsuarios->select($doc);

            foreach ($ids as $id) {
                if ($id['per_id'] === $_POST['identificacion']) {
                    $errores[] = '<strong>El <code><b>No. Identificacion</b></code> ingresado ya se encuentra registrado</strong>';
                }
            }
            //-------------------------------------------------------------

            if (!isset($_POST['nombre']) or $_POST['nombre'] == "") {
                $errores[] = 'El campo <code><b>nombre</b></code> es obligatorio';
            }
            if (isset($_POST['nombre']) && !preg_match($patronLetras, $_POST['nombre'])) {
                $errores[] = 'El campo <code><b>nombre</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['apellido']) or $_POST['apellido'] == "") {
                $errores[] = 'El campo <code><b>apellido</b></code> es obligatorio';
            }
            if (isset($_POST['apellido']) && !preg_match($patronLetras, $_POST['apellido'])) {
                $errores[] = 'El campo <code><b>apellido</b></code> debe contener letras unicamente';
            }

            if (!isset($_POST['telefono']) or $_POST['telefono'] == "") {
                $errores[] = 'El campo <code><b>telefono</b></code> es obligatorio';
            }
            if (isset($_POST['telefono']) && !preg_match($patronNumeros, $_POST['telefono'])) {
                $errores[] = 'El campo <code><b>telefono</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['movil']) or $_POST['movil'] == "") {
                $errores[] = 'El campo <code><b>movil</b></code> es obligatorio';
            }
            if (isset($_POST['movil']) && !preg_match($patronNumeros, $_POST['movil'])) {
                $errores[] = 'El campo <code><b>movil</b></code> debe contener numeros unicamente';
            }

            if (!isset($_POST['email']) or $_POST['email'] == "") {
                $errores[] = 'El campo <code><b>email</b></code> es obligatorio';
            }
            if (isset($_POST['email']) && !preg_match($patronCorreo, $_POST['email'])) {
                $errores[] = 'El campo <code><b>email</b></code> debe ser valido';
            }


            if (!isset($_POST['direccion']) or $_POST['direccion'] == "") {
                $errores[] = 'El campo <code><b>direccion</b></code> es obligatorio';
            }

        }

        if (count($errores) > 0) {
            setErrores($errores);
            echo getErrores();
        } else {

            $identificacion = $_POST['identificacion'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $movil = $_POST['movil'];
            $email = $_POST['email'];
            $direccion = $_POST['direccion'];


            if (isset($_POST['login']) &&
                    isset($_POST['clave']) &&
                    isset($_POST['estado']) &&
                    isset($_POST['perfil'])) {

                $login = $_POST['login'];
                $clave = $_POST['clave'];
                $salt = '$bgr$/';
                $passwd = sha1(md5($salt . $clave));
                $estado = $_POST['estado'];
                $perfil = $_POST['perfil'];

                    $insertper = "INSERT INTO pag_persona "
                        . "(per_id,per_nombre,per_apellido,per_telefono,per_movil,"
                        . "per_email,per_direccion,per_tipo) "
                        . "VALUES('$identificacion',"
                        . "'$nombre',"
                        . "'$apellido',"
                        . "'$telefono',"
                        . "'$movil',"
                        . "'$email',"
                        . "'$direccion',"
                        . "'usuario del sistema')";

                    $inserta = $objUsuarios->insertar($insertper);

                    //-----------insercion pag_usuario-------------------

                    $insertusu = "INSERT INTO pag_usuario(per_id,"
                            . "usu_usuario,usu_clave,"
                            . "usu_estado,rol_id) "
                            . " VALUES('$identificacion',"
                            . "'$login',"
                            . "'$passwd',"
                            . "'$estado',"
                            . "'$perfil')";

                    $insertar = $objUsuarios->insertar($insertusu);
                
                echo true;
            } else {

                    $insertper = "INSERT INTO pag_persona "
                        . "(per_id,per_nombre,per_apellido,per_telefono,per_movil,"
                        . "per_email,per_direccion,per_tipo) "
                        . "VALUES('$identificacion',"
                        . "'$nombre',"
                        . "'$apellido',"
                        . "'$telefono',"
                        . "'$movil',"
                        . "'$email',"
                        . "'$direccion',"
                        . "'persona')";

                    $insertar = $objUsuarios->insertar($insertper);
                
                echo true;
            }
            // Cierra la conexion
            $objUsuarios->cerrar();
        }

    }

    function verDetalle($parametros = false) {

        $UsuariosModel = new UsuariosModel();

        $codver = $parametros[1];

        $sql = "SELECT pag_persona.per_tipo "
                . "FROM pag_persona "
                . "WHERE pag_persona.per_id='$codver'";

        $comprobar = $UsuariosModel->find($sql);

        if ($comprobar['per_tipo'] === 'persona') {

            $sql = "SELECT pag_persona.per_id,pag_persona.per_nombre,pag_persona.per_apellido,"
                    . "pag_persona.per_telefono,pag_persona.per_movil,"
                    . "pag_persona.per_email,pag_persona.per_direccion "
                    . "FROM pag_persona "
                    . "WHERE pag_persona.per_id='$codver'";

            $per = $UsuariosModel->find($sql);

            include_once("../view/Usuarios/personas/verDetalle.html.php");
        } else {

            $sql = "SELECT pag_rol.rol_nombre,"
                    . "pag_usuario.usu_usuario,pag_usuario.usu_clave,"
                    . "pag_usuario.usu_estado,pag_persona.per_id,"
                    . "pag_persona.per_nombre,pag_persona.per_apellido,"
                    . "pag_persona.per_telefono,pag_persona.per_movil,"
                    . "pag_persona.per_email,pag_persona.per_direccion "
                    . "FROM pag_usuario,pag_persona,pag_rol "
                    . "WHERE pag_usuario.rol_id=pag_rol.rol_id "
                    . "and pag_usuario.per_id=pag_persona.per_id and pag_persona.per_id='$codver'";
                    
            $usu = $UsuariosModel->find($sql);

            include_once("../view/Usuarios/usuarios/verDetalle.html.php");
        }

        // Cierra la conexion
        $UsuariosModel->cerrar();
        //*---------------------------------------------------------
    }
    
    function selectContrato() {
        $contrs = $_POST['contrs'];
        if($contrs==='Contratista'){
            include_once("../view/Usuarios/usuarios/camcontra.html.php");
        }
    }

}
