<?php

namespace Alansnow\Ciencia\controlador;

class Videos {

    public function videosVista($respuesta) {
        return require 'src/vistas/videos-seccion.php';
    }
}