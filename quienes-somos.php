<?php
$folder="";
include_once("class/testimonio.php");
$testimonio=new testimonio;
$tes=$testimonio->mostrarTodoRegistro("",1,"");
?>
<?php include_once("cabecerahtml.php");?>
<?php include_once("cabecera.php");?>
<section class="">
    <div class="container">
         <div class="row">
                <h2 class="section-title">Quienes Somos </h2>
                <div class="col-sm-6">
                    <img src="<?php echo $folder?>imagenes/quienessomos/1.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="#">Decoraciónes</a></h4>
                    <p>Para otorgar a su documento un aspecto profesional, Word proporciona encabezados, pies de página, páginas de portada y diseños de cuadro de texto que se complementan entre sí. Por ejemplo, puede agregar una portada coincidente, el encabezado y la barra lateral. Haga clic en Insertar y elija los elementos que desee de las distintas galerías.Los temas y estilos también ayudan a mantener su documento coordinado.</p>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo $folder?>imagenes/quienessomos/2.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="#">Eventos </a></h4>

                    <p>Si necesita detener la lectura antes de llegar al final, Word le recordará dónde dejó la lectura, incluso en otros dispositivos.El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.</p>
                </div>

        </div>
    </div>
</section>
<?php include_once("pie.php");?>