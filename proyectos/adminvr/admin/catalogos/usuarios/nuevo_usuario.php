<?php
$pahtc = "../../";
include $pahtc.'/functions/insert.php';
include $pahtc.'/functions/update.php';

                $respuesta='';
                $modo = $_POST['modo'];
				$datos = [
				"Nombre" => utf8_decode($_POST['nombre']),
				"Depto" =>$_POST['depto'],
					];


					if ($modo == 1) 
					{
					  $respuesta= actualizar_articulos($datos,$ID);
					}
					else
					{
                      $respuesta= insert_new_user_col($datos);
					}
				
				echo $respuesta;

?>
