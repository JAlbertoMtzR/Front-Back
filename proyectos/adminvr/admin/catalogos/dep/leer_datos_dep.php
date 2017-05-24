<?php
$pahtc = "../../";
include $pahtc.'functions/select.php';
		

			$ID = $_POST['TID'];

			$respuesta = leer_usuarios_col($ID);
			
		echo $respuesta;
		
		
  	
?>