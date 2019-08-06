<br><div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" id="formLoginAjax" action="<?php echo crearUrl("sesion", "sesion", "postInicio")?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo addLib('img/logo/logo_nuevo_shalom.png') ?>" alt="" class=" responsive-img">
            <p class="center login-form-text">INICIAR SESI&Oacute;N</p>
            <p class="center"><b>CENTRO EDUCATIVO SHALOM </b></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="nom_usu" type="text" value="" required="Por favor Ingresa nombre de Usuario">
            <label for="username" class="active">Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="pass_usu" type="password" value="" required="Por favor Ingresa la contraseña">
            <label for="password" class="active">Contrase&ntilde;a</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordar Usuario</label>
          </div>
        </div>
        
<div class="row">
          <div class="input-field col s12" id="loginAjax">
             <input type="button" value="ENTRAR" class="btn waves-effect col s12 ">
          </div>
        </div>
      </form>
<div class="row">
     <br><br><hr><br>
             <a href="<?php echo addLib('index.php/renovacion_cupo'); ?>">
              <input type="button" value="RENOVAR MATRICULA" class="btn waves-effect col s12 teal">
             </a>
             <BR><BR>
             <a href="<?php echo addLib('index.php/solicitud_cupo'); ?>">
               <input type="button" value="SOLICITAR CUPO" class="btn waves-effect col s12 teal">
            </a>
</div>
    </div>
    
  </div>
