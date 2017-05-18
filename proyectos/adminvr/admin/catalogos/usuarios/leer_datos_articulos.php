<?php

		include '../funciones/consulta.php';
		

			$ID = $_POST['TID'];

			$respuesta = leer_articulos($ID);
			
		echo $respuesta;
		
		
  	
?>