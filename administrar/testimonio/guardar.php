<?php
include_once("../../login/check.php");
extract($_POST);

if($_FILES['img1']['name']!=""){
    $nombrearchivo=str_ireplace(" ","_",$_FILES['img1']['name']);
    @copy($_FILES['img1']['tmp_name'],"../../imagenes/testimonio/".$nombrearchivo);    
    $img1=$nombrearchivo;
}
if($_FILES['img2']['name']!=""){
    $nombrearchivo=str_ireplace(" ","_",$_FILES['img2']['name']);
    @copy($_FILES['img2']['tmp_name'],"../../imagenes/testimonio/".$nombrearchivo);    
    $img2=$nombrearchivo;
}
if($_FILES['img3']['name']!=""){
    $nombrearchivo=str_ireplace(" ","_",$_FILES['img3']['name']);
    @copy($_FILES['img3']['tmp_name'],"../../imagenes/testimonio/".$nombrearchivo);    
    $img3=$nombrearchivo;
}


include_once("../../class/testimonio.php");
$testimonio=new testimonio;
$valores=array("nombre"=>"'$nombre'",
                "facebook"=>"'$facebook'",
                "titulo"=>"'$titulo'",
                "testimonio"=>"'$testimonio'",
                "img1"=>"'$img1'",
                "img2"=>"'$img2'",
                "img3"=>"'$img3'",
            );
$testimonio->insertarRegistro($valores);
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
                        <h5>Su Testimonio se Registro Correctamente</h5>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php include_once($folder."pie.php");?>