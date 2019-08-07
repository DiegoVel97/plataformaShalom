<!DOCTYPE html>
<html lang="es">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Aplicativo para la administracion y gestion del mantenimiento">
  <meta name="keywords" content="Mantenimiento industrial, Sena, CDTI">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
  <title><?php echo NOMBRE_APLICATIVO." | ".NOMBRE_COMPLETO_APLICATIVO ?></title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo addLib('templates/images/favicon/favicon-32x32.png') ?>" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo addLib('templates/images/favicon/apple-touch-icon-152x152.png') ?>">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo addLib('templates/images/favicon/mstile-144x144.png') ?>">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="<?php echo addLib('templates/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo addLib('templates/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="<?php echo addLib('templates/css/custom/custom.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!--<link href="<?php echo addLib('templates/css/layouts/style-fullscreen.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
-->
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo addLib('templates/js/plugins/prism/prism.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo addLib('templates/js/plugins/perfect-scrollbar/perfect-scrollbar.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo addLib('templates/js/plugins/chartist-js/chartist.min.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  
  <link href="<?php echo addLib('templates/sweetalert/dist/sweetalert.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo addLib('css/select2.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo addLib('css/global.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
  
  <!-- estos son los estilos cuando se amplian las imagenes --> 
  <link href="<?php echo addLib('templates/js/plugins/fancybox/jquery.fancybox.css')?>" rel="stylesheet" type="text/css"/>

  <!-- CKEDITOR -->
  <script type="text/javascript" src="<?php echo addLib('ckeditor/ckeditor.js') ?>"></script>


</head>

<div class="containerBigImg" id="containerImage" style="text-align:center; align-content: center; position: absolute; height:125%; width: 100%;  padding-top:15%; z-index: 90000; background-color: rgba(0,0,0,0.5); display: none;">
      <img src="" id="imagenExpandida" src="" width="500" height="auto" style="-webkit-box-shadow: 2px 3px 70px 2px rgba(255,255,255,1);
  -moz-box-shadow: 2px 3px 70px 2px rgba(255,255,255,1);
  box-shadow: 2px 3px 70px 2px rgba(255,255,255,1); ">
  <br><br>
  <button class="btn teal" id="closeVistaPrevia">CERRAR VISTA PREVIA</button>
</div>

<body>
<!--   Start Page Loading 
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
   End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color verde_oscuro">
                <div class="nav-wrapper">
                    <ul class="left">  
                                    <li class="no-hover">
                                        <a class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light gris" data-activates="slide-" href="#">
                                            <i class="mdi-navigation-menu"></i>
                                        </a>
                                    </li>
                                    ADMINISTRACI&Oacute;N - CENTRO EDUCATIVO SHALOM
                      <li>
                          <h1 class="logo-wrapper">
                              <a class="brand-logo darken-1" href="<?php echo addLib('') ?>">
                                  <span class="logo-text">Pagman</span>
<!--                                  <img alt="materialize logo" src="<?php echo addLib('img/avatar/male1.png') ?>">-->
                              </a> 
                              <span class="logo-text">Pagman</span>
                          </h1>
                      </li>
                    </ul>
                    <!--
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                         
<!--                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>-->
                    </ul>
                    
                   
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->