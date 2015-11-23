<?php
$folder="../../";
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Nuevo Testimonio</h2>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                    <legend>Datos del Testimonio</legend>
                    <form action="guardar.php" method="post" class="formulario" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td>Título</td>
                                <td><input type="text" name="titulo" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Testimonio</td>
                                <td><textarea name="testimonio" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Imágen 1</td>
                                <td><input type="file" name="img1" class="form-control" accept=".jpg,.png"></td>
                            </tr>
                            <tr>
                                <td>Imágen 2</td>
                                <td><input type="file" name="img2" class="form-control" accept=".jpg,.png"></td>
                            </tr>
                            <tr>
                                <td>Imágen 3</td>
                                <td><input type="file" name="img3" class="form-control" accept=".jpg,.png"></td>
                            </tr>
                            <tr>
                                <td>Nombre del Cliente</td>
                                <td><input type="text" name="nombre" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Facebook del Cliente</td>
                                <td><input type="text" name="facebook" class="form-control"></td>
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