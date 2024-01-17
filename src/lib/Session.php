<?php

namespace Alansnow\Ciencia\lib;

class Session {

    public static function crearSesion($res) {
        session_start();
        if (is_array($res)) {
            foreach ($res as $nombre => $valor) {
                $_SESSION[$nombre] = $valor;
            }
        }
    }

    //Esta funcion estatica es para obtener solo el nombre o, correo o en dado caso no tenga el id del usuario. Se recomienda el uso para mostrar dicho valor en las vistas.
    public static function sesion() {
        
        if (isset($_SESSION['usuario']) or isset($_SESSION['nombre']) or isset($_SESSION['correoElectronico']) or isset($_SESSION['correo_electronico'])) {
            $usuario = $_SESSION['usuario'] ?? $_SESSION['nombre'] ?? $_SESSION['correoElectronico'] ?? $_SESSION['correo_electronico'];

            return $usuario;
        }
        else {
            if (isset($_SESSION['id']) or isset($_SESSION['id_usuario']) or isset($_SESSION['idUsuario'])) {

            $id = $_SESSION['id'] ?? $_SESSION['id_usuario'] ?? $_SESSION['idUsuario'];

            return $id;
            }
        }
        return null;
    }
}