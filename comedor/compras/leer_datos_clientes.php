<?php

		include '../funciones/consulta.php';
		

			$ID = $_POST['TID'];

			$respuesta = get_leer_clientes($ID);
			
		echo $respuesta;
		
		
  	
?>