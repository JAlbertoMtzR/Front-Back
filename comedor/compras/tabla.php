<?php
include_once("../funciones/consulta.php");
?> 



<div class="card">
  <div class="card-header" data-background-color="blue">
    <h4 class="title">Agregar Compra</h4>
    <p class="category">Seleccione el articulo que desea agregar a la compra del dia de hoy, junto con su unidad</p>
  </div>
  <div class="card-content table-responsive table-full-width">
  <div class="input-group col-lg-11"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>

<table class="table" id="tabla">
  
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
    

<?php echo consulta_clientes();?>


  </tbody>


</table>
</div>
</div>