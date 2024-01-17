<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\modelo\Categoria;
use Alansnow\Ciencia\modelo\Contenido;

class VistaContenido {

    public function contenidoVista($respuesta) {
        return require 'src/vistas/contenido.php';
    }


    public function contenidoIdVista($respuesta) {
        return require 'src/vistas/contenido-id.php';
    }


    public static function obtenerContenidoId($id) {

        try {

            $contenido=new Contenido();
            $conectar=new Conexion();

            $resul=$contenido->obtenerId($conectar,$id);

            if (!empty($resul)) {
                return $resul;
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function obtenerCategoriasTipo($id) {
        try {
            
            $categoria=new Categoria();
            $conectar=new Conexion();

            $resul=$categoria->categoriasContenido($conectar,$id);

            if (!empty($resul)) {
                return $resul;
            }
            else {
                echo "Sin resultados";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    } 

    public static function obtenerContenidos($id) {

        try {

            $contenido=new Contenido();
            $conectar=new Conexion();

            $resul=$contenido->obtenerVistaId($conectar,$id);

            if (!empty($resul)) {
                return $resul;
            }
            else {
                echo "Sin resultados";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}