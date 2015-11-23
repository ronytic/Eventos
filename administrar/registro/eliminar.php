<?php
include_once("../../login/check.php");
$folder="../../";

$codreserva=$_POST['codreserva'];
include_once("../../class/reserva.php");
$reserva=new reserva;
$res=$reserva->eliminarRegistro("codreserva=".$codreserva);

?>