<?php
$pahtc = "../../";
include_once($pahtc."functions/select.php");
?> 
  <!--for demo wrap-->
  <div class="tbl-content" id="tabla">
    <table class="table table-hover" cellpadding="0" cellspacing="0" border="0">
      <tbody class="searchable">
       <?php echo select_list_user(); ?>
      </tbody>
    </table>
  </div>


<script type="text/javascript">
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();




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
