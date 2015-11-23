<?php
include_once("../../class/color.php");
$color=new color;
extract($_POST);
$col=$color->mostrarTodoRegistro(" descripcion LIKE '$descripcion%'",1,"");
?>
<table class="table table-bordered table-striped table-hover">
<thead>
<tr><th width="50">Nº</th><th>Descripción</th><th>Precio</th<th></th></tr>
</thead>
<?php
foreach($col as $c){$i++;

?>
<tr>
    <td class="der"><?php echo $i?></td>
    <td><?php echo $c['descripcion']?></td>
    <td><?php echo $c['precio']?></td>
    <td><a href="modificar.php?c=<?php echo $c['codcolor']?>" class="btn btn-success btn-xs" title="Modificar" rel="<?php echo $r['codcolor']?>">M</a></td>
    <td><a href="eliminar.php" class="btn btn-danger btn-xs eliminar" title="Eliminar" rel="<?php echo $c['codcolor']?>">E</a></td>
</tr>
<?php    
}
?>
</table>