<?php
$folder="";
include_once("class/testimonio.php");
$testimonio=new testimonio;
$tes=$testimonio->mostrarTodoRegistro("",1,"");
include_once("class/servicio.php");
$servicio=new servicio;
$ser=$servicio->mostrarTodoRegistro("",1,"");
?>
<?php include_once("cabecerahtml.php");?>
<?php include_once("cabecera.php");?>
<section class="">
    <div class="container">
        
        <div class="row">
        <div class="col-md-8">
        <h2 class="section-title">Productos y Servicios <a href="pedido.php" class="btn btn-lg btn-warning pull-right">Pedido Personalizado</a></h2>
            <?php foreach($ser as $s){?>
            <article class="post animated fadeInLeft animation-delay-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title"><a href="#" class="transicion"><?php echo $s['titulo']?></a></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php echo $folder?>imagenes/productosyservicios/<?php echo $s['imagen']?>" class="img-post img-responsive" alt="Image">
                            </div>
                            <div class="col-lg-6 post-content">
                                <p><?php echo $s['descripcion']?></p>

                                <h2>Precio: <span class="label label-info">Bs  <?php echo $s['precio']?></span></h2><h3></h3>
                                
                            
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer post-info-b">
                        <div class="row">

                            <div class="col-lg-2 col-md-3 col-sm-4 col-lg-offset-8 col-md-offset-7 col-sm-offset-6">
                                <a href="reservas.php?c=<?php echo $s['codservicio']?>" class="pull-right btn btn-lg btn-success">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article> <!-- post -->
            <?php }?>

        </div> <!-- col-md-8 -->
        <div class="col-md-4">
            <aside class="sidebar">
                <div class="panel panel-primary animated fadeInDown animation-delay-6">
                    <div class="panel-heading"><i class="fa fa-comments"></i> Testimonios de Clientes</div>
                    <div class="panel-body">
                        <ul class="comments-sidebar">
                            <?php foreach($tes as $t){?>
                            <li>
                                <h4><a href="<?php echo $t['facebook']?>" target="_blank"><?php echo $t['nombre']?></a> - <a href="#"><?php echo $t['titulo'];?></a></h4>
                                <p><?php echo $t['testimonio'];?></p>
                            </li>
                           
                            <?php }?>
                            
                        </ul>
                    </div>
                </div>

           </aside> <!-- Sidebar -->
        </div>
    </div> <!-- row -->
        
        
    </div><!--Container-->
</section><!--Section-->


<?php include_once("pie.php");?>