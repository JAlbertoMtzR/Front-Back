<?php
include_once("../funciones/consulta.php");
?> 
<style type="text/css">
  .pag_btn{
    background-color: #00d3ee;
    color: #ffffff;
    border-radius: 3px;
    font-size: 16px;
    height: 31px;
    width: 78px;
    text-align: center;
    /* margin-left: 72px; */
    box-shadow: 0 12px 20px -10px rgba(0, 188, 212, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(0, 188, 212, 0.2);
    cursor: pointer;
}
.pag_num
{
  padding: 10px;
}
</style>


 <div class="input-group col-lg-11"> <span class="input-group-addon">Buscar articulo</span>
                 <input id="filter" type="text" class="form-control" placeholder="Escribe aquí...">
                </div>

<table class="table table-hover" id="table" style="        margin-top: 17px;
">
  
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
  <tbody class="searchable" style="font-size: 10px" id="myTable">
    
<?php echo lista_articulos();?>

  </tbody>


</table>
     <div align="center" id="paginador" ></div>

<script type="text/javascript">
Paginador = function(divPaginador, tabla, tamPagina)
{
    this.miDiv = divPaginador; //un DIV donde irán controles de paginación
    this.tabla = tabla;           //la tabla a paginar
    this.tamPagina = 4; //el tamaño de la página (filas por página)
    this.pagActual = 1;         //asumiendo que se parte en página 1
    this.paginas = Math.floor((this.tabla.rows.length - 1) / this.tamPagina); //¿?

    this.SetPagina = function(num)
    {
        if (num < 0 || num > this.paginas)
            return;

        this.pagActual = num;
        var min = 1 + (this.pagActual - 1) * this.tamPagina;
        var max = min + this.tamPagina - 1;

        for(var i = 1; i < this.tabla.rows.length; i++)
        {
            if (i < min || i > max)
                this.tabla.rows[i].style.display = 'none';
            else
                this.tabla.rows[i].style.display = '';
        }
        this.miDiv.firstChild.rows[0].cells[1].innerHTML = this.pagActual;
    }

    this.Mostrar = function()
    {
        //Crear la tabla
        var tblPaginador = document.createElement('table');

        //Agregar una fila a la tabla
        var fil = tblPaginador.insertRow(tblPaginador.rows.length);

        //Ahora, agregar las celdas que serán los controles
        var ant = fil.insertCell(fil.cells.length);
        ant.innerHTML = 'Anterior';
        ant.className = 'pag_btn'; //con eso le asigno un estilo
        var self = this;
        ant.onclick = function()
        {
            if (self.pagActual == 1)
                return;
            self.SetPagina(self.pagActual - 1);
        }

        var num = fil.insertCell(fil.cells.length);
        num.innerHTML = ''; //en rigor, aún no se el número de la página
        num.className = 'pag_num';

        var sig = fil.insertCell(fil.cells.length);
        sig.innerHTML = 'Siguiente';
        sig.className = 'pag_btn';
        sig.onclick = function()
        {
            if (self.pagActual == self.paginas)
                return;
            self.SetPagina(self.pagActual + 1);
        }

        //Como ya tengo mi tabla, puedo agregarla al DIV de los controles
        this.miDiv.appendChild(tblPaginador);

        //¿y esto por qué?
        if (this.tabla.rows.length - 1 > this.paginas * this.tamPagina)
            this.paginas = this.paginas + 1;

        this.SetPagina(this.pagActual);
    }
}
</script>
 <br>

<script type="text/javascript">
var p = new Paginador(
    document.getElementById('paginador'),
    document.getElementById('table'),
    6
);
p.Mostrar();
</script>
