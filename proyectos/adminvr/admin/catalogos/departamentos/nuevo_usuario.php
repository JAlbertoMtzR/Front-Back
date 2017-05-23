<?php
$pahtc = "../../";
include $pahtc.'/functions/insert.php';
include $pahtc.'/functions/update.php';

                $respuesta='';
                $modo = $_POST['modo'];
                $ID = $_POST['idu'];
				$datos = [
				"Nombre" => utf8_decode($_POST['nombre']),
				"Depto" =>$_POST['depto'],
					];


					if ($modo == 1) 
					{
					  $respuesta= update_usuario_col($datos,$ID);
					}
					else
					{
                      $respuesta= insert_new_user_col($datos);
					}
				
				echo $respuesta;

?>
