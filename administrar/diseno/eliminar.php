<?php
include_once("../../login/check.php");
$folder="../../";

$coddiseno=$_POST['coddiseno'];
include_once("../../class/diseno.php");
$diseno=new diseno;
$col=$diseno->eliminarRegistro("coddiseno=".$coddiseno);

?>