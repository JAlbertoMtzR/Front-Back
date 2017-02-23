<?php
include_once("../funciones/consulta.php");
?> 





<table class="table table-hover" id="tabla">
  
  <thead class="text-danger">
  <tr>
    <td><i class="material-icons">check_circle</i></td>
    <td>Nombre de articulo</td>
    <td>Costo compra</td>
    <td>Costo venta</td>
    <td>Unidad</td>
    <td>Cantidad</td>
    <td>Total</td>
</tr>
  </thead>
  <tbody class="searchable" style="font-size: 10px">
    

<?php echo lista_articulos_compras();?>


  </tbody>


</table>
