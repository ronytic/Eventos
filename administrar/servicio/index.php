<?php
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Nuevo Servicio</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Servicio</legend>
                    <form action="guardar.php" method="post" class="formulario" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td>Título</td>
                                <td><input type="text" name="titulo" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Imágen del Servicio</td>
                                <td><input type="file" name="imagen" class="form-control" accept=".jpg,.png"></td>
                            </tr>
                            <tr>
                                <td>Descripción</td>
                                <td><input type="text" name="descripcion" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Precio</td>
                                <td><input type="number" name="precio" class="form-control" min="0"></td>
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