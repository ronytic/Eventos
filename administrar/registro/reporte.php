<?php
include_once("../../login/check.php");
$cod=$_GET['c'];
$url="reportepdf.php?codreserva=$cod";
$folder="../../";

include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Reporte de Evento </h2>
            <div class="col-sm-12">
                <iframe src="<?php echo $url?>" width="100%" height="700"></iframe>
            </div>
        </div>
    </div>
</section>
<?php include_once($folder."pie.php");?>