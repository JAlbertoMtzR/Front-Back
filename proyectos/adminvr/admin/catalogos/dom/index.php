<?php 
$paht = "../../include/";
$pahtc = "../../";
$navhome="../../";
$navcat="../";
include_once($pahtc."functions/select.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include $paht.'head.php';?>
	<link rel="stylesheet" type="text/css" href="<?php echo $navcat; ?>css/form.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $navcat; ?>css/bootstrapValidator.min.css">
</head>

<body>
  <?php include $paht.'nav.php';?>
<div class="container">
  <div class="container" style="padding-top: 100px;">
  <div class="col-lg-12">
  	<div class="input-group"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter2" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>
  </div>
        <div class="col-lg-4">
        	<form class="form-form" id="frmAlta" method="POST">
              <h1 class="h1-form">Nuevo Dominio</h1>
              <input class="input-form" name="modo" id="modo" value="0" type="hidden"/>
              <input class="input-form" name="idu" id="idu" value="0" type="hidden"/>
              <input class="input-form" id="nombre" name="nombre" placeholder="Nombre" type="text">
              <center><button class="button-form">Enviar</button></center>
         </form>
         <div id="mensaje" style="text-align: center;"></div>
        </div>   

<div class="col-lg-8" style="padding-top: 21px; ">
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Editar</th>
          <th>Estatus</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content" id="tabla">
           	<?php
            include 'tabla.php';
            ?>
  </div> 
           </div>
</div>
</div><!--end container-->
</body>
  <?php include $paht.'script.php';?>
  <script type="text/javascript" src="<?php echo $navcat; ?>js/bootstrapValidator.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){

      $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })
      });

  </script>
   <script language="javascript">
$(document).ready(function() {

  $( ".btn-a" ).click(function( e ) {
        var nombre = "#"+$(this).attr("id");
        var forma = $(nombre);
        $( nombre ).load(function( e ) {
          var postData = $(forma).serializeArray();
          var formURL = "estatus_usuario.php";
          $.ajax({
              url : formURL,
              type: "POST",
              async: false,
              data : postData,
              success:function(data, textStatus) 
              {
                  $(nombre).html(data);
                  var val = $(nombre+' input:eq(1)').attr("value");
                  val = (Number(val) == 1) ? 0 : 1;
                  $(nombre+' input:eq(1)').attr("value",val);
              },
              error: function(jqXHR, textStatus) 
              {
                  $("#errormsg").html(textStatus)
              }
          });
          //e.preventDefault(); //STOP default action
        });
        $( nombre ).load();
      });



   $('#frmAlta').bootstrapValidator({
              message: 'Este campo es obligatorio',
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  nombre: {
                      validators: {
                          notEmpty: {
                              message: '<h4 style="color:red;font-weight:bold;">El Nombre es obligatorio</h4>'
                          }
                      } 
                  },
                  
                },    
              onSuccess: function(e, data) {
                  envia();
              }

            });
    
});

            function envia() {
            var postData = $('#frmAlta').serializeArray();
            var formURL = "nuevo_usuario.php";
            $.ajax({
                url : formURL,
                type: "POST",
                async: false,
                data : postData,
                success:function(data, textStatus) 
                {
                    //alert(data);
                    $("#mensaje").html(data);
                    $("#frmAlta input").val('');
                    $("#frmAlta select").val('');
                    $("#tabla").load('tabla.php');
                },
                error: function(jqXHR, textStatus) 
                {
          //alert(textStatus);
                    $("#mensaje").html(textStatus);
                }
            });
          }

          

        


</script>
</html>