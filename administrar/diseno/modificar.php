<?php
$coddiseno=$_GET['c'];
include_once("../../class/diseno.php");
$diseno=new diseno;
$dis=$diseno->mostrarTodoRegistro(" coddiseno='$coddiseno'",1,"");
$col=array_shift($dis);
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Modificar Diseño</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Diseño</legend>
                    <form action="actualizar.php" method="post" class="formulario">
                    <input type="hidden" name="coddiseno" value="<?php echo $coddiseno?>">
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