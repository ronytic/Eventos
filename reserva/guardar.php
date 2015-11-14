<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
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
                "id"=>"'0'",
                "nivel"=>"'0'"
);
/*echo "<pre>";
print_r($valores);
echo "</pre>";*/
include_once("../class/reserva.php");
$reserva=new reserva;
$reserva->insertarRegistro($valores);
$folder="../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
         <div class="row">
                <h2 class="section-title">Mensaje de Confirmación</h2>
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="alert alert-info">
                            <h4>Gracias por Confiar en Nosotros</h4>
                            <br>
                            <h5>Su Reserva se Registro Correctamente</h5>
                            </div>
                        </div>
                    </div>
                </div><!--Col-sm-8-->
                <div class="col-sm-4">
                    <div class="panel panel-primary animated fadeInDown animation-delay-6">
                        <div class="panel-heading"><a href="#">Decoraciónes</a></div>
                        <div class="panel-body">
                            <img src="<?php echo $folder?>imagenes/quienessomos/1.jpg" alt="" class="img-responsive">
                        <p>Para otorgar a su documento un aspecto profesional, Word proporciona encabezados, pies de página, páginas de portada y diseños de cuadro de texto que se complementan entre sí. Por ejemplo, puede agregar una portada coincidente, el encabezado y la barra lateral. Haga clic en Insertar y elija los elementos que desee de las distintas galerías.Los temas y estilos también ayudan a mantener su documento coordinado.</p>
                        </div>
                    </div>
                    <div class="panel panel-primary animated fadeInDown animation-delay-6">
                        <div class="panel-heading"><a href="#">Eventos </a></div>
                        <div class="panel-body">
                        <img src="<?php echo $folder?>imagenes/quienessomos/2.jpg" alt="" class="img-responsive">
                        <p>Si necesita detener la lectura antes de llegar al final, Word le recordará dónde dejó la lectura, incluso en otros dispositivos.El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.</p>
                        </div>
                    </div>
                </div><!--Col-sm-4-->

            </div>
    </div>
</section>
<?php include_once($folder."pie.php");?>