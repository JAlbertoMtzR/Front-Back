<?php
function select_list_user(){
	include 'conexion.php';

$sql = "SELECT 
        A.id as id,
        A.id_departamento as iddepto,
        B.nombre as depto,
        A.nombre as user,
        A.estatus as estatus 
        FROM cat_usuarios_colaboradores A
        inner join cat_departamentos B on A.id_departamento = B.id
        WHERE A.estatus=1";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td><h5>'.utf8_encode($row["user"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["depto"]).'</h5></td>
                      <td align="center"><a onclick=" return cargardatos('.intval($row["id"]).')" id="editar" class="label label-info" style="cursor: pointer"><i class="fa fa-pencil"></i> Editar</a></td>
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
      include 'conexion.php';
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
function get_select_deptos() {
      include 'conexion.php';
      $sql = "SELECT id,nombre FROM cat_departamentos WHERE estatus=1";
      $result = $conectar->query($sql);
      if ($result->num_rows > 0) {
        $depto = '<select id="depto" name="depto" class="input-form" style="color:grey;">
                <option value="" selected> Selecciona </option>';
        while($row = $result->fetch_assoc()){
          $depto .= '<option value="'.$row["id"].'">'.utf8_encode($row["nombre"]).'</option>';
        }
        $depto .= '</select>';
      }
      $conectar->close();
      return $depto;
    }
     

?>
