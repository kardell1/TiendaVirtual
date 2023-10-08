<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Titulo -->
    <title>Proyecto Pizza</title>
    
    <link rel="icon" href="css/img/core-img/favicon.ico">

    <!-- Estilos -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="css/img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="css/img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="css/img/core-img/preload-3.png" alt="">
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.html">Pizza Planeta</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                                </li>                            
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Quienes Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Iniciar Sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cliente.php">Registrarse</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Slider -->
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="caviar-hero-slides owl-carousel">
            <div class="single-hero-slides bg-img" style="background-image: url(css/img/bg-img/napolitana.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Napolitana</h2>
                                <p>Es una deliciosa creación culinaria que es famosa por su masa suave y esponjosa, cubierta con tomate fresco, mozzarella de búfala y un toque de aceite de oliva.</p>
                                <a href="#" class="btn caviar-btn"><span></span>Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(css/img/bg-img/carnivora.jpg);"></div>
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url(css/img/bg-img/carnivora.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Carnivora</h2>
                                <p>Es una pizza que lleva varios tipos de carne como ingredientes. Como el pepperoni, el jamón, la salchicha, el tocino y la carne molida, también se le agrega queso mozzarella y salsa de tomate</p>
                                <a href="#" class="btn caviar-btn"><span></span>Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(css/img/bg-img/hawaiana.jpg);"></div>
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url(css/img/bg-img/hawaiana.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Hawaiana</h2>
                                <p>Lleva piña y jamón cocido la piña le da un sabor dulce y ácido a la pizza, mientras que el jamón cocido le da un sabor salado.</p>
                                <a href="#" class="btn caviar-btn"><span></span>Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(css/img/bg-img/napolitana.jpg);"></div>
            </div>            
        </div>
    </section>
    <!-- ****** Fin de los slider ****** -->

    <!-- ****** Descripcion de Innovacion con Drones ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="css/img/bg-img/abaout.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Nuevo Tipo de Envio</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Drones de Entrega</span>
                        <p>Somos una pizzería familiar que nació en el año 2010 con el sueño de ofrecer las mejores pizzas artesanales de la ciudad. Nuestra pasión por la calidad y el sabor nos ha llevado a elaborar nuestras propias masas, salsas y quesos, utilizando ingredientes frescos y locales. Nuestro menú incluye una variedad de pizzas clásicas y especiales, así como ensaladas, pastas, postres y bebidas. Contamos con un ambiente acogedor y un servicio amable y rápido. Queremos que nuestros clientes se sientan como en casa y disfruten de una experiencia gastronómica inolvidable. Te invitamos a visitarnos y a probar nuestras deliciosas pizzas. ¡Te esperamos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ****** Descripcion de Innovacion en Procesos ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="css/img/bg-img/abaout.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Nuevos metodos de Elaboracion</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Hornos electricos</span>
                        <p>Somos una pizzería familiar que nació en el año 2010 con el sueño de ofrecer las mejores pizzas artesanales de la ciudad. Nuestra pasión por la calidad y el sabor nos ha llevado a elaborar nuestras propias masas, salsas y quesos, utilizando ingredientes frescos y locales. Nuestro menú incluye una variedad de pizzas clásicas y especiales, así como ensaladas, pastas, postres y bebidas. Contamos con un ambiente acogedor y un servicio amable y rápido. Queremos que nuestros clientes se sientan como en casa y disfruten de una experiencia gastronómica inolvidable. Te invitamos a visitarnos y a probar nuestras deliciosas pizzas. ¡Te esperamos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!-- ****** Quienes Somos  ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="css/img/bg-img/abaout.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Quienes Somos</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Un poco de nosotros</span>
                        <p>Somos una pizzería familiar que nació en el año 2010 con el sueño de ofrecer las mejores pizzas artesanales de la ciudad. Nuestra pasión por la calidad y el sabor nos ha llevado a elaborar nuestras propias masas, salsas y quesos, utilizando ingredientes frescos y locales. Nuestro menú incluye una variedad de pizzas clásicas y especiales, así como ensaladas, pastas, postres y bebidas. Contamos con un ambiente acogedor y un servicio amable y rápido. Queremos que nuestros clientes se sientan como en casa y disfruten de una experiencia gastronómica inolvidable. Te invitamos a visitarnos y a probar nuestras deliciosas pizzas. ¡Te esperamos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Menú de la Pizzeria</h2>
                    </div>
                    <!-- btn -->
                    <a href="menu.html" class="btn caviar-btn"><span></span>Ver Menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="css/img/menu-img/pizza1.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Hawaiana</h6>
                            <p class="dish-price">85 Bs</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="css/img/menu-img/pizza2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Carnivora</h6>
                            <p class="dish-price">80 Bs</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="css/img/menu-img/pizza3.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Napolitana</h6>
                            <p class="dish-price">120 Bs</p>
                        </div>
                    </div>
                </div>               
            </div>            
        </div>

        <p></p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="css/img/menu-img/pizza1.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Hawaiana</h6>
                            <p class="dish-price">85 Bs</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="css/img/menu-img/pizza2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Carnivora</h6>
                            <p class="dish-price">80 Bs</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="css/img/menu-img/pizza3.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Napolitana</h6>
                            <p class="dish-price">120 Bs</p>
                        </div>
                    </div>
                </div>               
            </div>            
        </div>
    </section>
    
    <!-- ****** Dish Menu Area End ****** -->

    
    <!-- ****** Footer Area Start ****** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <p></p>
                        <a class="navbar-brand" style="color: white;">Pizza Planeta</a>
                        <p></p>
                        <a class="text-fill" style="color: white;">Ubicacion: Cañada Stronger #3456</a>
                        <p></p>
                        <a class="text-fill" style="color: white;">Celular: +591 665 432 65</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>