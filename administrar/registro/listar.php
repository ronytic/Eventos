<?php
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<script language="javascript" type="text/javascript" src="../../js/jquery.form.js"></script>
<script language="javascript" type="text/javascript" src="../../js/busqueda.js"></script>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
    $(document).on("click",".eliminar",function(e){
        e.preventDefault();    
        if(confirm("¿Esta seguro que desea Eliminar este Evento?")){
            var cod=$(this).attr("rel");
            $.post("eliminar.php",{'codreserva':cod},function(data){
                $(".formulario").submit();
            });
        }
    })
})
</script>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Administrar Eventos </h2>
            <div class="col-sm-12">
                <fieldset>
                    <legend>Criterio de Búsqueda</legend>
                    <form action="buscar.php" method="post" class="formulario">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Fecha del Evento</th>
                                    <th><input type="date" name="fechaevento" class="form-control" value="<?php echo date("Y-m-d")?>" required></th>
                                    <th>Nombre Cliente</th>
                                    <th><input type="text" name="nombrecliente" class="form-control"></th>
                                    <th>Estado</th>
                                    <th><select name="estado" class="form-control">
                                        <option value="Pendiente" selected>Pendiente</option>
                                        <option value="Confirmado">Confirmado</option>
                                        <option value="%">Todos</option>
                                    </select></th>
                                    <th>Tipo Evento</th>
                                    <th><select name="tipo" class="form-control">
                                        <option value="Reserva" >Reserva</option>
                                        <option value="Pedido">Pedido</option>
                                        <option value="%" selected>Todos</option>
                                    </select></th>
                                    <th>
                                        <input type="submit" value="Buscar" class="btn btn-info">
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <h4 class="section-title">Eventos </h4>
            <div class="col-sm-12" id="respuestaformulario">
                
            </div>
        </div>
    </div>
</section>
<?php include_once($folder."pie.php");?>