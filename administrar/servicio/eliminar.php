<?php
include_once("../../login/check.php");
$folder="../../";

$codservicio=$_POST['codservicio'];
include_once("../../class/servicio.php");
$servicio=new servicio;
$col=$servicio->eliminarRegistro("codservicio=".$codservicio);

?>