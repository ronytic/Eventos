<?php
include_once("../../login/check.php");
$folder="../../";

$codcolor=$_POST['codcolor'];
include_once("../../class/color.php");
$color=new color;
$col=$color->eliminarRegistro("codcolor=".$codcolor);

?>