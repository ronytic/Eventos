<?php
include_once("../../login/check.php");
$codreserva=$_GET['c'];
include_once("../../class/reserva.php");
$reserva=new reserva;
$res=$reserva->mostrarTodoRegistro("codreserva=".$codreserva);
$res=array_shift($res);

include_once("../../class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro("","1","titulo");

include_once("../../class/color.php");
$color=new color;
$col=$color->mostrarTodoRegistro("",1,"descripcion");
include_once("../../class/diseno.php");
$diseno=new diseno;
$dis=$diseno->mostrarTodoRegistro("",1,"descripcion");
include_once("../../class/flores.php");
$flores=new flores;
$flo=$flores->mostrarTodoRegistro("",1,"descripcion");
include_once("../../class/globos.php");
$globos=new globos;
$glo=$globos->mostrarTodoRegistro("",1,"descripcion");


$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
    $(document).on("change","[name=total],[name=acuenta],[name=saldo]",function(e){
        var total=parseFloat($("[name=total]").val());
        var acuenta=parseFloat($("[name=acuenta]").val());
        
        
        var saldo=total-acuenta;
        $("[name=saldo]").val((saldo.toFixed(2)))
        
    });
});
</script>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Modificar Evento</h2>
            <form action="actualizar.php" method="post" class="disabled">
             <input type="hidden" name="codreserva" value="<?php echo $codreserva?>">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <td>Servicio</td>
                        <td><select class="form-control pedido" name="codservicio">
                            <option value="0" <?php echo $s['codservicio']=="0"?'selected="selected"':'';?>>Ninguno</option>
                            <?php foreach($ser as $s){?>
                            <option value="<?php echo $s['codservicio']?>" <?php echo $s['codservicio']==$res['codservicio']?'selected="selected"':'';?>><?php echo $s['titulo']?> - Bs <?php echo $s['precio']?></option>
                            <?php }?>
                            </select>
                       </td>
                    </tr>
                    <tr>
                        <td>Fecha del Evento</td>
                        <td><input type="date" name="fechaevento" class="form-control" value="<?php echo $res['fechaevento']?>" required></td>
                    </tr>
                    <tr>
                        <td>Hora del Evento</td>
                        <td><input type="time" name="horaevento" class="form-control" value="<?php echo $res['horaevento']?>" required></td>
                    </tr>
                    <tr>
                        <td>Dirección del Evento</td>
                        <td><input type="text" name="direccionevento" class="form-control" value="<?php echo $res['direccionevento']?>"></td>
                    </tr>
                    <tr>
                        <td>Nro de Invitados</td>
                        <td><input type="number" name="nroinvitados" class="form-control der" value="<?php echo $res['nroinvitados']?>" min="0"></td>
                    </tr>
                    <tr>
                        <td>Nombre Cliente</td>
                        <td><input type="text" name="nombrecliente" class="form-control" value="<?php echo $res['nombrecliente']?>" ></td>
                    </tr>
                    <tr>
                        <td>C.I. Cliente</td>
                        <td><input type="text" name="cicliente" class="form-control" value="<?php echo $res['cicliente']?>" ></td>
                    </tr>
                    <tr>
                        <td>Teléfono Cliente</td>
                        <td><input type="text" name="telefonocliente" class="form-control" value="<?php echo $res['telefonocliente']?>" ></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <td>Tipo Evento</td>
                        <td>
                        <select name="tipo" class="form-control">
                            <option value="Reserva" <?php echo $res['tipo']=="Reserva"?'selected="selected"':'';?>>Reserva</option>
                            <option value="Pedido" <?php echo $res['tipo']=="Pedido"?'selected="selected"':'';?>>Pedido</option>
                        </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Color</td>
                        <td><select class="form-control pedido" name="codcolor">
                                <option value="" rel-precio="0">Ninguno</option>
                                <?php foreach($col as $c){?>
                                <option value="<?php echo $c['codcolor']?>" rel-precio="<?php echo $c['precio']?>" <?php echo $res['codcolor']==$c['codcolor']?'selected="selected"':'';?>><?php echo $c['descripcion']?> - Bs <?php echo $c['precio']?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Diseño</td>
                        <td>
                            <select class="form-control pedido" name="coddiseno">
                                <option value="" rel-precio="0">Ninguno</option>
                                <?php foreach($dis as $d){?>
                                <option value="<?php echo $d['coddiseno']?>" rel-precio="<?php echo $d['precio']?>" <?php echo $res['coddiseno']==$d['coddiseno']?'selected="selected"':'';?>><?php echo $d['descripcion']?> - Bs <?php echo $d['precio']?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Flores</td>
                        <td>
                            <select class="form-control pedido" name="codflores">
                            <option value="" rel-precio="0">Ninguno</option>
                            <?php foreach($flo as $f){?>
                            <option value="<?php echo $f['codflores']?>" rel-precio="<?php echo $f['precio']?>" <?php echo $res['codflores']==$f['codflores']?'selected="selected"':'';?>><?php echo $f['descripcion']?> - Bs <?php echo $f['precio']?></option>
                            <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Globos</td>
                        <td>
                            <select class="form-control pedido" name="codglobos">
                            <option value="" rel-precio="0">Ninguno</option>
                            <?php foreach($glo as $g){?>
                            <option value="<?php echo $g['codglobos']?>" rel-precio="<?php echo $g['precio']?>" <?php echo $res['codglobos']==$g['codglobos']?'selected="selected"':'';?>><?php echo $g['descripcion']?> - Bs <?php echo $g['precio']?></option>
                            <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Opción de Decoración</td>
                        <td><textarea class="form-control" name="opciondecoracion"><?php echo $res['opciondecoracion']?></textarea></td>
                    </tr>
                    
                    <tr class="info">
                        <td>Total</td>
                        <td><input type="number" name="total" class="form-control der" value="<?php echo $res['total']?>" min="0"></td>
                    </tr>
                    <tr class="info">
                        <td>Acuenta</td>
                        <td><input type="number" name="acuenta" class="form-control der" value="<?php echo $res['acuenta']?>" min="0"></td>
                    </tr>
                    <tr class="info">
                        <td>Saldo</td>
                        <td><input type="number" name="saldo" class="form-control der" value="<?php echo $res['saldo']?>" min="0" readonly></td>
                    </tr>
                    
                    <tr>
                        <td>Estado del Pedido</td>
                        <td><select name="estado" class="form-control">
                            <option value="Pendiente" <?php echo $res['estado']=="Pendiente"?'selected="selected"':'';?>>Pendiente</option>
                            <option value="Confirmado" <?php echo $res['estado']=="Confirmado"?'selected="selected"':'';?>>Confirmado</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Guardar" class="btn btn-info"></td>
                    </tr>
                </table>
            </div>
             </form>
        </div>
    </div>
</section>
<?php include_once($folder."pie.php");?>