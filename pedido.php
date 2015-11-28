<?php
$folder="";
include_once("class/testimonio.php");
$testimonio=new testimonio;
$tes=$testimonio->mostrarTodoRegistro("",1,"");
include_once("class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro("",1,"titulo");

include_once("class/color.php");
$color=new color;
$col=$color->mostrarTodoRegistro("",1,"descripcion");
include_once("class/diseno.php");
$diseno=new diseno;
$dis=$diseno->mostrarTodoRegistro("",1,"descripcion");
include_once("class/flores.php");
$flores=new flores;
$flo=$flores->mostrarTodoRegistro("",1,"descripcion");
include_once("class/globos.php");
$globos=new globos;
$glo=$globos->mostrarTodoRegistro("",1,"descripcion");
?>
<?php include_once("cabecerahtml.php");?>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
    $(document).on("change",".pedido",cargar);
    cargar();
    $(document).on("change","[name=fechaevento]",evento);
    evento();
});
function cargar(){

    var codcolor=parseFloat($("[name=codcolor]>option:selected").attr("rel-precio"));
    var coddiseno=parseFloat($("[name=coddiseno]>option:selected").attr("rel-precio"));
    var codflores=parseFloat($("[name=codflores]>option:selected").attr("rel-precio"));
    var codglobos=parseFloat($("[name=codglobos]>option:selected").attr("rel-precio"));
    var total=codcolor+coddiseno+codflores+codglobos;
     $("#total").val(total.toFixed(2));
        
       //DETALLAR OTRAS OPCIONES PARA SU DECORACION
    }
function evento(){
    var  fechaevento=$("[name=fechaevento]").val();
    $.post("cantidad.php",{"FechaEvento":fechaevento},function(data){
        $(".mensajeevento").html(data);
    });
}
</script>
<?php include_once("cabecera.php");?>
<section class="">
    <div class="container">
        
        <div class="row">
        <div class="col-md-8">
        <h2 class="section-title">Reserva Personalizada </h2>
            <article class="post animated fadeInLeft animation-delay-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title">Datos de Reserva</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="reserva/personalizadaguardar.php" method="post">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Color</th><th>Diseño</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>
                                            <select class="form-control pedido" name="codcolor">
                                            <option value="" rel-precio="0">Ninguno</option>
                                            <?php foreach($col as $c){?>
                                            <option value="<?php echo $c['codcolor']?>" rel-precio="<?php echo $c['precio']?>"><?php echo $c['descripcion']?> - Bs <?php echo $c['precio']?></option>
                                            <?php }?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control pedido" name="coddiseno">
                                            <option value="" rel-precio="0">Ninguno</option>
                                            <?php foreach($dis as $d){?>
                                            <option value="<?php echo $d['coddiseno']?>" rel-precio="<?php echo $d['precio']?>"><?php echo $d['descripcion']?> - Bs <?php echo $d['precio']?></option>
                                            <?php }?>
                                            </select>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Flores</th><th>Globos</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control pedido" name="codflores">
                                            <option value="" rel-precio="0">Ninguno</option>
                                            <?php foreach($flo as $f){?>
                                            <option value="<?php echo $f['codflores']?>" rel-precio="<?php echo $f['precio']?>"><?php echo $f['descripcion']?> - Bs <?php echo $f['precio']?></option>
                                            <?php }?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control pedido" name="codglobos">
                                            <option value="" rel-precio="0">Ninguno</option>
                                            <?php foreach($glo as $g){?>
                                            <option value="<?php echo $g['codglobos']?>" rel-precio="<?php echo $g['precio']?>"><?php echo $g['descripcion']?> - Bs <?php echo $g['precio']?></option>
                                            <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="info">
                                        <td class="der resaltar">Total</td>
                                        <td><input type="text" readonly name="total" class="form-control der" value="0" id="total"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">
                                        DETALLAR OTRAS OPCIONES PARA SU DECORACION
                                        <textarea name="opciondecoracion" class="form-control"></textarea>
                                        </th>
                                    </tr>
                                </table>
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td>Fecha del Evento</td>
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