<?php
$codtestimonio=$_GET['c'];
include_once("../../class/testimonio.php");
$testimonio=new testimonio;
$tes=$testimonio->mostrarTodoRegistro(" codtestimonio='$codtestimonio'",1,"");
$col=array_shift($tes);
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Modificar Testimonio</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Testimonio</legend>
                    <form action="actualizar.php" method="post" class="formulario" enctype="multipart/form-data">
                    <input type="hidden" name="codtestimonio" value="<?php echo $codtestimonio?>">
                        <table class="table table-bordered">
                            <tr>
                                <td>Título</td>
                                <td><input type="text" name="titulo" class="form-control" value="<?php echo $col['titulo']?>"></td>
                            </tr>
                            <tr>
                                <td>Testimonio</td>
                                <td><textarea name="testimonio" class="form-control" rows="5"><?php echo $col['testimonio']?></textarea></td>
                            </tr>
                            <tr>
                                <td>Imágen 1</td>
                                <td><input type="file" name="img1" class="form-control" accept=".jpg,.png">
                                <br>
                                <?php if($col['img1']!=""){
                                ?>
                                <img src="../../imagenes/testimonio/<?php echo $col['img1']?>" class="img-thumbnail">
                                <?php
                                }?>
                                </td>
                            </tr>
                            <tr>
                                <td>Imágen 2</td>
                                <td><input type="file" name="img2" class="form-control" accept=".jpg,.png">
                                <br>
                                <?php if($col['img2']!=""){
                                ?>
                                <img src="../../imagenes/testimonio/<?php echo $col['img2']?>" class="img-thumbnail">
                                <?php
                                }?>
                                </td>
                            </tr>
                            <tr>
                                <td>Imágen 3</td>
                                <td><input type="file" name="img3" class="form-control" accept=".jpg,.png">
                                <br>
                                <?php if($col['img3']!=""){
                                ?>
                                <img src="../../imagenes/testimonio/<?php echo $col['img3']?>" class="img-thumbnail">
                                <?php
                                }?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre del Cliente</td>
                                <td><input type="text" name="nombre" class="form-control" value="<?php echo $col['nombre']?>"></td>
                            </tr>
                            <tr>
                                <td>Facebook del Cliente</td>
                                <td><input type="text" name="facebook" class="form-control" value="<?php echo $col['facebook']?>"></td>
                            </tr>
                            <td colspan="2">
                            <input type="submit" value="Guardar" class="btn btn-info">
                            </td>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
        
    </div>
</section>
<?php include_once($folder."pie.php");?>