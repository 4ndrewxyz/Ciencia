<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\modelo\Usuario;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\lib\Session;

class Admin {

    public function login() {
        return require 'src/vistas/login.php';
    }

    public function autenticar($respuesta) {
       
        if (isset($respuesta['ingresar'])) {
            $usuario = $respuesta['usuario'];
            $clve = $respuesta['clave'];

            $usuarios=new Usuario($usuario);
            $conectar=new Conexion();
            $resul=$usuarios->autenticado($conectar);

            if (!empty($resul)) {

                $registro = $resul[0];
                    if (password_verify($clve, $registro['clave'])) {
                        Session::crearSesion($registro);
                        return header("Location:administrador");
                    }
                    else {
                        $mensaje = "Contraseña incorrecta";
                        $msj = urlencode($mensaje);
                        return header("Location:login?msj=$msj");
                    }
                }
                else {
                    $mensaje = "Datos inválidos";
                    $msj = urlencode($mensaje);
                    return header("Location:login?msj=$msj");
                }
            }
        
    }


    public function cerrarSesion() {
        session_start();
        if(session_destroy()){
        header("Location:login");
        exit();
        }
    }

    public function menuAdmin() {
        return require 'src/vistas/admin.php';
    }

}