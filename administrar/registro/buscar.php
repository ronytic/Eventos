<?php
include_once("../../class/reserva.php");
$reserva=new reserva;
extract($_POST);
$res=$reserva->mostrarTodoRegistro("fechaevento='$fechaevento' and nombrecliente LIKE '$nombrecliente%' and estado LIKE '$estado' and tipo LIKE '$tipo'",1,"");
?>
<table class="table table-bordered table-striped table-hover">
<thead>
<tr><th>Nº</th><th>Fecha Evento</th><th>Hora Evento</th><th>Nro Invitados</th><th>Nombre Cliente</th><th>C.I. Cliente</th><th>Telefono Cliente</th><th>Total</th><th>A Cuenta</th><th>Saldo</th><th>Estado</th><th>Tipo Evento</th><th>Personal</th><th></th></tr>
</thead>
<?php
foreach($res as $r){$i++;
switch($r['estado']){
    case "Pendiente":{$estado="danger";}break; 
    case "Confirmado":{$estado="success";}break;      
}
?>
<tr>
    <td class="der"><?php echo $i?></td>
    <td><?php echo date("d-m-Y",strtotime($r['fechaevento']))?></td>
    <td><?php echo date("H:i",strtotime($r['horaevento']))?></td>
    <td><?php echo $r['nroinvitados']?></td>
    <td><?php echo $r['nombrecliente']?></td>
    <td><?php echo $r['cicliente']?></td>
    <td><?php echo $r['telefonocliente']?></td>
    
    <td class="success"><?php echo $r['total']?></td>
    <td><?php echo $r['acuenta']?></td>
    <td><?php echo $r['saldo']?></td>
    <td><span class="label label-<?php echo $estado?>"><?php echo $r['estado']?></span></td>
    <td><?php echo $r['tipo']?></td>
   
    <td><a href="personal.php?c=<?php echo $r['codreserva']?>" class="btn btn-info btn-xs" title="Asignar Personal">Asignar</a></td>
     <td><a href="reporte.php?c=<?php echo $r['codreserva']?>" class="btn btn-warning btn-xs" title="Ver Reporte para Impresión"><i class="fa fa-file"></i></a></td>
    <td><a href="modificar.php?c=<?php echo $r['codreserva']?>" class="btn btn-success btn-xs" title="Modificar" rel="<?php echo $r['codreserva']?>">M</a></td>
    <td><a href="eliminar.php" class="btn btn-danger btn-xs eliminar" title="Eliminar" rel="<?php echo $r['codreserva']?>">E</a></td>
</tr>
<?php    
}
?>
</table>