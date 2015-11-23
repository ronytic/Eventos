<?php
$codservicio=$_GET['c'];
include_once("../../class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro(" codservicio='$codservicio'",1,"");
$col=array_shift($ser);
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Modificar Servicio</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Servicio</legend>
                    <form action="actualizar.php" method="post" class="formulario" enctype="multipart/form-data">
                    <input type="hidden" name="codservicio" value="<?php echo $codservicio?>">
                        <table class="table table-bordered">
                            <tr>
                                <td>Título</td>
                                <td><input type="text" name="titulo" class="form-control" value="<?php echo $col['titulo']?>"></td>
                            </tr>
                            <tr>
                                <td>Imágen del Servicio</td>
                                <td><input type="file" name="imagen" class="form-control" accept=".jpg,.png">
                                <br>
                                <?php if($col['imagen']!=""){
                                ?>
                                <img src="../../imagenes/productosyservicios/<?php echo $col['imagen']?>" class="img-thumbnail">
                                <?php
                                }?>
                                </td>
                            </tr>
                            <tr>
                                <td>Descripción</td>
                                <td><textarea name="descripcion" class="form-control" rows="5"><?php echo $col['descripcion']?></textarea></td>
                            </tr>
                            <tr>
                                <td>Precio</td>
                                <td><input type="number" name="precio" class="form-control" min="0" value="<?php echo $col['precio']?>"></td>
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