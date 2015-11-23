<?php
include_once("../../class/flores.php");
$flores=new flores;
extract($_POST);
$col=$flores->mostrarTodoRegistro(" descripcion LIKE '$descripcion%'",1,"");
?>
<table class="table table-bordered table-striped table-hover">
<thead>
<tr><th width="50">Nº</th><th>Descripción</th><th>Precio</th><th></th></tr>
</thead>
<?php
foreach($col as $c){$i++;

?>
<tr>
    <td class="der"><?php echo $i?></td>
    <td><?php echo $c['descripcion']?></td>
    <td><?php echo $c['precio']?></td>
    <td><a href="modificar.php?c=<?php echo $c['codflores']?>" class="btn btn-success btn-xs" title="Modificar" rel="<?php echo $r['codflores']?>">M</a></td>
    <td><a href="eliminar.php" class="btn btn-danger btn-xs eliminar" title="Eliminar" rel="<?php echo $c['codflores']?>">E</a></td>
</tr>
<?php    
}
?>
</table>