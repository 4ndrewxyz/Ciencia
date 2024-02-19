<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\modelo\Fotos;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\lib\Archivos;
use PDO;
use Exception;

class AdminVisitas {

    public function vistaVisitas() {
        return require 'src/vistas/adminVisitas.php';
    }
}