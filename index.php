<?php
$folder="";
?>
<?php include_once("cabecerahtml.php");?>
<?php include_once("cabecera.php");?>
<section class="margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-10">
                    <img src="<?php echo $folder?>imagenes/servicios/1.jpg"  class="img-responsive">
                    <h4 class="content-box-title">Servicio 1</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-14">
                     <img src="<?php echo $folder?>imagenes/servicios/2.jpg"  class="img-responsive">
                    <h4 class="content-box-title">Servicio 2</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-16">
                     <img src="<?php echo $folder?>imagenes/servicios/3.jpg"  class="img-responsive">
                    <h4 class="content-box-title">Servicio 3</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-12">
                    <img src="<?php echo $folder?>imagenes/servicios/4.jpg"  class="img-responsive">
                    <h4 class="content-box-title">Servicio 4</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
   <section class="margin-bottom">
       <h2 class="section-title">Nuestros Trabajos</h2>
       <div class="bxslider-controls">
            <span id="bx-prev4"></span>
            <span id="bx-next4"></span>
        </div>
        <ul class="bxslider" id="latest-works">
            <?php for($i=1;$i<=8;$i++){?>
          <li>
            <div class="img-caption-ar">
                <img src="<?php echo $folder?>imagenes/trabajos/<?php echo $i?>.jpg" class="" alt="Image" height="198">
                <div class="caption-ar">
                    <div class="caption-content">
                        <a href="nuestros-clientes.php" class="animated fadeInDown"><i class="fa fa-search"></i>Más Información</a>
                        <h4 class="caption-title"></h4>
                    </div>
                </div>
            </div>
        </li>
        <?php }?>
        
        </ul>
   </section>

   <section>
        <h2 class="section-title">Testimonios de Clientes</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="bxslider-controls">
                     <span id="bx-prev5"></span>
                     <span id="bx-next5"></span>
                 </div>
                 <ul class="bxslider" id="home-block">
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Dolore totam at ea reiciendis suscipit a tempore cum nisi aspernatur nisi alias posuere erat a ante posuere erat a ante ultricies ultricies nisi vel augue quam semper conse erat quuntur.</p>
                            <footer>Sheldon Cooper, Physical Quantum</footer>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="blockquote-color">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                            <footer>Brian Krzanich, Intel CEO</footer>
                        </blockquote>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php for($i=1;$i<=4;$i++){?>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="<?php echo $folder?>imagenes/trabajos/<?php echo $i?>.jpg" alt="" class="img-responsive img-thumbnail"></div>
                    <?php }?>
                </div>
                <div class="row">
                    <?php for($i=5;$i<=8;$i++){?>
                    <div class="col-md-3 col-sm-3 col-xs-6"><img src="<?php echo $folder?>imagenes/trabajos/<?php echo $i?>.jpg" alt="" class="img-responsive img-thumbnail"></div>
                    <?php }?>
                </div>
            </div>
        </div>
   </section>

</div>
<?php include_once("pie.php");?>