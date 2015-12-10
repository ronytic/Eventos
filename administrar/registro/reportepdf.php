<?php
include_once("../../login/check.php");
$codreserva=$_GET['codreserva'];
include_once("../../class/reserva.php");
$reserva=new reserva;
$res=$reserva->mostrarTodoRegistro("codreserva=".$codreserva);
$res=array_shift($res);

include_once("../../class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro("codservicio=".$res['codservicio'],"1","titulo");
$ser=array_shift($ser);

include_once("../../class/color.php");
$color=new color;
$col=$color->mostrarTodoRegistro("codcolor=".$res['codcolor'],1,"descripcion");
$col=array_shift($col);

include_once("../../class/diseno.php");
$diseno=new diseno;
$dis=$diseno->mostrarTodoRegistro("coddiseno=".$res['coddiseno'],1,"descripcion");
$dis=array_shift($dis);
include_once("../../class/flores.php");
$flores=new flores;
$flo=$flores->mostrarTodoRegistro("codflores=".$res['codflores'],1,"descripcion");
$flo=array_shift($flo);

include_once("../../class/globos.php");
$globos=new globos;
$glo=$globos->mostrarTodoRegistro("codglobos=".$res['codglobos'],1,"descripcion");
$glo=array_shift($glo);

include_once("../../impresion/pdf.php");
$titulo="Reporte de Evento";
class PDF extends PPDF{
    function Cabecera(){}
}
$pdf=new PDF("P","mm","letter");
$pdf->AddPage();
$pdf->CuadroCuerpoPersonalizado(182,"Datos del Evento",1,"","1","B");
//$pdf->CuadroCuerpoPersonalizado(90,"Personal",1,"","1","B");
$pdf->ln();
$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(30,"Servicio",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$ser['titulo']."-".$ser['precio'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Tipo de Evento",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['tipo'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Fecha del Evento",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['fechaevento'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Color",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$col['descripcion'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Hora del Evento",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['horaevento'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Diseño",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$dis['descripcion'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Dirección Evento",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['direccionevento'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Flores",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$flo['descripcion'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Nro de Invitados",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['nroinvitados'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Globos",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$glo['descripcion'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Nombre Cliente",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['nombrecliente'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Total",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,number_format($res['total'],2),1,"R","B","B");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"C.I. Cliente",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['cicliente'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Acuenta",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,number_format($res['acuenta'],2),1,"R","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Teléfono Cliente",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['telefonocliente'],0,"","B","");
$pdf->CuadroCuerpoPersonalizado(30,"Saldo",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,number_format($res['saldo'],2),1,"R","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,"",0,"","","");
$pdf->CuadroCuerpoPersonalizado(30,"Estado Pedido",0,"","","B");
$pdf->CuadroCuerpoPersonalizado(60,$res['tipo'],0,"","B","");
$pdf->ln(8);
$pdf->CuadroCuerpoPersonalizado(30,"Opción de Decoración",0,"","","B");
$pdf->ln();
$pdf->CuadroCuerpoMulti(182,$res['opciondecoracion'],0,"","B","");
$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(30,"Conclusión Final",0,"","","B");
$pdf->ln();
$pdf->CuadroCuerpoMulti(182,$res['conclusion'],0,"","B","");

$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(120,"Personal a cargo del Evento",1,"","1","B");
$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(10,"N",1,"","1","B");
$pdf->CuadroCuerpoPersonalizado(70,"Nombre",1,"","1","B");
$pdf->CuadroCuerpoPersonalizado(40,"Cargo",1,"","1","B");
$pdf->ln();
include_once("../../class/usuario.php");
$usuario=new usuario;
include_once("../../class/personal.php");
$personal=new personal;
$per=$personal->mostrarTodoRegistro("codreserva=".$codreserva,1,"fecha,hora");
foreach($per as $p){
    $i++;
    $usu=$usuario->mostrarDatos($p['codusuarios']);
    $usu=array_shift($usu);
    $pdf->CuadroCuerpoPersonalizado(10,$i,0,"R","1","");
    $pdf->CuadroCuerpoPersonalizado(70,$usu['paterno']." ".$usu['materno']." ".$usu['nombre'],0,"","1","");
    $pdf->CuadroCuerpoPersonalizado(40,$usu['cargo'],0,"","1","");
    $pdf->ln();
}

$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(30,"Observaciones",0,"","","B");
$pdf->ln();
$pdf->CuadroCuerpoMulti(182,"",0,"","B","");

$pdf->Output();
?>