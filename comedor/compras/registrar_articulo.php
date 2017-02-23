<?php
include '../funciones/insertar.php';
include '../funciones/actualizar.php';

                $respuesta='';
                $modo = $_POST['modo'];
                $ID = $_POST['id'];
				$datos = [
				"Tipo" => utf8_decode($_POST['tipo']),
				"Nombre" => utf8_decode($_POST['nombre']),
				"Costo" =>utf8_decode($_POST['costo']),
				"Unidad" => utf8_decode($_POST['unidad']),
					];


					if ($modo == 1) 
					{
					  $respuesta= actualizar_clientes($datos,$ID);
					}
					else
					{
                      $respuesta= insertar_nuevo_articulo($datos);
					}
				
				echo $respuesta;

?>
