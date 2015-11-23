<?php
include_once("../../login/check.php");
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$codcolor=$_POST['codcolor'];

include_once("../../class/color.php");
$color=new color;
$valores=array("descripcion"=>"'$descripcion'",
                "precio"=>"'$precio'"
            );
$color->actualizarRegistro($valores,"codcolor=".$codcolor);

$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Mensaje de Confirmación</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h5>Su Diseño se Registro Correctamente</h5>
                        <a href="listar.php" class="btn btn-success">Listar Diseños</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php include_once($folder."pie.php");?>