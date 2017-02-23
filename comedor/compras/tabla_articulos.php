<?php
include_once("../funciones/consulta.php");
?> 





<table class="table table-hover" id="tabla_articulos">
  
  <thead class="text-danger">
  <tr>
    <td>Tipo Articulo</td>
    <td>Nombre de articulo</td>
    <td>Costo venta</td>
    <td>Unidad</td>
    <td>Editar</td>
    <td>Eliminar</td>
</tr>
  </thead>
  <tbody class="searchable" style="font-size: 10px">
    
<?php echo lista_articulos();?>

  </tbody>


</table>
