<?php
include_once("../../login/check.php");
$folder="../../";

$coddiseno=$_POST['codflores'];
include_once("../../class/flores.php");
$flores=new flores;
$col=$flores->eliminarRegistro("codflores=".$codflores);

?>