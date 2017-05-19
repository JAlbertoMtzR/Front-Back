<?php
$pahtc = "../../";
include_once($pahtc."functions/select.php");
?> 
<table class="table table-hover" id="tabla_articulos">
  
  <thead class="">
  <tr>
    <td>Nombre</td>
    <td>Departamento</td>
    <td>Editar</td>
    <td>Estatus</td>
</tr>
  </thead>
  <tbody class="searchable2" style="font-size: 10px">
    
<?php echo select_list_user();?>

  </tbody>


</table>
     <div align="center" id="paginador" ></div>

<script type="text/javascript">

function cargardatos(ID){
            var formURL = "leer_datos_articulos.php";
            $.ajax({
                url : formURL,
                type: "POST",
                datetype: "json",
                async: false,
                data : {'TID' : ID},
                success:function(data,textStatus) 
                {
                  //alert(ID);
                 data = JSON.parse(data);
                    $('#modo').val(1);
                    $('#idart').val(ID);
                    $('#tipo').val(data.Tipo);
                    $('#nombre').val(data.Nombre);
                    $('#costo').val(data.Costo);
                    $('#unidad').val(data.Unidad);
                },
                error: function(jqXHR, textStatus) 
                {
                //alert(textStatus);
                    $("#errormsg").html(textStatus);
                }
            });
          }
</script>
