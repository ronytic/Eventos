<?php
include_once("../../login/check.php");
$codreserva=$_POST['codreserva'];
include_once("../../class/personal.php");
$personal=new personal;
include_once("../../class/usuario.php");
$usuario=new usuario;
$per=$personal->mostrarTodoRegistro("codreserva=".$codreserva,1,"fecha,hora");
?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr><th>N</th><th>Nombre</th><th>Cargo</th></tr>
    </thead>
    <?php foreach($per as $p){$i++;
    $usu=$usuario->mostrarDatos($p['codusuarios']);
    $usu=array_shift($usu);
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $usu['paterno']?> <?php echo $usu['materno']?> <?php echo $usu['nombre']?></td>
        <td><?php echo $usu['cargo']?></td>
        <td><a href="eliminar.php" class="btn btn-danger btn-xs eliminar" title="Eliminar" rel="<?php echo $p['codpersonal']?>">E</a></td>
    </tr>
    <?php    
    }?>
</table>