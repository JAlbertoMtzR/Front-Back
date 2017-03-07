<?php

	$destino= "suscripciones@skullairsoft.com";
	$correo= $_POST["correo"];
	$contenido = "Correo suscrito : ".$correo;
	mail($destino,"Subcritores via Web", $contenido);
	header("Location:index.html");

?>
