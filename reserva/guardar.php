<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
extract($_POST);
$valores=array("codservicio"=>"'$servicio'",
                "fechaevento"=>"'$fechaevento'",
                "horaevento"=>"'$horaevento'",
                "direccionevento"=>"'$direccionevento'",
                "nroinvitados"=>"'$nroinvitados'",
                "nombrecliente"=>"'$nombrecliente'",
                "cicliente"=>"'$cicliente'",
                "telefonocliente"=>"'$telefonocliente'",
                "tipo"=>"'Reserva'",
                "cuentatigo"=>"''",
                "codcolor"=>"''",
                "coddiseno"=>"''",
                "codflores"=>"''",
                "coddecoracion"=>"''",
                "total"=>"'$total'",
                "acuenta"=>"'0'",
                "saldo"=>"'0'",
                "estado"=>"'Pendiente'",
);
echo "<pre>";
print_r($valores);
echo "</pre>";
include_once("../class/reserva.php");
$reserva=new reserva;
//$reserva->insertarRegistro($valores);
$folder="../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<?php include_once($folder."pie.php");?>