<?php
$cantidadmaxima=0;
$FechaEvento=$_POST['FechaEvento'];
include_once("class/reserva.php");
$reserva=new reserva;
$res=$reserva->mostrarTodoRegistro("estado='Confirmado' and fechaevento='$FechaEvento'");
if(count($res)>$cantidadmaxima){
?>
<div class="alert alert-danger"><small>Personal no Disponible para esta fecha</small></div>
<script>$("#botonenviar").attr("disabled","disabled")</script>
<?php
}else{
?>
<div class="alert alert-success"><small>Personal  Disponible para esta fecha</small></div>
<script>$("#botonenviar").removeAttr("disabled")</script>
<?php
}
?>