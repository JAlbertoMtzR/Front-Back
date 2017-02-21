<?php
include '../funciones/insertar.php';
include '../funciones/actualizar.php';

                $respuesta='';
                $modo = $_POST['modo'];
                $ID = $_POST['id'];
				$datos = [
				"Nombre" => utf8_decode($_POST['nombre']),
				"Social" =>utf8_decode($_POST['social']),
				"RFC" => utf8_decode($_POST['rfc']),
				"Direccion" => utf8_decode($_POST['direccion']),
				"Telefono" => intval($_POST['telefono']),
				"Correo" => utf8_decode($_POST['correo']),
					];


					if ($modo == 1) 
					{
					  $respuesta= actualizar_clientes($datos,$ID);
					}
					else
					{
                      $respuesta= insertar_nuevo_cliente($datos);
					}
				
				echo $respuesta;

?>
