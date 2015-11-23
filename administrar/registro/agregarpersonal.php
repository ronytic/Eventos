<?php
include_once("../../login/check.php");
$codreserva=$_POST['codreserva'];
$codusuarios=$_POST['codusuarios'];
include_once("../../class/personal.php");
$personal=new personal;
$valores=array("codreserva"=>"'$codreserva'",
                "codusuarios"=>"'$codusuarios'"
            );
$personal->insertarRegistro($valores);
?>
