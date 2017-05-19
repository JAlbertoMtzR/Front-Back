<?php
include_once("config.php");

//function connect(){
	if(!($conectar = mysqli_connect(HOST,USER,PASS))){
		printf("Ocurrió un error en la conexión %s/n", mysqli_connect_errno());
		exit();
		}
	if(!(mysqli_select_db($conectar,BASE))){
		printf("Error seleccionando la base de datos.");
		exit();
		}
	return $conectar;
//	}

?>