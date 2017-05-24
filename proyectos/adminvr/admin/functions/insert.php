<?php
    function insert_new_user_col($params){
	include 'conexion.php';

	        $NOM = $params['Nombre'];
			$DEP = $params['Depto'];

	    $sql = "INSERT INTO cat_usuarios_colaboradores (nombre,id_departamento,fecha_alta,estatus) 
		VALUES ('".$NOM."',".$DEP.",CURRENT_DATE,1)";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h3><span class="label label-success">"'.$NOM.'" Se ha guardado</span></h3>' : 'Error al guardar';
		return $mensaje;
     }
     function insert_new_mail($params){
	include 'conexion.php';

	        $COR = $params['Correo'];
	        $PAS = $params['Pass'];
			$DOM = $params['Dom'];

	    $sql = "INSERT INTO cat_correos (correo,pass,id_dominio,id_usu_col,fecha_alta,estatus) 
		VALUES ('".$COR."','".$PAS."',".$DOM.",0,CURRENT_DATE,1)";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h3><span class="label label-success">"'.$COR.'" Se ha guardado</span></h3>' : 'Error al guardar';
		return $mensaje;
     }
?>