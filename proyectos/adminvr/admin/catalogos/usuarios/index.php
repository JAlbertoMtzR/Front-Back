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
</head>

<body>
  <?php include $paht.'nav.php';?>
<div class="container">
  <div class="container" style="padding-top: 100px;">
  <div class="col.lg-12">
  	<div class="input-group"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter2" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>
  </div>
        <div class="col-lg-4">
        	<form class="form-form">
  <h1 class="h1-form">Nuevo Usuario</h1>
  <input class="input-form" name="modo" id="modo" value="0" type="hidden"/>
  <input class="input-form" placeholder="Nombre" type="text" required/>
  <?php echo get_select_deptos(); ?>
  <center><button class="button-form">Enviar</button></center>
</form>
        </div>   

<div class="col-lg-8" style="padding-top: 21px; ">
           	<?php
            include 'tabla.php';
            ?> 
           </div>
</div>
</div><!--end container-->
</body>
  <?php include $paht.'script.php';?>
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
</html>