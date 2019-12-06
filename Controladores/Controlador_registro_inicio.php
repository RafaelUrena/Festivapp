<?php

include_once '../Modelo/ConexionEstatica.php';
include_once '../Modelo/Usuario.php';
session_start();

if (isset($_REQUEST['registrar'])) {
    $id_u = NULL;
    $nom = $_REQUEST['nomb'];
    $ape = $_REQUEST['ape'];
    $ema = $_REQUEST['mail'];
    $eda = intval($_REQUEST['edad']);
    $pas = $_REQUEST['pass'];
    $rol = 0;
    $activo = false;
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $cod_pas = password_hash($pas, PASSWORD_DEFAULT); //Contraseña encriptada
    $usuario = new Usuario($id_u, $nom, $ape, $eda, $ema, $cod_pas, $rol, $foto, $activo);

    $conexion = ConexionEstatica::conectar();

    $user = ConexionEstatica::existeUsuario($ema);


    if ($user == NULL) {
        ConexionEstatica::agregarUsuario($usuario);
        header("Location: ../index.php");
    } else {
        
        header("Location: ../index.php");
    }

    ConexionEstatica::desconectar();
}

if (isset($_REQUEST['login'])) {

    $email = $_REQUEST['mail'];
    $pass = $_REQUEST['pass'];

    $conexion = ConexionEstatica::conectar();
    $user = ConexionEstatica::existeUsuario($email);
    $hash = $user->getPassword();

    if ($user->getEmail() === $email && password_verify($pass, $hash)) {
        if ($user->getActivo()) {
            if(sizeof($user->getRol()) == 0){
                header("Location: ../index.php");
            }
            if(sizeof($user->getRol()) == 1){
                $_SESSION['userlogeado'] = serialize($user);
                header("Location: ../Vistas/V_registrado/vRegistrado.php");
            }
            if(sizeof($user->getRol()) == 2){
                header("Location: ../Vistas/V_administrador/vAdministrador.php");
            }
        }
    } else {
        $_SESSION['fallologin'] = 'El usuario o contraseña son erroneos';
        header("Location: ../index.php");
    }

    ConexionEstatica::desconectar();
}

if(isset($_REQUEST['logout'])){
    
    session_destroy();
    
    header("Location: ../index.php");
    
}