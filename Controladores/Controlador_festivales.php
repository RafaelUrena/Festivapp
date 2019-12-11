<?php

include_once '../Modelo/ConexionEstatica.php';
include_once '../Modelo/Usuario.php';
include_once '../Modelo/Festival.php';
session_start();


if(isset($_REQUEST['verFestival'])){
    
    ConexionEstatica::conectar();
    
    $id_festival = $_REQUEST['id_festival'];
    
    $festival = ConexionEstatica::sacarFestival($id_festival);
    
    
    $_SESSION['festivalselect'] = $festival;
    
    ConexionEstatica::desconectar();
    
    header('Location: ../Vistas/Festivales/Festivales.php');
}