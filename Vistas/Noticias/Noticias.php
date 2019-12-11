<!--
     Author: Rafael Ángel Ureña Sobrino
     Date: November 2019
     Descripción: Proyecto Festivapp
-->
<!DOCTYPE html>
<html lang="es">
    <?php
    include_once '../../Modelo/ConexionEstatica.php';
    include_once '../../Modelo/Clases/Noticia.php';
    session_start();

    ConexionEstatica::conectar();


    $noticias = ConexionEstatica::sacarNoticias();

    $_SESSION['noticias'] = $noticias;

    ConexionEstatica::desconectar();
    ?>
    <head>
        <title>Noticias</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Course CSS -->
        <link rel="stylesheet" href="../../Css/estilos1.css" ref="styles.css"  />

        <!-- Tipografía-->
        <link href="https://fonts.googleapis.com/css?family=Akronim|Archivo+Black|Quicksand&display=swap" rel="stylesheet">

        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />

    </head>

    <body>

        <!-- CONTENEDOR -->
        <div class="container-fluid">

            <!-- HEADER -->
            <div class="row bg-dark border-pink align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="../../Imagenes/LogoFestivapp.svg" alt="logo" class="img-fluid w-25">
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
                            <li class="nav-item dropdown">
                                <a href="../../index.php" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link">Noticias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver Festivales</a>
                                <div class="dropdown-menu">
                                    <a href="../Festivales/Festivales.php" class="dropdown-item">Por Nombre</a>
                                    <a href="#" class="dropdown-item">Por Localización</a>
                                    <a href="#" class="dropdown-item">Por Estilo Musical</a>
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
                </nav>

            </div>
            
            <!-- Noticias -->
            <section class="row justify-content-around">
                <?php foreach ($noticias as $dato){ ?>
                <div class="col-xs-3 col-sm-3 col-md-4 col-lg-6">
                    <div class="card">
                        <a href="#" data-toggle="tooltip" data-html="true" title="Noticia">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($dato->getFoto()); ?>" alt="imagen" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $dato->getTitular(); ?></h3>
                            <h5 class="card-subtitle mb-3"><?php echo $dato->getAutor(); ?></h5>
                            <div class="card-text">
                                <?php echo $dato->getFecha_publicacion(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>

            <div class="row bg-secondary border-top border-dark align-items-center">

                <div class="col-4">
                    <div class="media">
                        <img src="../../Imagenes/LogoFestivapp.svg" alt="logo" class="w-25 logo-b">
                        <div class="media-body align-self-center">
                            <h2 class="letraLogo">FestivApp</h2>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Mi Cuenta</th>
                                <th>Sobre Nosotros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pre-foo"><a href="../../index.php">Inicio</a></td>
                                <td class="pre-foo"><a href="../Contacto/QuienesSomos.php">¿Quienes Somos?</a></td>
                            </tr>
                            <tr>
                                <td class="pre-foo"><a href="#" data-toggle="modal" data-target="#registro">Registrate</a></td>
                                <td class="pre-foo"><a href="../Contacto/Contacto.php">Contacto</a></td>
                            </tr>
                            <tr>
                                <td class="pre-foo"><a href="#" data-toggle="modal" data-target="#entrar">Inicia Sesion</a></td>
                            </tr>
                        </tbody>
                    </table>
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
