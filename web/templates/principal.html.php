<!-- START CONTENT -->
<section id="content">

    <!--start container-->
    <div class="container">

        <!--chart dashboard start-->
        <div id="chart-dashboard">
            <div class="row">
                <!----------------------------------------------------->

                
                <!--chart dashboard end-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->

                <!--card stats start-->
                <div id="card-stats">
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <a class="card hoverable waves-block" href="<?php echo crearUrl('Programacion', 'programacion', 'listar') ?>">
                                <div class="card-content  green white-text">
                                    <p class="card-stats-title"><i class="mdi-editor-insert-invitation"></i>Programaciones</p>
                                    <h4 class="card-stats-number">Hola</h4>

                                </div>
                                <div class="card-action  green darken-2">
                                    <div id="clients-bar" class="center-align"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col s12 m6 l3">
                            <a class="card hoverable waves-block" href="<?php echo crearUrl('Mediciones', 'mediciones', 'listar') ?>">
                                <div class="card-content pink lighten-1 white-text">
                                    <p class="card-stats-title"><i class="mdi-av-timer"></i>Mediciones</p>
                                    <h4 class="card-stats-number">Hola</h4>

                                </div>
                                <div class="card-action  pink darken-2">
                                    <div id="invoice-line" class="center-align"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col s12 m6 l3">
                            <a class="card hoverable waves-block" href="<?php echo crearUrl('Ot', 'solicitudes', 'listar') ?>">
                                <div class="card-content blue-grey white-text">
                                    <p class="card-stats-title"><i class="mdi-communication-quick-contacts-mail"></i> Solicitudes</p>
                                    <h4 class="card-stats-number">Hola</h4>

                                </div>
                                <div class="card-action blue-grey darken-2">
                                    <div id="profit-tristate" class="center-align"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col s12 m6 l3">
                            <a class="card hoverable waves-block" href="<?php echo crearUrl('Ot', 'ot', 'listar') ?>">
                                <div class="card-content purple white-text">
                                    <p class="card-stats-title"><i class="mdi-action-assignment"></i>Ordenes de Trabajo</p>
                                    <h4 class="card-stats-number">Hola</h4>

                                </div>
                                <div class="card-action purple darken-2">
                                    <div id="sales-compositebar" class="center-align"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--card stats end-->
                <!-- //////////////////////////////////////////////////////////////////////////// -->

                <div id="card-widgets">
                    <div class="row">

                        <div class="col s12 m12 l7">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title"><b>SOLICITUD DE FORMULARIOS <code>NO ATENDIDAS</code> HASTA LA FECHA</b>
                                    </h5>
                                    <p class="task-card-date"><?php
                                        setlocale(LC_ALL, "es_ES");
                                        echo strftime("%d %B del %Y");
                                        ?></code></h5></span>
                                    </p>
                                </li>
                            </ul>
                            <div class="card-panel" style="margin-top: -10px;">
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Fecha de creación
                                            </th>
                                            <th>
                                                Solicitante
                                            </th>
                                            <th>
                                                Equipo
                                            </th>
                                            <th>
                                                Descripción
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <a class="btn waves-effect indigo" style="margin-top: 20px;" href="<?php echo crearUrl('Ot', 'solicitudes', 'listar') ?>">VER MÁS</a>
                                
                                <div class="col s9" style="margin-top:20px;">
                                    <h6><code>TOTAL DE SOLICITUDES NO ATENDIDAS;</code><b></b></h6>
                                </div>
                            </div>
                        </div>


                        <div class="col s5">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo addLib('templates/adminMaterialize/images/user-bg.jpg') ?>" alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="<?php echo addLib('img/avatar/male1.png') ?>" alt="" class="circle responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-action-account-circle"></i>
                                    </a>
                                    <br>
                                    <span class="card-title activator grey-text text-darken-4"><?php echo $_SESSION['login']['per_nombre'] . "&nbsp;" . $_SESSION['login']['per_apellido'] ?></span>
                                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>&nbsp;<?php echo $_SESSION['login']['per_tipo'] ?></p>
                                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?php echo $_SESSION['login']['per_movil'] ?></p>
                                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?php echo $_SESSION['login']['per_email'] ?></p>

                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $_SESSION['login']['per_nombre'] . "&nbsp;" . $_SESSION['login']['per_apellido'] ?><i class="mdi-navigation-close right"></i></span>
                                    <p>Aquí hay más información acerca de esta Persona.</p>
                                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>&nbsp;<?php echo $_SESSION['login']['per_tipo'] ?></p>
                                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?php echo $_SESSION['login']['per_movil'] ?></p>
                                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?php echo $_SESSION['login']['per_email'] ?></p>
                                    <p><i class="mdi-communication-location-on cyan-text text-darken-2"></i> <?php echo $_SESSION['login']['per_direccion'] ?></p>
                                    <p><i class="mdi-editor-attach-money cyan-text text-darken-2"></i><?php echo $_SESSION['login']['per_valor_hora'] ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>