<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Festival
 *
 * @author rafa
 */
class Festival {
    private $id_festival;
    private $nombre;
    private $localizacion;
    private $foto;
    private $fecha_inicio;
    private $fecha_fin;
    private $precio;
    private $descripcion;
    private $estilo;
    
    function __construct($id_festival, $nombre, $localizacion, $foto, $fecha_inicio, $fecha_fin, $precio, $descripcion, $estilo) {
        $this->id_festival = $id_festival;
        $this->nombre = $nombre;
        $this->localizacion = $localizacion;
        $this->foto = $foto;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->estilo = $estilo;
    }

    
    function getId_festival() {
        return $this->id_festival;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getLocalizacion() {
        return $this->localizacion;
    }

    function getFoto() {
        return $this->foto;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEstilo() {
        return $this->estilo;
    }

    function setId_festival($id_festival) {
        $this->id_festival = $id_festival;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setLocalizacion($localizacion) {
        $this->localizacion = $localizacion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setEstilo($estilo) {
        $this->estilo = $estilo;
    }


    
}
