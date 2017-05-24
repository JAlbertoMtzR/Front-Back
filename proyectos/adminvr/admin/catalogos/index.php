<?php 
$paht = "../include/";
$pahtc = "../";
$navhome="../";
$navcat="";
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include $paht.'head.php';?>
	<link rel="stylesheet" href="css/demo-styles.css" />
</head>

<body>
  <?php include $paht.'nav.php';?>
<div class="container">
  <div class="row" style="padding-top: 130px;">
       <div class="col-lg-12 clearfix">
             <a href="col/" class="col-lg-6">
               <li class="tile tile-big tile-6-2 slideTextLeft">
               <div><p><span class=""><i class="fa fa-users" aria-hidden="true"></i></span>Usuarios</p></div>
               <div><p>Catalogo Usuarios</p></div></li>
             </a>
             <a href="dep/" class="col-lg-6">
               <li class="tile tile-big tile-6 slideTextLeft">
               <div><p><span class=""><i class="fa fa-building" aria-hidden="true"></i></span>Departamentos</p></div>
               <div><p>Catalogo Departamentos</p></div></li>
             </a>
             <a href="mail/" class="col-lg-6">
               <li class="tile tile-big tile-5 slideTextLeft">
               <div><p><span class=""><i class="fa fa-envelope" aria-hidden="true"></i></span>Correos</p></div>
               <div><p>Catalogo Correos</p></div></li>
             </a>
             <a href="" class="col-lg-6">
               <li class="tile tile-big tile-6-2 slideTextLeft">
               <div><p><span class=""><i class="fa fa-desktop" aria-hidden="true"></i></span>Equipos</p></div>
               <div><p>Catalogo Equipos</p></div></li>
             </a>
             <a href="dom/" class="col-lg-6">
               <li class="tile tile-big tile-6 slideTextLeft">
               <div><p><span class=""><i class="fa fa-globe" aria-hidden="true"></i></span>Dominios</p></div>
               <div><p>Catalogo Dominios</p></div></li>
             </a>
             <a href="" class="col-lg-6">
               <li class="tile tile-big tile-5 slideTextLeft">
               <div><p><span class=""><i class="fa fa-indent" aria-hidden="true"></i></span>DNS</p></div>
               <div><p>Catalogo DNS</p></div></li>
             </a>
             
             
           </div>
           </div><!--end wrapper-->
</div><!--end container-->
</body>
  <?php include $paht.'script.php';?>
  <script src="js/modernizr-1.5.min.js"></script>
</html>