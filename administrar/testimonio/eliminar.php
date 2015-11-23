<?php
include_once("../../login/check.php");
$folder="../../";

$codtestimonio=$_POST['codtestimonio'];
include_once("../../class/testimonio.php");
$testimonio=new testimonio;
$col=$testimonio->eliminarRegistro("codtestimonio=".$codtestimonio);

?>