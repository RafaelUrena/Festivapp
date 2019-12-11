<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author rafa
 */
class Noticia {
    private $id_noticia;
    private $titular;
    private $contenido;
    private $fecha_publicacion;
    private $autor;
    private $foto;
    
    function __construct($id_noticia, $titular, $contenido, $fecha_publicacion, $autor, $foto) {
        $this->id_noticia = $id_noticia;
        $this->titular = $titular;
        $this->contenido = $contenido;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->autor = $autor;
        $this->foto = $foto;
    }
    
    function getId_noticia() {
        return $this->id_noticia;
    }

    function getTitular() {
        return $this->titular;
    }

    function getContenido() {
        return $this->contenido;
    }

    function getFecha_publicacion() {
        return $this->fecha_publicacion;
    }

    function getAutor() {
        return $this->autor;
    }

    function getFoto() {
        return $this->foto;
    }

    function setId_noticia($id_noticia) {
        $this->id_noticia = $id_noticia;
    }

    function setTitular($titular) {
        $this->titular = $titular;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    function setFecha_publicacion($fecha_publicacion) {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }



    
    
}
