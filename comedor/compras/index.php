<?php session_start();
if(empty($_SESSION['username'])) header('Location: ../login.php');
  {
    $usuario=$_SESSION['username'];
    }
    ?>
<!--  * Login Ajax Php Mysql:
  * Php mysql Ajax,
  * Copyright 2015 bloguero-ec.
  * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)  *-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../theme/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../theme/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Comedor</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../theme/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../theme/css/material-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     
    <link href="../css/demo.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="../css/alertify.core.css">
    <link rel="stylesheet" href="../css/alertify.default.css">
    <link rel="stylesheet" href="../css/bootstrapValidator.css"/>
    


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

  <div class="wrapper">

      <div class="sidebar" data-color="blue" data-image="../img/sidebar-1.jpg">
      <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

      <div class="logo">
        <a href="" class="simple-text">
          Comedor
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="../">
                          <i class="material-icons">dashboard</i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="active">
                      <a href="index.php">
                          <i class="material-icons">shopping_cart</i>
                          <p>Compras</p>
                      </a>
                  </li>
                 
                  
                  
                 
                  
          <li class="active-pro">
                      <a class="session_on" href="javascript:void(0);" id="sessionKiller" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          <i class="material-icons">exit_to_app</i>
                          <p>Cerrar sesión</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

      <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Compras</a>
          </div>
          <div class="collapse navbar-collapse">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group  is-empty">
                <input type="text" class="form-control" placeholder="Search">
                <span class="material-input"></span>
              </div>
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
              </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="content">

      <div class="content">
      <div class="card">
  <div class="card-header" data-background-color="blue">
    <h4 class="title">Agregar Compra</h4>
    <p class="category">Seleccione el articulo que desea agregar a la compra del dia de hoy, junto con su unidad</p>
  </div>
  <div class="card-content table-responsive table-full-width">
  <div class="input-group col-lg-11"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>
<?php
include 'tabla.php';
?>
</div>
</div>

</div>
        <div class="card">
  <div class="card-header" data-background-color="blue">
    <h4 class="title">Nuevo articulo</h4>
    <p class="category">Si el articulo no esta, registrelo aqui</p>
  </div>

           <div class="container-fluid">
           <form id="frmAlta" action="" method="POST" class="col-lg-12">

           <div class="col-lg-3">
           	<div class="col-lg-12">
                <input type="hidden" id="id" name="id"  class="form-control" value="0" />
                <input type="hidden" id="modo" name="modo"  class="form-control" value="0" />
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
                   <center><button href="#" name="btn-send" id="btn-send" class="btn btn-warning">Agregar</button></center>
              </div>
           </div>
           <div class="col-lg-9">
           	<?php
            include 'tabla_articulos.php';
            ?> 
           </div>

              
</form>
</div>
</div>






<div id="result"></div>
        
          </div>
        
      

      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Company
                </a>
              </li>
              <li>
                <a href="#">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="#">
                   Blog
                </a>
              </li>
            </ul>
          </nav>
          <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
          </p>
        </div>
      </footer>
    </div>
  </div>

</body>

  <!--   Core JS Files   -->
  <script src="../theme/js/jquery-3.1.0.min.js" type="text/javascript"></script>
  <script src="../theme/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../theme/js/material.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="../theme/js/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../theme/js/bootstrap-notify.js"></script>
  <!--  Google Maps Plugin    -->
  <script type="../text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="../theme/js/material-dashboard.js"></script>
  <script src="../js/functions.ajax.js"></script>
  <script src="../js/alertify.js"></script>
  <script type="text/javascript" src="../js/bootstrapValidator.js"></script>

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
          var formURL = "catClientes/estatus_clientes.php";
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
                  $("#tabla").load('catClientes/tabla.php');
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
                              message: 'Este campo es obligatorio'
                          }
                      }
                  },
                  tipo: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es obligatorio'
                          }
                      }
                  },
                  nombre: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es obligatorio'
                          }
                      }
                  },

                  costo: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es obligatorio'
                          }
                      }
                  },
                  unidad: {
                      validators: {
                          notEmpty: {
                              message: 'Este campo es obligatorio'
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
            var formURL = "registrar_articulo.php";
            $.ajax({
                url : formURL,
                type: "POST",
                async: false,
                data : postData,
                success:function(data, textStatus) 
                {
                    alertify.log(data);
                    //$("#mensaje").html(data);
                    $("#frmAlta input").val('');
                    $("#tabla").load('tabla.php');
                    $("#tabla_articulos").load('tabla_articulos.php');
                },
                error: function(jqXHR, textStatus) 
                {
          //alert(textStatus);
                    $("#mensaje").html(textStatus);
                }
            });
          }

          function cargardatos(ID){
            var formURL = "leer_datos_articulos.php";
            $.ajax({
                url : formURL,
                type: "POST",
                datetype: "json",
                async: false,
                data : {'TID' : ID},
                success:function(data,textStatus) 
                {
                  //alert(data);
                 data = JSON.parse(data);
                    $('#modo').val(1);
                    $('#id').val(ID);
                    $('#tipo').val(data.Tipo);
                    $('#nombre').val(data.Nombre);
                    $('#costo').val(data.Costo);
                    $('#unidad').val(data.Unidad);
                },
                error: function(jqXHR, textStatus) 
                {
                //alert(textStatus);
                    $("#errormsg").html(textStatus);
                }
            });
          }

        


</script>

</html>