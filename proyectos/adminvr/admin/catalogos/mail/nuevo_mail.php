<?php
$pahtc = "../../";
include $pahtc.'/functions/insert.php';
include $pahtc.'/functions/update.php';

                $respuesta='';
                $modo = $_POST['modo'];
                $ID = $_POST['idu'];
				$datos = [
				"Correo" => utf8_decode($_POST['nombre']),
				"Pass" => $_POST['pass'],
				"Dom" =>$_POST['dom'],
					];


					if ($modo == 1) 
					{
					  $respuesta= update_mail($datos,$ID);
					}
					else
					{
                      $respuesta= insert_new_mail($datos);
					}
				
				echo $respuesta;

?>
