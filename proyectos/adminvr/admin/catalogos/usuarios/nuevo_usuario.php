<?php
$pahtc = "../../";
include $pahtc.'/functions/insert.php';
include $pahtc.'/functions/update.php';

                $respuesta='';
                $modo = $_POST['modo'];
                $ID = $_POST['idart'];
				$datos = [
				"Nombre" => utf8_decode($_POST['nombre']),
				"Depto" =>intval($_POST['depto']),
					];


					if ($modo == 1) 
					{
					  $respuesta= actualizar_articulos($datos,$ID);
					}
					else
					{
                      $respuesta= insertar_nuevo_articulo($datos);
					}
				
				echo $respuesta;

?>
