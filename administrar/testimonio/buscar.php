<?php
include_once("../../class/testimonio.php");
$testimonio=new testimonio;
extract($_POST);
$col=$testimonio->mostrarTodoRegistro("titulo LIKE '$titulo%' and nombre LIKE '$nombre%'",1,"");
?>
<table class="table table-bordered table-striped table-hover">
<thead>
<tr><th width="50">Nº</th><th>Título</th><th>Testimonio</th><th>Nombre</th><th>Facebook</th><th></th></tr>
</thead>
<?php
foreach($col as $c){$i++;

?>
<tr>
    <td class="der"><?php echo $i?></td>
    <td><?php echo $c['titulo']?></td>
    <td><?php echo $c['testimonio']?></td>
    <td><?php echo $c['nombre']?></td>
    <td><?php echo $c['facebook']?></td>
    <td><a href="modificar.php?c=<?php echo $c['codtestimonio']?>" class="btn btn-success btn-xs" title="Modificar" rel="<?php echo $r['codtestimonio']?>">M</a></td>
    <td><a href="eliminar.php" class="btn btn-danger btn-xs eliminar" title="Eliminar" rel="<?php echo $c['codtestimonio']?>">E</a></td>
</tr>
<?php    
}
?>
</table>