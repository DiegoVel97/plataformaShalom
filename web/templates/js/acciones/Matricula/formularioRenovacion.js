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

});