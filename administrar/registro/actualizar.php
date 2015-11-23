<?php
include_once("../../login/check.php");
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
extract($_POST);
$valores=array("codservicio"=>"'$codservicio'",
                "fechaevento"=>"'$fechaevento'",
                "horaevento"=>"'$horaevento'",
                "direccionevento"=>"'$direccionevento'",
                "nroinvitados"=>"'$nroinvitados'",
                "nombrecliente"=>"'$nombrecliente'",
                "cicliente"=>"'$cicliente'",
                "telefonocliente"=>"'$telefonocliente'",
                "tipo"=>"'$tipo'",
                "cuentatigo"=>"''",
                "codcolor"=>"'$codcolor'",
                "coddiseno"=>"'$coddiseno'",
                "codflores"=>"'$codflores'",
                "codglobos"=>"'$codglobos'",
                "total"=>"'$total'",
                "opciondecoracion"=>"'$opciondecoracion'",
                
                "acuenta"=>"'$acuenta'",
                "saldo"=>"'$saldo'",
                "estado"=>"'$estado'",
                "id"=>"'0'",
                "nivel"=>"'0'"
);
/*echo "<pre>";
print_r($valores);
echo "</pre>";*/
include_once("../../class/reserva.php");
$reserva=new reserva;
$reserva->actualizarRegistro($valores,"codreserva=$codreserva");
header("Location:listar.php");
?>