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
        <div class="col-md-12">
        <h2 class="section-title">Nuestros Clientes</h2>
            <?php foreach($tes as $t){?>
            <article class="post animated fadeInLeft animation-delay-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="post-title"><a href="<?php echo $t['facebook']?>" class="btn" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" class="transicion"><?php echo $t['nombre']?></a> - <?php echo $t['titulo']?></h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <?php if($t['img1']!=""){?>
                                <img src="<?php echo $folder?>imagenes/testimonio/<?php echo $t['img1']?>" class="img-post img-responsive" alt="Image">
                                <?php }?>
                            </div>
                            <div class="col-lg-3">
                                <?php if($t['img2']!=""){?>
                                <img src="<?php echo $folder?>imagenes/testimonio/<?php echo $t['img2']?>" class="img-post img-responsive" alt="Image">
                                <?php }?>
                            </div>
                            <div class="col-lg-3">
                                <?php if($t['img3']!=""){?>
                                <img src="<?php echo $folder?>imagenes/testimonio/<?php echo $t['img3']?>" class="img-post img-responsive" alt="Image">
                                <?php }?>
                            </div>
                            <div class="col-lg-3">
                                <p class="text-justify"><?php echo $t['testimonio']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer post-info-b">
                        <div class="row">

                            <div class="col-lg-2 col-md-3 col-sm-4 col-lg-offset-8 col-md-offset-7 col-sm-offset-6">
                            </div>
                        </div>
                    </div>
                </div>
            </article> <!-- post -->
            <?php }?>

        </div> <!-- col-md-12 -->
    </div> <!-- row -->
        
        
    </div><!--Container-->
</section><!--Section-->


<?php include_once("pie.php");?>