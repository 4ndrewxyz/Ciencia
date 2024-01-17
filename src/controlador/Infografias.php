<?php

namespace Alansnow\Ciencia\controlador;

class Infografias {

    public function infoVista($respuesta) {
        return require 'src/vistas/infografia-seccion.php';
    }
}