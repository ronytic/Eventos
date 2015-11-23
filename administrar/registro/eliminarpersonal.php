<?php
include_once("../../login/check.php");
$folder="../../";

$codpersonal=$_POST['codpersonal'];
include_once("../../class/personal.php");
$personal=new personal;
$res=$personal->eliminarRegistro("codpersonal=".$codpersonal);

?>