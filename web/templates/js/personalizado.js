$(document).ready(function(){

	$(document).on("click","#actualizarNosotros",function(){

		var data_url = $("#formNosotros").attr("data-action");
		var parametros = {
                "tituloNosotros" : CKEDITOR.instances['tituloNosotros'].getData(),
                "descripcionNosotros" : CKEDITOR.instances['descripcionNosotros'].getData()
        };
		
		$.ajax({
            url: data_url,
            type: 'POST',
            data: parametros,
        }).done(function (respuesta) {
            if(respuesta == 1){
            	 setTimeout(function() {
                      Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                  },1000);
               
                  setTimeout(function() {
                      window.location.reload();
                  },4000);
            	setInterval('refresh()',4000) ;
            }
        })
	})


    $(document).on("click","#actualizarVision",function(){
      var data_url = $("#formVision").attr("data-action");
      var parametros = {
                  "tituloVision" : CKEDITOR.instances['tituloVision'].getData(),
                  "descripcionVision" : CKEDITOR.instances['descripcionVision'].getData()
          };
      
          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      })


    $(document).on("click","#actualizarMision",function(){
      var data_url = $("#formMision").attr("data-action");
      var parametros = {
                  "tituloMision" : CKEDITOR.instances['tituloMision'].getData(),
                  "descripcionMision" : CKEDITOR.instances['descripcionMision'].getData()
          };
      
          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      })

	function refresh(){
		alert();
	}


  // NOTICIAS 

  //consulta Noticia
    $("#buscarNoticia").keyup(function () {

        var noticia = $("#buscarNoticia").val();
        if (noticia != "") {
            $('#pagina').val(1);
        }

          var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "busquedaNoticia=" + noticia + "&pagina" + pagina,
            success: function (data) {
                $("#divNoticias").html(data);
            }
        });
    });

    $(document).on("click", ".editarNoticia", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#editarCiudad > .modal-content").html(data);
            }
        });
    });



    $(document).on("click","#editarNoticiaForm",function(){
      document.getElementById("editarNoticiaForm").disabled = true;

      var data_url = $("#formEdicionNoticia").attr("data-action");
      var parametros = {
                  "tituloNoticia" : CKEDITOR.instances['tituloNoticia'].getData(),
                  "descripcionNoticia" : CKEDITOR.instances['descripcionNoticia'].getData(),
                  "fechaPublicacion" : $("#fechaPublicacion").val(),
                  "fechaExpiracion" : $("#fechaExpiracion").val(),
                  "estadoNoticia" : $("#estadoNoticia").val()
          };

          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }else{
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      });


    $(document).on("click", ".editarFoto", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#editarFoto > .modal-content").html(data);
            }
        });
    });


    $(document).on("click", ".verDetalleNoticia", function () {
        var url = $(this).attr("data-url");
        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#detalleNoticia > .modal-content").html(data);
            }
        });
    });


    $(document).on("click","#crearNoticia",function(){
        
        document.getElementById("crearNoticia").disabled = true;
        
        var titulo = CKEDITOR.instances['tituloNoticia'].getData();
        var descripcion = CKEDITOR.instances['descripcionNoticia'].getData();
        var fechaPublicacion = $("#fechaPublicacion").val();
        var fechaExpiracion = $("#fechaExpiracion").val();
        var estado = $("#estadoNoticia").val();


        if (titulo === "") {
          Materialize.toast('El campo Titulo no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(descripcion == ""){
          Materialize.toast('El campo Descripcion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(fechaPublicacion == ""){
          Materialize.toast('El campo Fecha publicacion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(fechaExpiracion == ""){
          Materialize.toast('El campo Fecha Expiracion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(estado == "0"){
          Materialize.toast('El campo estado noticia no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else{

          var data_url = $("#formCrearNoticia").attr("data-action");
          var parametros = {
                    "tituloNoticia" : CKEDITOR.instances['tituloNoticia'].getData(),
                    "descripcionNoticia" : CKEDITOR.instances['descripcionNoticia'].getData(),
                    "fechaPublicacion" : $("#fechaPublicacion").val(),
                    "fechaExpiracion" : $("#fechaExpiracion").val(),
                    "estadoNoticia" : $("#estadoNoticia").val()
            };

            $.ajax({
                url: data_url,
                type: 'POST',
                data: parametros,
            }).done(function (respuesta) {
                if(respuesta == 1){
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }else{
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }
            })

        }

      });




    /* CONTACTO */

    $("#buscarContacto").keyup(function () {

        var contacto = $("#buscarContacto").val();
        if (contacto != "") {
            $('#pagina').val(1);
        }

        var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "busquedaContacto=" + contacto + "&pagina" + pagina,
            success: function (data) {
                $("#divContacto").html(data);
            }
        });
    });


    $(document).on("click", ".exportarPdf", function () {
      
        var url = $(this).attr("data-url");
        $.ajax({
            url: url,
            type: "post",
            success: function (data) {
                $("#detalleNoticia > .modal-content").html(data);
            }
        });
    });


    $(document).on("click","#btnUpdateMapa",function(){
        
        document.getElementById("btnUpdateMapa").disabled = true;
        
          
        if (inputMapa === "") {
          Materialize.toast('El campo Mapa no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("btnUpdateMapa").disabled = false;
        }else{

          var data_url = $("#updateMapa").attr("data-action");
          var parametros = {
                    "mapa" : $("#inputMapa").val()
            };

            $.ajax({
                url: data_url,
                type: 'POST',
                data: parametros,
            }).done(function (respuesta) {
                if(respuesta == 1){
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }else{
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }
            })

        }

      });

});