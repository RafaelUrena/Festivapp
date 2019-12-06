<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of password
 *
 * @author rafa
 */
class password {

    private $pass;

    function __construct() {
        $this->pass = self::generarContrasenia();
    }
    
    function getPass() {
        return $this->pass;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    
    static function generarContrasenia() {
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for ($i = 0; $i < 8; $i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $password .= substr($str, rand(0, 62), 1);
        }
        return $password;
    }
}