<?php 
$paht = "../../include/";
$pahtc = "../../";
$navhome="../../";
$navcat="../";
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include $paht.'head.php';?>
</head>

<body>
  <?php include $paht.'nav.php';?>
<div class="container">
  <div class="container-fluid" style="padding-top: 130px;">
           <form id="frmAlta" action="" method="POST" class="col-lg-12">

           <div class="col-lg-3" style="    margin-top: -40px;">
           	<div class="col-lg-12">
                <input type="hidden" id="modo" name="modo"  class="form-control" value="0" />
              </div>
              <div>
                <input type="hidden" id="idart" name="idart"  class="form-control" value="0" />
              </div>               


              <div class="form-group col-lg-12">
                <select name="tipo" id="tipo" class="form-control" >
                            <option selected>Tipo de articulo</option>
                            <option  value="1">Consumible</option>
                            <option  value="2">Venta</option>
                          </select>
              </div>     



              <div class="form-group col-lg-12">
                <input type="text" id="nombre" name="nombre"  class="form-control" placeholder="Nombre del Artículo" />
              </div>  
   



              <div class="form-group col-lg-12">
                <input type="text" id="costo" name="costo"  class="form-control" placeholder="Costo venta" />
              </div>  



              <div class="form-group col-lg-12">
                <input type="text" id="unidad" name="unidad"  class="form-control" placeholder="Unidad " />
              </div>        


              <div class="col-lg-12">
                   <center><button name="btn-send" id="btn-send" class="btn btn-warning">Agregar</button></center>
              </div>
           </div>
           <div class="col-lg-9">
            <div class="input-group col-lg-11"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter2" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>
           	<?php
            include 'tabla.php';
            ?> 
           </div>

              
</form>
</div>
</div><!--end container-->
</body>
  <?php include $paht.'script.php';?>
</html>