<!--
     Author: Rafael Ángel Ureña Sobrino
     Date: November 2019
     Descripción: Proyecto Festivapp
-->
<!DOCTYPE html>
<html lang="es">
    <?php
    include_once '../../Modelo/ConexionEstatica.php';
    include_once '../../Modelo/Clases/Festival.php';
    session_start();

    ConexionEstatica::conectar();


    $festivales = ConexionEstatica::sacarFestivalesNombre();

    $_SESSION['festivales'] = $festivales;

    ConexionEstatica::desconectar();
    ?>
    <head>
        <title>Festivales</title>
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
                            <li class="nav-item">
                                <a href="../../index.php" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="../../Vistas/Noticias/Noticias.php" class="nav-link">Noticias</a>
                            </li>
                            <li class="nav-item active dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver Festivales</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Por Nombre</a>
                                    <a href="fLocalizacion.php" class="dropdown-item">Por Localización</a>
                                    <a href="fEstilo.php" class="dropdown-item">Por Estilo Musical</a>
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

            <div class="row align-items-center">

                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <table class="table table-borderless table-dark table-responsive mt-3">
                        <thead>
                            <tr class="text-center">
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Localización</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Precio</th>
                                <th>Estilo musical</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($festivales as $dato) {
                            ?>
                            <tbody>
                            <form name="formutarjeta" action="../../Controladores/Controlador_festivales.php" method="POST">
                                <tr class="text-center">

                                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($dato->getFoto()); ?>" alt="foto festival" class="w-25"></td>
                                <input type="hidden" name="id_festival" value="<?php echo $dato->getId_festival(); ?>">
                                    <td><?php echo $dato->getNombre(); ?></td>
                                    <td><?php echo $dato->getLocalizacion(); ?></td>
                                    <td><?php echo $dato->getFecha_inicio(); ?></td>
                                    <td><?php echo $dato->getFecha_fin(); ?></td>
                                    <td><?php echo $dato->getPrecio(); ?></td>
                                    <td><?php echo $dato->getEstilo(); ?></td>
                                    <td><button type="submit" name="verFestival" class="btn btn-pink" data-toggle="modal" data-target="#tarjetaFestival"  value="verFestival"><span class="oi oi-zoom-in"></span></button></td>

                                </tr>
                            </form>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>

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
                                <td class="pre-foo"><a href="#registro">Registrate</a></td>
                                <td class="pre-foo"><a href="../Contacto/Contacto.php">Contacto</a></td>
                            </tr>
                            <tr>
                                <td class="pre-foo"><a href="#entrar">Inicia Sesion</a></td>
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

            <section class="modal" id="tarjetaFestival">
                <?php
                
                    $festival = $_SESSION['festivalselect'];
                
                ?>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <div class="modal-title">
                                Tarjeta Festival
                            </div>
                            <button data-dismiss="modal" class="btn-danger">X</button>
                        </div>

                        <div class="modal-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-center" colspan="2"><img src="data:image/jpg;base64,<?php echo base64_encode($festival->getFoto()); ?>" alt="foto festival" class="w-50"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><h5>Nombre:</h5></td>
                                        <td><h5>Localización:</h5></td>
                                    </tr>
                                    <tr>
                                        <td><p><?php echo $festival->getNombre(); ?></p></td>
                                        <td><p><?php echo $festival->getLocalizacion(); ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><h5>Fecha inicio:</h5></td>
                                        <td><h5>Fecha fin:</h5></td>
                                    </tr>
                                    <tr>
                                        <td><p><?php echo $festival->getFecha_inicio(); ?></p></td>
                                        <td><p><?php echo $festival->getFecha_fin(); ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><h5>Estilos:</h5></td>
                                        <td><h5>Precios:</h5></td>
                                    </tr>
                                    <tr>
                                        <td><p><?php echo $festival->getEstilo(); ?></p></td>
                                        <td><p><?php echo $festival->getPrecio(); ?></p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h5>Descripción:</h5></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2"><p><?php echo $festival->getDescripcion(); ?></p></td>

                                    </tr>
                                </tbody>

                            </table>

                        </div>
                        <div class="modal-footer">

                        </div>

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
