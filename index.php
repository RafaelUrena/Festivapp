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
        <link rel="stylesheet" href="Css/estilos1.css" ref="styles.css"  />
        
        <!-- Tipografía-->
        <link href="https://fonts.googleapis.com/css?family=Akronim|Archivo+Black|Quicksand&display=swap" rel="stylesheet">
        
    </head>

    <body>

        <!-- CONTENEDOR -->
        <div class="container-fluid">

            <!-- HEADER -->
            <div class="row bg-dark border-pink align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="Imagenes/LogoFestivapp.svg" alt="logo" class="img-fluid w-25">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <form class="d-flex justify-content-end">
                        <input type="button" class="btn btn-pink btn-sm mr-2 mt-3" data-toggle="modal" data-target="#entrar" value="Login">
                        <input type="button" class="btn btn-pink btn-sm mr-2 mt-3" data-toggle="modal" data-target="#registro" value="Registro">
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
                            <li class="nav-item">
                                <a href="Vistas/Noticias/Noticias.php" class="nav-link">Noticias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver Festivales</a>
                                <div class="dropdown-menu">
                                    <a href="Vistas/Festivales/Festivales.php" class="dropdown-item">Por Nombre</a>
                                    <a href="Vistas/Festivales/fLocalizacion.php" class="dropdown-item">Por Localización</a>
                                    <a href="Vistas/Festivales/fEstilo.php" class="dropdown-item">Por Estilo Musical</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto</a>
                                <div class="dropdown-menu">
                                    <a href="Vistas/Contacto/QuienesSomos.php" class="dropdown-item">¿Quienes Somos?</a>
                                    <a href="Vistas/Contacto/Contacto.php" class="dropdown-item">Contacto</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="carousel slide" data-ride="carousel" id="micarrusel">
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
                            <div class="carousel-item active">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/Tomorrow1.jpg" alt="Tomorrowland">
                                <div class="carousel-caption d-none d-md-block">
                                    Tomorrowland
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/Dreambeachvillaricos1.jpg" alt="Dreambeach">
                                <div class="carousel-caption d-none d-md-block">
                                    Dreambeach Villaricos
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/arenalsound1.jpg" alt="Arenal Sound">
                                <div class="carousel-caption d-none d-md-block">
                                    Arenal Sound
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/juergasfestival.jpg" alt="JuergasFestival">
                                <div class="carousel-caption d-none d-md-block">
                                    Juergas Festival
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/medusasunbeach1.jpg" alt="Medusa Sun Beach">
                                <div class="carousel-caption d-none d-md-block">
                                    Medusa Sun Beach
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/primaverasound1.jpg" alt="Primavera Sound">
                                <div class="carousel-caption d-none d-md-block">
                                    Primavera Sound
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/reggaesunska.jpg" alt="ReggaeSunSka">
                                <div class="carousel-caption d-none d-md-block">
                                    ReggaeSunSka
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/resurrection1.jpg" alt="Resurrection">
                                <div class="carousel-caption d-none d-md-block">
                                    Resurrection
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/rockinrio1.jpg" alt="Rock in Rio">
                                <div class="carousel-caption d-none d-md-block">
                                    Rock in Rio
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluidC" src="Imagenes/Carrusel/viniarock1.jpg" alt="ViñaRock">
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
                    <h3 class="text-center titulo2">¡Regístrate y añade o valída nuevos festivales que conozcas!</h3>
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
                        <iframe class="embed-responsive-item" src="Multimedia/Festivapp1.mp4"></iframe>
                    </div>

                </div>

            </div>

            <div class="row bg-secondary border-top border-dark align-items-center">

                <div class="col-3">
                    <div class="media">
                        <img src="Imagenes/LogoFestivapp.svg" alt="logo" class="w-25 logo-b">
                        <div class="media-body align-self-center">
                            <h2 class="letraLogo">FestivApp</h2>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Mi Cuenta</th>
                                <th>Sobre Nosotros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pre-foo"><a href="#">Inicio</a></td>
                                <td class="pre-foo"><a href="#">¿Quienes Somos?</a></td>
                            </tr>
                            <tr>
                                <td class="pre-foo"><a href="#">Registrate</a></td>
                                <td class="pre-foo"><a href="#">Contacto</a></td>
                            </tr>
                            <tr>
                                <td class="pre-foo"><a href="#">Inicia Sesion</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col-3">
                    <form class="form-inline justify-content-around">
                        <input type="button" class="btn btn-pink btn-sm mr-2 mt-3" data-toggle="modal" data-target="#registro" value="Contáctanos">
                    </form>
                </div>
            </div>

            <div class="row bg-dark justify-content-center">
                <h6 class="text-center text-white">&copy;2019 Rafael Ángel Ureña Sobrino. Todos los derechos reservados</h6>
            </div>

            <!-- VENTANAS MODAL -->
            <section class="modal" id="entrar">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <div class="modal-title">
                                Entrar en Sesión
                            </div>
                            <button data-dismiss="modal" class="btn-danger">X</button>
                        </div>
                        <form action="Controladores/Controlador_registro_inicio.php" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="">Email:</label>
                                    <input type="email" name="mail" placeholder="Introduce tu email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="">Contraseña:</label>
                                    <input type="password" name="pass" placeholder="Introduce tu contraseña" class="form-control" required>
                                </div>
                                <center>
                                    <a href="#" class="enlacesModal">He olvidado la contraseña</a>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="login" class="btn btn-pink" value="Entrar">
                            </div>
                        </form>
                        <span></span>
                    </div>
                </div>
            </section>

            <section class="modal" id="registro">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <div class="modal-title">
                                Registro de Usuario
                            </div>
                            <button data-dismiss="modal" class="btn-danger">X</button>
                        </div>
                        <form action="Controladores/Controlador_registro_inicio.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input name="nomb" type="text" class="form-control" placeholder="Introduce tu nombre" required>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input name="ape" type="text" class="form-control" placeholder="Introduce tus apellidos" required>
                                </div>
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input name="mail" type="email" class="form-control" placeholder="Introduce tu email" required>
                                </div>
                                <div class="form-group">
                                    <label>Edad:</label>
                                    <input name="edad" type="number" class="form-control" placeholder="Introduce tu edad" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña:</label>
                                    <input name="pass" type="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Repita la contraseña:</label>
                                    <input name="rpass" type="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto perfil:</label>
                                    <input name="foto" type="file" class="form-control-file">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input name="registrar" type="submit" class="btn btn-pink" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </section>

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
