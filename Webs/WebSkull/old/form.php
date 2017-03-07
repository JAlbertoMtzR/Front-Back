<?php

	$destino= "bookit@skullairsoft.com";
  $nombre= $_POST["nombre"];
	$email= $_POST["email"];
  $comentario= $_POST["comentario"];
	$contenido = "Nombre: ". $nombre . "\r\n" . "Correo: " . $email . "\r\n" . "Comentario: \r\n" . $comentario;
	mail($destino,"Formulario de contacto", $contenido);
	header("Location:index.html");

?>
