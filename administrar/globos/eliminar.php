<?php
include_once("../../login/check.php");
$folder="../../";

$codglobos=$_POST['codglobos'];
include_once("../../class/globos.php");
$globos=new globos;
$col=$globos->eliminarRegistro("codglobos=".$codglobos);

?>