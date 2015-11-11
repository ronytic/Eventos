
</head>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<body>


<div id="sb-site">
<div class="boxed">

<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
        <div class="header-full-title">
            <h1 class="animated fadeInRight"><a href="index-2.html">Sistema de Administración de <span>Eventos</span></a></h1>
            <p class="animated fadeInRight">Calidad de Servicio en  <span>Decoración</span></p>
        </div>
        <nav class="top-nav">
            <ul class="top-nav-social hidden-sm">
                <li><a href="#" class="animated fadeIn animation-delay-8 facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-7 twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-9 instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-8 vine"><i class="fa fa-vine"></i></a></li>
            </ul>

            <div class="dropdown animated fadeInDown animation-delay-11">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administración</a>
                <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                    <form role="form" action="login/login.php">
                        <h4>Administración</h4>

                        <div class="form-group">
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <br>
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-ar btn-primary pull-right">Ingresar</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- dropdown -->
        </nav>
    </div> <!-- container -->
</header> <!-- header-full -->
<nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">
    <div class="container">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php $folder?>">Inicio</a></li>
                <li><a href="<?php $folder?>/quienes-somos.php">Quienes Somos</a></li>
                <li><a href="<?php $folder?>/productos-servicios.php">Productos y Servicios</a></li>
                <li><a href="<?php $folder?>/nuestros-clientes.php">Nuestros Clientes</a></li>
                <li><a href="<?php $folder?>/reservas.php">Reservas</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Usuarios</a>
                     <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="blog2.html">Other Option</a></li>
                        <li class="divider"></li>
                        <li><a href="single.html">Blog Item</a></li>
                    </ul>
                </li>
             </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>

<section class="carousel-section">
    <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Decoración General</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Eventos Especiales</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Mesas</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Manteles</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Sillas</li>
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor qui enim dolorem.</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo $folder?>imagenes/banner/2.jpeg" class=" animated bounceInUp animation-delay-3 img-rounded" alt="Image" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Decoración de Sillas</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Sillas y Mesas</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Alquiler de vajillas</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Utensilios</li>
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor qui enim dolorem.</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo $folder?>imagenes/banner/2.jpg" class="animated bounceInUp animation-delay-3 img-rounded" alt="Image" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Fin Item-->
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Decoración de Sillas</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Sillas y Mesas</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Alquiler de vajillas</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Utensilios</li>
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor qui enim dolorem.</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo $folder?>imagenes/banner/4.jpg" class="animated bounceInUp animation-delay-3 img-rounded" alt="Image" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Fin Item-->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->