<!--
     Author: Rafael Ángel Ureña Sobrino
     Date: November 2019
     Descripción: Proyecto Festivapp
-->
<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Inicio</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Course CSS -->
        <link rel="stylesheet" href="../../Css/estilos1.css" ref="styles.css" />
        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
        
    </head>

    <body>

        <!-- CONTENEDOR -->
        <div class="container-fluid">

            <!-- HEADER -->
            <div class="row bg-dark border-pink">

                <div class="col-md-4 ">
                    <img src="../../Imagenes/LogoFestivapp.svg" alt="logo" class="w-25">
                </div>

                <div class="col-md-4 ">

                    <?php 
                    include_once '../../Modelo/Usuario.php';
                    
                    session_start();
                    $userlog = unserialize($_SESSION['userlogeado']); ?>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($userlog->getFoto()); ?>" alt="perfil" class="w-25">
                    
                </div>

                <div class="col-md-4 ">

                    <form class="form-inline justify-content-end" action="../../Controladores/Controlador_registro_inicio.php" method="POST">
                        <input type="submit" name="logout" class="btn btn-pink btn-sm mr-2 mt-3" value="Cerrar Sesión">
                    </form>
                    
                </div>

            </div>

            <div class="row bg-secondary border-dark border-bottom">

                <nav class="navbar navbar-expand-sm navbar-dark">

                    <button type="button" class="navbar-toogler bg-dark" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Noticias</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Últimas noticias</a>
                                    <a href="#" class="dropdown-item">Noticias destacadas</a>
                                    <a href="#" class="dropdown-item">Crear Noticia</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver Festivales</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Por Nombre</a>
                                    <a href="#" class="dropdown-item">Por Localización</a>
                                    <a href="#" class="dropdown-item">Por Estilo Musical</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Area Festivales</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Crear Festival</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">¿Quienes Somos?</a>
                                    <a href="#" class="dropdown-item">Contacto</a>
                                </div>
                            </li>
                        </ul>
                    </div>           
                    <span class="oi oi-cog"></span>

                </nav>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="carousel slide carousel-fade" data-ride="carousel" id="micarrusel">
                        <ol class="carousel-indicators">
                            <li data-target="#micarrusel" data-slide-to=0 class="active"></li>
                            <li data-target="#micarrusel" data-slide-to=1></li>
                            <li data-target="#micarrusel" data-slide-to=2></li>
                            <li data-target="#micarrusel" data-slide-to=3></li>
                            <li data-target="#micarrusel" data-slide-to=4></li>
                            <li data-target="#micarrusel" data-slide-to=5></li>
                            <li data-target="#micarrusel" data-slide-to=6></li>
                            <li data-target="#micarrusel" data-slide-to=7></li>
                            <li data-target="#micarrusel" data-slide-to=8></li>
                            <li data-target="#micarrusel" data-slide-to=9></li>
                        </ol>
                        <div class="carousel-inner carousel-altura mt-3">
                            <div class="carousel-item item active">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/Tomorrow1.jpg" alt="Tomorrowland">
                                <div class="carousel-caption d-none d-md-block">
                                    Tomorrowland
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 h-25 img-fluid" src="../../Imagenes/Dreambeachvillaricos1.jpg" alt="Dreambeach">
                                <div class="carousel-caption d-none d-md-block">
                                    Dreambeach Villaricos
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/arenalsound1.jpg" alt="Arenal Sound">
                                <div class="carousel-caption d-none d-md-block">
                                    Arenal Sound
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/juergasfestival.jpg" alt="JuergasFestival">
                                <div class="carousel-caption d-none d-md-block">
                                    Juergas Festival
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 h-25 img-fluid" src="../../Imagenes/medusasunbeach1.jpg" alt="Medusa Sun Beach">
                                <div class="carousel-caption d-none d-md-block">
                                    Medusa Sun Beach
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/primaverasound1.jpg" alt="Primavera Sound">
                                <div class="carousel-caption d-none d-md-block">
                                    Primavera Sound
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/reggaesunska.jpg" alt="ReggaeSunSka">
                                <div class="carousel-caption d-none d-md-block">
                                    ReggaeSunSka
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/resurrection1.jpg" alt="Resurrection">
                                <div class="carousel-caption d-none d-md-block">
                                    Resurrection
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/rockinrio1.jpg" alt="Rock in Rio">
                                <div class="carousel-caption d-none d-md-block">
                                    Rock in Rio
                                </div>
                            </div>
                            <div class="carousel-item item">
                                <img class="d-block w-100 img-fluid" src="../../Imagenes/viniarock1.jpg" alt="ViñaRock">
                                <div class="carousel-caption d-none d-md-block">
                                    Viña Rock
                                </div>
                            </div>
                        </div>
                        <a href="#micarrusel" data-slide="prev" class="carousel-control-prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#micarrusel" data-slide="next" class="carousel-control-next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center my-4">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h1 class="text-center titulo1">FestivApp el mejor sitio para ver todos los festivales musicales.</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum 
                        dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                        officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pC_QHsMUp_4"></iframe>
                    </div>

                </div>

            </div>

            <div class="row bg-secondary border-top border-dark align-items-center">
                <div class="col-4">
                    <div class="media">
                        <img src="../../Imagenes/LogoFestivapp.svg" alt="logo" class="w-25 logo-b">
                        <div class="media-body align-self-center">
                            <h3 class="text-center">FestivApp</h3>
                        </div>
                    </div>

                </div>

                <div class="col-2">
                    <ul class="pre-foo mt-4 pt-3">
                        <li><h5>Mi Cuenta</h5></li>
                        <a href="#"><li>Inicio</li></a>
                        <a href="#"><li>Perfil</li></a>
                    </ul>

                </div>

                <div class="col-2">
                    <ul class="pre-foo  mt-4 pt-3">
                        <li><h5>Sobre Nosotros</h5></li>
                        <a href="#"><li>¿Quienes somos?</li></a>
                        <a href="#"><li>Contacto</li></a>
                    </ul>
                </div>

                <div class="col-4">
                    <form class="form-inline justify-content-around">
                        <input type="button" class="btn btn-pink btn-sm mr-2 mt-3" data-toggle="modal" data-target="#registro" value="Contáctanos">
                    </form>
                </div>
            </div>

            <div class="row bg-dark justify-content-center">
                <h6 class="text-center text-white">&copy;2019 Rafael Ángel Ureña Sobrino. Todos los derechos reservados</h6>
            </div>


        </div>

        <!-- JQuery -->
        <script>
            
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>