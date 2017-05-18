<?php

	include '../funciones/actualizar.php';
	$estatus = ($_POST['Estatus'] == '1') ? 0 : 1;
	$id = $_POST['id'];
	
	if(!isset($estatus) || empty($id))
		echo "Datos de usuario inválidos. Intenta de nuevo.";
	else {//var_dump($id,$estatus,$producto);
		$resp = estatus_clientes($id,$estatus);
		switch($resp) {
			case 'E':
				$p = '<span class="label label-danger"><i class="fa fa-close"></i> Error.</span>';
				break;
			case 'A':
				$p = '<span class="label label-success"><i class="fa fa-thumbs-up"></i> Activo</span>';
				break;
			case 'I':
				$p = '<span class="label label-danger"><i class="fa fa-thumbs-down"></i> Inactivo</span>';
				break;
		}
		echo $resp;
	}
?>