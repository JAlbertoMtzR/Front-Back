<?php

	function actualizar_clientes($params,$ID) {
		include '../conexion/conexion.php';

		    $NOM = $params['Nombre'];
			$SOC = $params['Social'];
			$RFC = $params['RFC'];
			$DIR = $params['Direccion'];
			$TEL = $params['Telefono'];
			$COR = $params['Correo'];


		$sql = "UPDATE catclientes SET Nombre = '".$NOM."', RazonSocial = '".$SOC."', RFC='".$RFC."', Direccion= '".$DIR."', Telefono= '".$TEL."',Correo= '".$COR."'
		        WHERE ID_Cliente = ".$ID;
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h1><span class="span8 label label-info col-lg-12">El cliente "'.$NOM.'" Se ha editado correctamente</span></h1>' : '<h1><span class="span8 label label-danger col-lg-12">Error al editar "'.$NOM.'"</span></h1>';
		return $mensaje;
	}
	function estatus_clientes($id,$estatus) {
		include '../conexion/conexion.php';
		$sql = "UPDATE catclientes SET Estatus = ".$estatus." where ID_Cliente = ".$id;
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<span class="label label-success"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger"><i class="fa fa-thumbs-down"></i> Inactivo</span>';
	    return $mensaje;
	}
	function actualizar_obra($params,$ID) {
		include '../conexion/conexion.php';

		    $NOM = utf8_encode($params['Nombre']);
			$DIR = $params['Direccion'];
			$CLI = $params['Cliente'];


		$sql = "UPDATE catobras SET Nombre = '".$NOM."', Direccion= '".$DIR."',ID_Cliente= '".$CLI."'
		        WHERE ID_Obra = ".$ID;
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<h1><span class="span8 label label-info col-lg-12">El cliente "'.$NOM.'" Se ha editado correctamente</span></h1>' : '<h1><span class="span8 label label-danger col-lg-12">Error al editar "'.$NOM.'"</span></h1>';
		return $mensaje;
	}
	function estatus_obras($id,$estatus) {
		include '../conexion/conexion.php';
		$sql = "UPDATE catobras SET Estatus = ".$estatus." WHERE ID_Obra = ".$id;
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		$mensaje = ($ok) ? '<span class="label label-success"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger"><i class="fa fa-thumbs-down"></i> Inactivo</span>';
	    return $mensaje;
	}
	?>