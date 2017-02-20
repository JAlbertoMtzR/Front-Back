<?php session_start(); ?>
<!--  * Login Ajax Php Mysql:
  * Php mysql Ajax,
  * Copyright 2015 bloguero-ec.
  * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)  *-->
<!DOCTYPE html>
<html>
<head>
	<title>Personal Data Maning</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-material-design.css">
    <link href="css/ripples.min.css" rel="stylesheet">
</head>
<body>
<div id="Container">
         
  
    <span class="container loginBlock">
       <span class="inner">
       <div id="alertBoxes" class="row"></div>
         
            <?php
if ( isset($_SESSION['username']) && isset($_SESSION['userid']) && $_SESSION['username'] != '' && $_SESSION['userid'] != '0' ){
    echo '<div class="session_on">
        Ya iniciaste sesión | Ahora has un <a href="javascript:void(0);" id="sessionKiller">logout</a>.<span class="timer" id="timer"  style="margin-left: 10px;"></span>
    </div>';
}
else{
    echo '<div class="col-lg-12">
           <form method="post" action="">
             <div class="col-lg-12" style="text-align: center;z-index: 1">
               <a href="index.php" class="back fa fa-arrow-left fa-2x"></a> <label style="color:white;"><h1>Login</h1></label>
             </div>
             <div class="form-group">
               <label style="color:white;"><h4><i class="fa fa-user fa-lg"></i> Usuario</h4></label>
               <input style="color:white;" type="text" name="login_username" id="login_username" class="form-control" />
             </div>
             <div class="form-group">
               <label style="color:white;"><h4><i class="fa fa-lock fa-lg"></i> Contraseña</h4></label><br />
               <input style="color:white;" type="password" name="login_userpass" id="login_userpass" class="form-control" />
             </div>
             <div class="form-group" style="text-align: center">
                 <button id="login_userbttn" onclick="" class="btn btn-raised btn-primary">Login</button>
             </div>
           </form>
         </div>';
}
            ?>
         
        </span></span>
         
    </div>
</body>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
	<script src="js/material.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/functions.ajax.js"></script>
    <script>
      $.material.init();
    </script>
</html>