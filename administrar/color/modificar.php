<?php
$codcolor=$_GET['c'];
include_once("../../class/color.php");
$color=new color;
$col=$color->mostrarTodoRegistro(" codcolor='$codcolor'",1,"");
$col=array_shift($col);
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Modificar Diseño de Color </h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Diseño</legend>
                    <form action="actualizar.php" method="post" class="formulario">
                    <input type="hidden" name="codcolor" value="<?php echo $codcolor?>">
                        <table class="table table-bordered">
                            <tr>
                                <td>Descripción</td>
                                <td><input type="text" name="descripcion" class="form-control" value="<?php echo $col['descripcion']?>"></td>
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