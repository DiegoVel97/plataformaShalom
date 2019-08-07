$(document).ready(function(){


    $(".submenu").parent().click(function(){
        
        if($(this).hasClass("active")){
            $(this).children(".submenu-lista")
                    .css("display","none");
            
            $(this).removeClass("active");
        }else{
            $(this).children(".submenu-lista")
                    .css("display","block");
            
            $(this).addClass("active");
        }
        
    });
    
    $(document).on('click',".modal-trigger",function(){
       
       var url = $(this).attr("data-url");
               
       $.ajax({
           url: url,
           type: "get",
           success: function(data){
               $("#model-data").html(data);
           }
       });
       
    });
    
    //----- INICIO de login -----//
    $("#loginAjax").click(function() {
        login();
    });
    $("#password").keypress(function(e){
        if (e.which == 13){
            login();
        }
    });
    function login(){
        var url = $("#formLoginAjax").attr('action');
        $.ajax({
            url: url + "/noVista",
            type: "POST",
            data: $("#formLoginAjax").serialize(),
            success: function(data) {
                if (data == 1) {
                    //alert(window.location);
                    window.location.reload();
                } else if (data == 0) {
                    Materialize.toast('El Usuario o la contraseña ingresada es incorrecta', 3000, 'rounded col red');
                } else {
                    Materialize.toast('Usuario esta Bloqueado o no tiene permisos de administrador', 2000, 'rounded col red');
                }
            }
        });
    }
    //----- Fin de login -----//
    

    
    //Bajar el scroll de menú cuando se selecciona una opción
//    $(document).on('click','.module_menu',function(){
//        var elemento=$(this).children("a:first").attr('id');
//        var posicion = $('#'+elemento).position().top;
////        alert(elemento);
//        $("#slide-out").animate({
//            scrollTop: posicion
//        }); 
//    });
    
    $(document).on("click","#mostrarCamposIndependiente",function(){
        var valor = $(this).val();
        
            $(".inputsIndependiente").attr("style","display: block; transition:1s;");
            $("#seleccionIndependiente").attr("value","1");
            $("#ocultarCamposIndependiente").attr("style","display:block;");
            $("#mostrarCamposIndependiente").attr("style","display:none;");


    })

    $(document).on("click","#ocultarCamposIndependiente",function(){
        
            $(".inputsIndependiente").attr("style","display: none; transition:1s;");
            $("#seleccionIndependiente").attr("value","2");
            $("#ocultarCamposIndependiente").attr("style","display:none;");
            $("#mostrarCamposIndependiente").attr("style","display:block;");
    })



    $(document).on("change","#tipoDocumentoAlumnoSelect",function(){
        var valor = $(this).val();

        $("#tipoDocumentoAlumno").attr("value", valor);
    })

    
    $(document).on("change","#gradoAlumnoSelect",function(){
        var valor = $(this).val();

        $("#gradoAlumno").attr("value", valor);
    });


    $(document).on("change","#cantidadHermanoAlumnoSelect",function(){
        var valor = $(this).val();

        $("#cantidadHermanoAlumno").attr("value", valor);
    });


    $(document).on("change","#discapacidadEstudianteSelect",function(){
        var valor = $(this).val();

        $("#discapacidadEstudiante").attr("value", valor);
    })
    

    $(document).on("change","#grupoEtnicoSelect",function(){
        var valor = $(this).val();

        $("#grupoEtnico").attr("value", valor);
    })


    $(document).on("change","#terapiaAlumnoSelect",function(){
        var valor = $(this).val();

        $("#terapiaAlumno").attr("value", valor);
    })


    $(document).on("change","#relevanteAlumnoSelect",function(){
        var valor = $(this).val();

        $("#relevanteAlumno").attr("value", valor);
    })


    $(document).on("change","#deCuidadoSelect",function(){
        var valor = $(this).val();

        $("#deCuidado").attr("value", valor);
    })


    $(document).on("change","#terapiaActualmenteSelect",function(){
        var valor = $(this).val();

        $("#deCuidado").attr("value", valor);
    })


    $(document).on("change","#terapiaActualmenteSelect",function(){
        var valor = $(this).val();

        $("#deCuidado").attr("value", valor);
    })


    $(document).on("change","#tipoSangreAlumnoSelecSelect",function(){
        var valor = $(this).val();

        $("#tipoSangreAlumno").attr("value", valor);
    })


    $(document).on("change","#discapacidadEstudianteSelect",function(){
        var valor = $(this).val();

        $("#discapacidadEstudiante").attr("value", valor);
    })

    
    $(document).on("change","#grupoEtnicoSelect",function(){
        var valor = $(this).val();

        $("#grupoEtnico").attr("value", valor);
    })

    $(document).on("change","#condicionMedicaSelect",function(){
        var valor = $(this).val();

        $("#condicionMedica").attr("value", valor);
    })


    $(document).on("change","#rhSangreAlumnoSelect",function(){
        var valor = $(this).val();

        $("#rhSangreAlumno").attr("value", valor);
    })


    $(document).on("change","#epsAlumnoSelect",function(){
        var valor = $(this).val();

        $("#epsAlumno").attr("value", valor);
    })

    
    $(document).on("change","#tipoEscrituraAlumnoSelect",function(){
        var valor = $(this).val();

        $("#tipoEscrituraAlumno").attr("value", valor);
    })


    $(document).on("change","#terapiaActualmenteAlumnoSelect",function(){
        var valor = $(this).val();

        $("#terapiaActualmenteAlumno").attr("value", valor);
    })

    /*================== DATOS DEL ADULTO RESPONSABLE ================= */

    $(document).on("change","#tipoDocumentoAdultoResponsableSelect",function(){
        var valor = $(this).val();

        $("#tipoDocumentoAdultoResponsable").attr("value", valor);
    })

    $(document).on("change","#estadoSentimentalAdultoResponsableSelect",function(){
        var valor = $(this).val();

        $("#estadoSentimentalAdultoResponsable").attr("value", valor);
    })

    $(document).on("change","#estratoSocialAdultoResponsableSelect",function(){
        var valor = $(this).val();

        $("#estratoSocialAdultoResponsable").attr("value", valor);
    })
    


     /* ============================= VALIDACION DATOS DEL ACUDIENTE MASCULINO =================== */

    $(document).on("change","#tipoDtoAcudienteMenSelect", function(){
        var valor = $(this).val();

        $("#tipoDtoAcudienteMen").attr("value", valor);
    });

    $(document).on("change","#estadoSentimentalAcudienteMenSelect", function(){
        var valor = $(this).val();

        $("#estadoSentimentalAcudienteMen").attr("value", valor);
    });

    $(document).on("change","#estratoSocialAcudienteMenSelect", function(){
        var valor = $(this).val();

        $("#estratoSocialAcudienteMen").attr("value", valor);
    });



     /* ============================= VALIDACION DATOS DEL ACUDIENTE FEMENINO =================== */

    $(document).on("change","#tipoDtoAcudienteFemSelect", function(){
        var valor = $(this).val();

        $("#tipoDtoAcudienteFem").attr("value", valor);
    });

    $(document).on("change","#estadoSentimentalAcudienteFemSelect", function(){
        var valor = $(this).val();

        $("#estadoSentimentalAcudienteFem").attr("value", valor);
    });

    $(document).on("change","#estratoSocialAcudienteFemSelect", function(){
        var valor = $(this).val();

        $("#estratoSocialAcudienteFem").attr("value", valor);
    });


    /* ==================== INICIO FORMULARIO RENOVACION ======================= */

    $(document).on("change","#tipo_documento_alumno_select", function(){
        var valor = $(this).val();

        $("#tipo_documento_alumno").attr("value", valor);
    });

    $(document).on("change","#vive_con_parentesco_alumno_select", function(){
        var valor = $(this).val();
        
        $("#vive_con_parentesco_alumno").attr("value", valor);
    });

    $(document).on("change","#grado_que_ingreso_alumno_select", function(){
        var valor = $(this).val();
        
        $("#grado_que_ingreso_alumno").attr("value", valor);
    });

    $(document).on("change","#motivoRetiroSelect", function(){
        var valor = $(this).val();
        
        $("#motivo_retiro_alumno").attr("value", valor);
    });

    $(document).on("change","#motivacion_shalom_alumno_select", function(){
        var valor = $(this).val();
        
        $("#motivacion_shalom_alumno").attr("value", valor);
    });

    $(document).on("change","#terapia_alumno_select", function(){
        var valor = $(this).val();
        
        $("#terapia_alumno").attr("value", valor);
    });

    $(document).on("change","#grupo_etnico_alumno_select", function(){
        var valor = $(this).val();
        
        $("#grupo_etnico_alumno").attr("value", valor);
    });


    $(document).on("change","#actividades_extracurriculares_alumno_select", function(){
        var valor = $(this).val();
        
        $("#actividades_extracurriculares_alumno").attr("value", valor);
    });

    $(document).on("change","#eps_alumno_select", function(){
        var valor = $(this).val();
        
        $("#eps_alumno").attr("value", valor);
    });

    $(document).on("change","#tipo_sangre_alumno_select", function(){
        var valor = $(this).val();
        
        $("#tipo_sangre_alumno").attr("value", valor);
    });

    $(document).on("change","#rh_sangre_alumno_select", function(){
        var valor = $(this).val();
        
        $("#rh_sangre_alumno").attr("value", valor);
    });


    $(document).on("change","#tipo_escritura_alumno_select", function(){
        var valor = $(this).val();
        
        $("#tipo_escritura_alumno").attr("value", valor);
    });

    $(document).on("change","#parentesco_acudiente_masculino_select", function(){
        var valor = $(this).val();
        
        $("#parentesco_acudiente_masculino").attr("value", valor);
    });

    $(document).on("change","#tipo_documento_masculino_select", function(){
        var valor = $(this).val();
        
        $("#tipo_documento_masculino").attr("value", valor);
    });

    $(document).on("change","#parentesco_acudiente_femenino_select", function(){
        var valor = $(this).val();
        
        $("#parentesco_acudiente_femenino").attr("value", valor);
    });

    $(document).on("change","#tipo_documento_femenino_select", function(){
        var valor = $(this).val();
        
        $("#tipo_documento_femenino").attr("value", valor);
    });

    $(document).on("change","#parentesco_acudiente_financiero_select", function(){
        var valor = $(this).val();
        
        $("#parentesco_acudiente_financiero").attr("value", valor);
    });

    $(document).on("change","#tipo_documento_financiero_select", function(){
        var valor = $(this).val();
        
        $("#tipo_documento_financiero").attr("value", valor);
    });

    $(document).on("change","#estrato_social_alumno_select", function(){
        var valor = $(this).val();
        
        $("#estrato_social_alumno").attr("value", valor);
    });






    /* ================ FIN FORMULARIO SOLICITUD ========================= */



    $(".file-form").on('submit', function () {
        alert();
        $('.btn_submit_file').prop('disabled', false);
        var url = $("#formularioRenovacionCupo").attr("data-action");
        var options = {
            url: url,
            success: function (response) {

                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                        
                    Materialize.toast(respuesta.mensajes, 2500, 'rounded col green');



                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file').prop('disabled', false);
                    $('html, body').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }

            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });


    $(".file-form-solicitud").on('submit', function () {
        

        var url = $("#formularioSolicitudCupo").attr("data-action");

        var options = {
            url: url,
            success: function (response) {
                alert(response);
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');

                    $('html, body').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }

            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    }); 


});