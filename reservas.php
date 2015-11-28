<?php
$folder="";
include_once("class/testimonio.php");
$testimonio=new testimonio;
$tes=$testimonio->mostrarTodoRegistro("",1,"");
include_once("class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro("",1,"titulo");
?>
<?php include_once("cabecerahtml.php");?>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
    $(document).on("change","[name=servicio]",cargar);
    cargar();
    $(document).on("change","[name=fechaevento]",evento);
    evento();
});
function evento(){
    var  fechaevento=$("[name=fechaevento]").val();
    $.post("cantidad.php",{"FechaEvento":fechaevento},function(data){
        $(".mensajeevento").html(data);
    });
}
function cargar(){
        var imagen=$("[name=servicio]>option:selected").attr("rel-imagen");
        var precio=$("[name=servicio]>option:selected").attr("rel-precio");
        var titulo=$("[name=servicio]>option:selected").attr("rel-titulo");
        var descripcion=$("[name=servicio]>option:selected").attr("rel-descripcion");
        $("#titulo").html(titulo);
        $("#precio").html("Bs "+precio);
        $("#total").val(precio);
        $("#descripcion").html(descripcion);
        $("#imagen").attr("src","<?php echo $folder?>imagenes/productosyservicios/"+imagen);
       
    }
</script>
<?php include_once("cabecera.php");?>
<section class="">
    <div class="container">
        
        <div class="row">
        <div class="col-md-8">
        <h2 class="section-title">Reservas <a href="pedido.php" class="btn btn-lg btn-warning pull-right">Pedido Personalizado</a></h2>
            <article class="post animated fadeInLeft animation-delay-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title"><a href="" class="transicion"><span id="titulo"></span></a></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="" class="img-post img-responsive" alt="Image" id="imagen">
                            </div>
                            <div class="col-lg-6 post-content">
                                <p id="descripcion"></p>

                                <h2>Precio: <span class="label label-info " id="precio">Bs </span></h2><h3></h3>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </article> <!-- post -->
            
            <article class="post animated fadeInLeft animation-delay-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title">Datos de Reserva</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="reserva/guardar.php" method="post">
                                <input type="hidden" name="total" value="" id="total">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td>Servicio</td>
                                        <td>
                                            <select class="form-control" name="servicio">
                                            <?php foreach($ser as $s){?>
                                            <option value="<?php echo $s['codservicio']?>" <?php echo $s['codservicio']==$_GET['c']?'selected="selected"':'';?> rel-imagen="<?php echo $s['imagen']?>" rel-precio="<?php echo $s['precio']?>" rel-titulo="<?php echo $s['titulo']?>" rel-descripcion="<?php echo $s['descripcion']?>"><?php echo $s['titulo']?></option>
                                            <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fecha del Evento<br>
                                        
                                        </td>
                                        <td><input type="date" value="<?php echo date("Y-m-d");?>" name="fechaevento" class="form-control" required><div class="mensajeevento"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Hora del Evento</td>
                                        <td><input type="time" value="00:00:00" name="horaevento" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td>Dirección del Evento</td>
                                        <td><input type="text" value="" name="direccionevento" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td>Nro de Invitados</td>
                                        <td><input type="number" value="" name="nroinvitados" class="form-control" required min="0"></td>
                                    </tr>
                                    <tr class="info">
                                        <td>Nombre del Cliente</td>
                                        <td><input type="text" value="" name="nombrecliente" class="form-control" required ></td>
                                    </tr>
                                    <tr class="info">
                                        <td>C.I. del Cliente</td>
                                        <td><input type="text" value="" name="cicliente" class="form-control" required ></td>
                                    </tr>
                                    <tr class="info">
                                        <td>Teléfono del Cliente</td>
                                        <td><input type="text" value="" name="telefonocliente" class="form-control" required ></td>
                                    </tr>
                                    <tr class="info">
                                        <td>Correo del Cliente</td>
                                        <td><input type="text" value="" name="correo" class="form-control" required ></td>
                                    </tr>
                                </table>
                                <h3>Pagos</h3>
                                <table class="table table-bordered">
                                    <tr class="info">
                                        <td>A traves de Tigo</td>
                                        <td><a href="http://www.tigo.com.bo/tigo-money/negocios/pagos-web" class="btn btn-lg btn-info" target="_blank"><img src="imagenes/logos/tigo.png"></a></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Reservar" class="btn btn-lg btn-success" id="botonenviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article> <!-- post -->

        </div> <!-- col-md-8 -->
        <div class="col-md-4">
            <aside class="sidebar">
                <div class="panel panel-primary animated fadeInDown animation-delay-6">
                    <div class="panel-heading"><i class="fa fa-comments"></i> Testimonios de Clientes</div>
                    <div class="panel-body">
                        <ul class="comments-sidebar">
                            <?php foreach($tes as $t){?>
                            <li>
                                <h4><a href="<?php echo $t['facebook']?>" target="_blank"><?php echo $t['nombre']?></a> - <a href="#"><?php echo $t['titulo'];?></a></h4>
                                <p><?php echo $t['testimonio'];?></p>
                            </li>
                           
                            <?php }?>
                            
                        </ul>
                    </div>
                </div>

           </aside> <!-- Sidebar -->
        </div>
    </div> <!-- row -->
        
        
    </div><!--Container-->
</section><!--Section-->


<?php include_once("pie.php");?>