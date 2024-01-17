<?php

namespace Alansnow\Ciencia\controlador;

class SeccionQEs {

    public function queEs() {
        return require 'src/vistas/info-seccion.php';
    }
}