

<br>
<form id="form2" class="col s12 valiform" data-url="<?php echo crearUrl("usuarios", "usuarios", "postEditar", array('noVista' => "noVista")) ?>" method="post" novalidate>

    <!--<h4 class="header2">Modificar Usuario</h4>-->

    <!--Inicio contenedor mensajes de error-->
    <div class="card red">
        <div id="cont_errors_ajax" class="card-content white-text">
        </div>
    </div>
    <!--Fin contenedor mensajes de error-->

    <div class="row">

        <div class="col s4">
            <br>
            <label>(*) Login</label>
            <input id="login" type="text" class="validate" length="20" name="login" value="<?php echo $usu['usu_usuario'] ?>" data-error=".errorTxt31">
            <div class="errorTxt31"></div>
        </div>

        <div class="col s4">
            <br>
            <label>Clave (opcional)</label>
            <input id="clave" type="text" class="validate" length="30" name="clave" data-error=".errorTxt32">
            <div class="errorTxt32"></div>
        </div>

        <div class="input-field col s4">
            <small style="color: #848484;">(*) Estado</small>
            <select id="estado" class="error browser-default select2" name="estado" data-error=".errorTxt33">
                <?php
                if ($usu['usu_estado'] === 'activo') {
                    echo "<option value='" . $usu['usu_estado'] . "' selected>" . $usu['usu_estado'] . "</option>";
                } elseif ($usu['usu_estado'] === 'desactivado') {
                    echo "<option value='" . $usu['usu_estado'] . "' selected>" . $usu['usu_estado'] . "</option>";
                }
                ?>
                <option value="activo" >activo</option>
                <option value="desactivado" >desactivado</option>
            </select>
            <div class="errorTxt33"></div>
        </div>
    </div>


    <div class="row">

        <div class="col s4">
            <label>(*) Numero Identificacion</label>
            <input disabled id="disabled" type="text" class="validate" length="10" value="<?php echo $usu['per_id'] ?>" data-error=".errorTxt36">
            <div class="errorTxt36"></div>

        </div>

        <div class="col s4">
            <label>(*) Nombre</label>
            <input id="nombre" type="text" class="validate" length="20" name="nombre" value="<?php echo $usu['per_nombre'] ?>" data-error=".errorTxt37">
            <div class="errorTxt37"></div>

        </div>

        <div class="col s4">
            <label>(*) Apellido</label>
            <input id="apellido" type="text" class="validate" length="30" name="apellido" value="<?php echo $usu['per_apellido'] ?>" data-error=".errorTxt38">
            <div class="errorTxt38"></div>

        </div>
    </div>

    <div class="row">

        <div class="col s4">
            <label>(*) Telefono</label>
            <input id="telefono" type="tel" class="validate" length="10" name="telefono" value="<?php echo $usu['per_telefono'] ?>" data-error=".errorTxt39">
            <div class="errorTxt39"></div>

        </div>

        <div class="col s4">
            <label>(*) Movil</label>
            <input id="movil" type="text" class="validate" length="10" name="movil" value="<?php echo $usu['per_movil'] ?>" data-error=".errorTxt40">
            <div class="errorTxt40"></div>

        </div>

        <div class="col s4">
            <label>(*) Email</label>
            <input id="email" type="email" class="validate" length="50" name="email" value="<?php echo $usu['per_email'] ?>" data-error=".errorTxt41">
            <div class="errorTxt41"></div>

        </div>
    </div>

    <div class="row">

        <div class="col s4">
            <br>
            <label>(*) Direccion</label>
            <input id="direccion" type="text" class="validate" length="40" name="direccion" value="<?php echo $usu['per_direccion'] ?>" data-error=".errorTxt42">
            <div class="errorTxt42"></div>
        </div>

        
    </div>

    <div class="row">
        <div class="input-field col s4">
            <small style="color: #848484;">(*) Rol</small>
            <select id="perfil" class="error browser-default select2" name="perfil" data-error=".errorTxt45">
                <option value="" disabled selected>-Seleccione perfil-</option>
                <?php
                foreach ($perfiles as $perfil) {
                    if ($perfil['rol_id'] == $usu['rol_id']) {
                        echo "<option value='" . $perfil["rol_id"] . "' selected>" . $perfil["rol_nombre"] . "</option>";
                    } else {
                        echo "<option value='" . $perfil["rol_id"] . "'>" . $perfil["rol_nombre"] . "</option>";
                    }
                }
                ?>
            </select>
            <div class="errorTxt45"></div>
        </div>
    </div>
    <br>
    <div class="divider"></div>



    <div class="row">
        <!-- Campo para almacenar el id del equipo -->
        <input type="hidden" name="id" value="<?php echo $usu['per_id'] ?>">
        <div class="input-field col s4"></div>
        <div class="input-field col s4">
            <button class="btn cyan waves-effect waves-light teal" type="submit"><i class="mdi-action-perm-identity"></i>Guardar</button>
        </div>
    </div>

