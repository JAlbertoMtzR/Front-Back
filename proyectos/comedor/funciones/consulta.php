<?php
function lista_articulos_compras(){
	include '../conexion/conexion.php';

$sql = "SELECT id,tipoArticulo,nombreArticulo,costoVenta,unidad, CONVERT(FechaAlta,char(10)) FechaAlta, estatus FROM articulos";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td align="center"><h5><input type="checkbox" /></h5></td>
                      <td><h5>'.utf8_encode($row["nombreArticulo"]).'</h5></td>
                      <td><h5><input type="text" id="preciocompra" name="preciocompra"  class="form-control col-lg-12" value="" /></h5></td>
                      <td><h5>'.utf8_encode($row["costoVenta"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["unidad"]).'</h5></td>
                      <td><h5><input type="text" id="cantidad" name="cantidad"  class="form-control col-lg-12" value="" /></h5></td>
                      <td><h5><input type="text" id="total" name="total"  class="form-control col-lg-12" value="" /></h5></td>
                      </tr>';
        $i++;
    }
} else {
    echo "0 results";
}
$conectar->close();
return $tabla;
}

function lista_articulos(){
	include '../conexion/conexion.php';

$sql = "SELECT id,tipoArticulo,nombreArticulo,costoVenta,unidad, CONVERT(FechaAlta,char(10)) FechaAlta, estatus FROM articulos";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["estatus"] == 1) ? '<span class="alert alert-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="alert alert-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';

       $tipoarticulo =  ($row["tipoArticulo"] == 1) ? 'Consumible' : 'Venta';
        $tabla.= '<tr>
                      <td><h5>'.$tipoarticulo.'</h5></td>
                      <td><h5>'.utf8_encode($row["nombreArticulo"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["costoVenta"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["unidad"]).'</h5></td>
                      <td align="center"><a onclick=" return cargardatos('.intval($row["id"]).')" id="editar" class="alert alert-info" style="cursor: pointer"><i class="fa fa-pencil"></i> Editar</a></td>
                      <td><form id="frm_activa'.$i.'" class="btn-a" method="POST" >
                      '.$Estatus.'
                      <input type="hidden" name="id" id="id" value="'.$row["id"].'">
                      <input type="hidden" name="Estatus" id="Estatus" value="'.$row["estatus"].'">
                      </form>
                      </td>
                      </tr>';
        $i++;
    }
} else {
    echo "0 results";
}
$conectar->close();
return $tabla;
}


function leer_articulos($ID) {
      include '../conexion/conexion.php';
      $sql = "SELECT id,tipoArticulo,nombreArticulo,costoVenta,unidad FROM articulos WHERE id =".$ID;

      $result = $conectar->query($sql);
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          
          $leer= [
        "Tipo" =>utf8_encode($row["tipoArticulo"]),
        "Nombre" => utf8_encode($row["nombreArticulo"]),
        "Costo" => utf8_encode($row["costoVenta"]),
        "Unidad" => utf8_encode($row["unidad"]),
      ];
        }
      }
      $conectar->close();
      return json_encode($leer);
    }
    function lista_clientes(){
  include '../conexion/conexion.php';

$sql = "SELECT ID_Cliente, Nombre FROM catclientes";
$result = $conectar->query($sql);

if ($result->num_rows > 0) {
  $i=1;
  $select ='<select class="form-control" id="cliente" name="cliente">';
    // output data of each row
    while($row = $result->fetch_assoc()) {  
        $select .= '<option value='.$row["ID_Cliente"].'>'.utf8_encode($row["Nombre"]).'</option>';
    }
    $select .='</select>';
} else {
    echo "0 results";
}
$conectar->close();
return $select;
}
function tabla_obras(){
  include '../conexion/conexion.php';

$sql = "SELECT 
        A.ID_Obra as ID,
        B.Nombre as cliente,
        A.Nombre as obra,
        A.Direccion as direccion, 
        CONVERT(A.FechaAlta,char(10)) as FechaAlta,
        A.Estatus as Estatus 
        FROM catobras A
        inner join catclientes B on A.ID_Cliente = B.ID_Cliente";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["Estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td align="center"><h5>'.utf8_encode($row["ID"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["cliente"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["obra"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["direccion"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["FechaAlta"]).'</h5></td>
                      <td align="center"><a href="#" onclick=" return cargardatos('.intval($row["ID"]).')" id="editar" class="label label-primary" style="cursor: pointer" data-toggle="collapse" data-target="#demo"><i class="fa fa-pencil"></i> Editar</a></td>
                      <td><form id="frm_activa'.$i.'" class="btn-a" method="POST" >
                      '.$Estatus.'
                      <input type="hidden" name="id" id="id" value="'.$row["ID"].'">
                      <input type="hidden" name="Estatus" id="Estatus" value="'.$row["Estatus"].'">
                      </form>
                      </td>
                      
                      </tr>';
        $i++;
    }
} else {
    echo "0 results";
}
$conectar->close();
return $tabla;
}
function get_leer_obras($ID) {
      include '../conexion/conexion.php';
      $sql = "SELECT ID_Cliente as Cliente,Nombre, Direccion FROM catobras WHERE ID_Obra =".$ID;

      $result = $conectar->query($sql);
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          
          $leer= [
        "Nombre" =>utf8_encode($row["Nombre"]),
        "Direccion" => utf8_encode($row["Direccion"]),
        "Cliente" => utf8_encode($row["Cliente"]),
      ];
        }
      }
      $conectar->close();
      return json_encode($leer);
    }
    function lista_obras(){
  include '../conexion/conexion.php';

$sql = "SELECT ID_Obra, Nombre FROM catobras";
$result = $conectar->query($sql);

if ($result->num_rows > 0) {
  $i=1;
  $select ='<select class="form-control" id="obras" name="obras">';
    // output data of each row
    while($row = $result->fetch_assoc()) {  
        $select .= '<option value='.$row["ID_Obra"].'>'.utf8_encode($row["Nombre"]).'</option>';
    }
    $select .='</select>';
} else {
    echo "0 results";
}
$conectar->close();
return $select;
}
function tabla_presupuestos(){
  include '../conexion/conexion.php';

$sql = "SELECT 
        A.ID as ID,
        B.Nombre as obra,
        C.Nombre as cliente,
        A.Nombre as presupuesto,
        A.Clave as clave,
        A.FechaInicio as fi,
        A.FechaFin as ff,
        A.Importe as importe,
        CONVERT(A.FechaAlta,char(10)) as FechaAlta,
        A.Estatus as Estatus 
        FROM catpresupuestos A
        inner join catobras B on A.ID_Obra = B.ID_Obra
        inner join catclientes C on B.ID_Cliente = C.ID_Cliente";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["Estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td align="center"><h5>'.utf8_encode($row["clave"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["presupuesto"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["importe"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["obra"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["cliente"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["fi"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["ff"]).'</h5></td>
                      <td align="center"><a href="#" onclick=" return cargardatos('.intval($row["ID"]).')" id="editar" class="label label-primary" style="cursor: pointer" data-toggle="collapse" data-target="#demo"><i class="fa fa-pencil"></i> Editar</a></td>
                      <td><form id="frm_activa'.$i.'" class="btn-a" method="POST" >
                      '.$Estatus.'
                      <input type="hidden" name="id" id="id" value="'.$row["ID"].'">
                      <input type="hidden" name="Estatus" id="Estatus" value="'.$row["Estatus"].'">
                      </form>
                      </td>
                      
                      </tr>';
        $i++;
    }
} else {
    echo "0 results";
}
$conectar->close();
return $tabla;
}
?>