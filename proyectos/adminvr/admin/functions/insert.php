<?php
    function insert_new_user_col($params){
	include 'conexion.php';

	        $NOM = $params['Nombre'];
			$DEP = $params['Depto'];

	    $sql = "INSERT INTO cat_usuarios_colaboradores (tipoArticulo,nombreArticulo,costoVenta,unidad,FechaAlta,estatus) 
		VALUES (".$TIP.",'".$NOM."',".$COS.",'".$UNI."',CURRENT_DATE,1)";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? 'El Articulo "'.$NOM.'" Se ha guardado Exitosamente' : 'Error al guardar';
		return $mensaje;
     }
     function insertar_nuevo_obra($params){
	include '../conexion/conexion.php';

	        $NOM = utf8_encode($params['Nombre']);
			$DIR = $params['Direccion'];
			$CLI = $params['Cliente'];

	    $sql = "INSERT INTO catobras (ID_Cliente,ID_Empresa,Nombre,Direccion,FechaAlta,Estatus) 
		VALUES (".$CLI.",1,'".$NOM."','".$DIR."',CURRENT_DATE,1)";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h1><span class="span8 label label-info col-lg-12">El cliente "'.$NOM.'" Se ha guardado Exitosamente</span></h1>' : '<h1><span class="span8 label label-danger col-lg-12">Error al guardar "'.$NOM.'"</span></h1>';
		return $mensaje;
     }
     function insertar_nuevo_presupuesto($params){
	include '../conexion/conexion.php';

	        $NOM = utf8_encode($params['Nombre']);
			$CLA = $params['Clave'];
			$FIN = $params['Fi'];
			$FFI = $params['Ff'];
			$IMP = $params['Importe'];
			$OBR = $params['Obra'];

	    $sql = "INSERT INTO catpresupuestos (ID_Empresa,ID_Obra,Nombre,Clave,FechaInicio,FechaFin,Importe,FechaAlta,Estatus) 
		VALUES (1,".$OBR.",'".$NOM."','".$CLA."','".$FIN."','".$FFI."',".$IMP.",CURRENT_DATE,1)";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h1><span class="span8 label label-info col-lg-12">El pesupuesto "'.$NOM.'" Se ha guardado Exitosamente</span></h1>' : '<h1><span class="span8 label label-danger col-lg-12">Error al guardar "'.$NOM.'"</span></h1>';
		return $mensaje;
     }
?>