</form>

<style>
    #modalUpdate{
        top: 2% !important;
        max-height: 100%;
        height: 94%;
        width: 900px;
    }
</style>

<script>
    $(".select2").select2({});

    $(document).ready(function () {
        $('select').material_select('destroy');
        $('select').material_select();

        $(document).on('click', '.modal-close', function () {
            $("#modalUpdate").closeModal();
        });

    });
    //----------------- validaciones ---------------

    /* Incluimos un método para validar el campo nombre */

    jQuery.validator.addMethod("letra", function (value, element) {
        return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
    });

    //----------------------expresion para validar solo numeros y letras----------------
    jQuery.validator.addMethod("password", function (value, element) {
        return this.optional(element) || /^[0-9a-zA-Z]+$/i.test(value);
    });

    //----------------------validate editar----------------------------

    $(".valiform").validate({
        rules: {
            departamento: {
                required: true
            },
            centro: {
                required: true
            },
            cargo: {
                required: true
            },
            login: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            clave: {
                password: true,
                minlength: 4,
                maxlength: 20
            },
            estado: {
                required: true
            },
            perfil: {
                required: true
            },
            nombre: {
                required: true,
                letra: true,
                minlength: 3,
                maxlength: 20
            },
            apellido: {
                required: true,
                letra: true,
                minlength: 5,
                maxlength: 30
            },
            telefono: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 10
            },
            movil: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 10
            },
            email: {
                required: true,
                email: true,
                minlength: 5,
                maxlength: 45
            },
            direccion: {
                required: true,
                minlength: 5,
                maxlength: 40
            },
            valorhora: {
                required: true,
                number: true,
                minlength: 3,
                maxlength: 10
            },
            cgender: "required",
            cagree: "required",
        },
        //For custom messages
        messages: {
            departamento: {
                required: "El departamento es obligatorio."
            },
            centro: {
                required: "El centro es obligatorio."
            },
            cargo: {
                required: "El cargo es obligatorio."
            },
            login: {
                required: "El login es obligatorio.",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 20 caracteres"
            },
            clave: {
                password: "Solo se permiten numeros o letras.",
                minlength: "Introduzca al menos 4 caracteres",
                maxlength: "Solo se permite introducir maximo 20 caracteres"
            },
            estado: {
                required: "El estado es obligatorio."
            },
            perfil: {
                required: "El perfil es obligatorio."
            },
            nombre: {
                required: "El nombre es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 20 caracteres"
            },
            apellido: {
                required: "El apellido es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 30 caracteres"
            },
            telefono: {
                required: "El telefono es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            movil: {
                required: "El movil es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            email: {
                required: "El email es obligatorio.",
                email: "El correo debe ser valido",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 45 caracteres"
            },
            direccion: {
                required: "La direccion es obligatorio.",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 40 caracteres"
            },
            valorhora: {
                required: "El valor hora es obligatorio.",
                number: "El valor debe ser numerico",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            curl: "Enter your website",
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });

</script>
