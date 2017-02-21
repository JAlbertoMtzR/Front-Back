<?php
function consulta_clientes(){
	include '../conexion/conexion.php';

$sql = "SELECT ID_Cliente, Nombre, RazonSocial, RFC, Direccion, Telefono, Correo, CONVERT(FechaAlta,char(10)) FechaAlta, Estatus FROM catclientes";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["Estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td align="center"><h5>'.utf8_encode($row["ID_Cliente"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Nombre"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["RazonSocial"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["RFC"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Direccion"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Telefono"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Correo"]).'</h5></td>
                      <td align="center"><a href="#" onclick=" return cargardatos('.intval($row["ID_Cliente"]).')" id="editar" class="label label-primary" style="cursor: pointer" data-toggle="collapse" data-target="#demo"><i class="fa fa-pencil"></i> Editar</a></td>
                      <td><form id="frm_activa'.$i.'" class="btn-a" method="POST" >
                      '.$Estatus.'
                      <input type="hidden" name="id" id="id" value="'.$row["ID_Cliente"].'">
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
function get_leer_clientes($ID) {
      include '../conexion/conexion.php';
      $sql = "SELECT Nombre, RazonSocial, RFC, Direccion, Telefono, Correo FROM catclientes WHERE ID_Cliente =".$ID;

      $result = $conectar->query($sql);
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          
          $leer= [
        "Nombre" =>utf8_encode($row["Nombre"]),
        "Social" => utf8_encode($row["RazonSocial"]),
        "RFC" => utf8_encode($row["RFC"]),
        "Direccion" => utf8_encode($row["Direccion"]),
        "Telefono" => utf8_encode($row["Telefono"]),
        "Correo" => utf8_encode($row["Correo"]),
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