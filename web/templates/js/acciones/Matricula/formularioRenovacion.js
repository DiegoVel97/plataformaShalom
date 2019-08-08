$(document).ready(function(){
	
	$(document).on("click", ".verDetalleFormRenovacion", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#detalleFormulario > .modal-content").html(data);
            }
        });
    });


    $(document).on("click", ".editarFormularioRenovacion", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#editarFormularioRenovacion > .modal-content").html(data);
            }
        });
    });

    $(document).on("click","#verImgRC", function(){
        $(".containerBigImg").css("display","block");
        $(".containerBigImg").css("transition","2s");

        $("#imagenExpandida").attr("src",$(this).attr("value"));
    });

    $(document).on("click","#closeVistaPrevia", function(){
        $(".containerBigImg").css("display","none");
        $(".containerBigImg").css("transitions","2s");

        $("#imagenExpandida").attr("src", $(this).attr("value"));
    });



  //consulta amuno
    $("#buscarAlumno").keyup(function () {

        var alumno = $("#buscarAlumno").val();
        if (alumno != "") {
            $('#pagina').val(1);
        }

          var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "buscarAlumno=" + alumno + "&pagina" + pagina,
            success: function (data) {
                $("#divAlumno").html(data);
            }
        });
    });


    $(document).on('click', '.modal-matricular', function (e) {

        e.preventDefault();
        var url = $(this).attr('data-url');
        var id = $(this).attr('data-id');
        swal({title: "¿Realmente desea matricular este alumno?",
            text: "Recuerde  que una vez matriculado no se podra quitar",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "Green ",
            confirmButtonText: "Sí, matricular alumno",
            closeOnConfirm: false},
        function () {
            $.ajax({
                url: url,
                type: 'post',
                data: id,
                success: function (data){
                    if(data == 0){
                        swal("No hubo matricula", "El alumno NO fue matriculado con exito, esto se debe a que hay otra matricula con este alumno.", "error");
                    }else{
                        swal("Matriculado!", "El alumno fue matriculado con exito, se enviara un correo al acudiente responsable.", "success");
                    }
                }
                
            });
            //       alert(equi_id);
            $("#buscarAlumno").trigger('keyup');
        });
    });




    $(document).on('click', '.modal-matricular-rechazar', function (e) {

        e.preventDefault();
        var url = $(this).attr('data-url');
        var id = $(this).attr('data-id');
        swal({title: "¿Realmente desea cancelar el proceso de matricular este alumno?",
            text: "Recuerde  que una vez cancelado no se podra quitar",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "red ",
            confirmButtonText: "Sí, cancelar proceso",
            closeOnConfirm: false},
        function () {
            $.ajax({
                url: url,
                type: 'post',
                data: id,
                success: function (data){
                    if(data == 0){
                        swal("Matriculado!", "El alumno fue matriculado con exito, se enviara un correo al acudiente responsable.", "success");
                    }else{
                        swal("No hubo matricula", "El proceso se ha detenido correctamente, el alumno NO fue matriculado en el centro educativo Shalom.", "error");

                    }
                }
                
            });
            //       alert(equi_id);
            $("#buscarAlumno").trigger('keyup');
        });
    });



    $(document).on('click', '.modal-cancelar', function (e) {

        e.preventDefault();
        var url = $(this).attr('data-url');
        var id = $(this).attr('data-id');
        swal({title: "¿Realmente desea matricular este alumno?",
            text: "Recuerde  que una vez matriculado no se podra quitar",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "Green ",
            confirmButtonText: "Sí, matricular alumno",
            closeOnConfirm: false},
        function () {
            $.ajax({
                url: url,
                type: 'post',
                data: id,
                success: function (data){
                    if(data == 0){
                        swal("No hubo matricula", "El alumno NO fue matriculado con exito, esto se debe a que hay otra matricula con este alumno.", "error");
                    }else{
                        swal("Matriculado!", "El alumno fue matriculado con exito, se enviara un correo al acudiente responsable.", "success");
                    }
                }
                
            });
            //       alert(equi_id);
            $("#busquedaAjax").trigger('keyup');
        });
    });

}); 