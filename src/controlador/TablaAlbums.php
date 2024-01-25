<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\modelo\Albums;


class TablaAlbums {

    public function VistaAlbums() {
        return require 'src/vistas/tablaAlbums.php';
    }

    public function adminAlbums(){
        return require 'src/vistas/adminAlbums.php';
    }

    public function agregarAlbum($respuesta) {
        try {
            if (isset($respuesta['agregar'])) {
                $album=new Albums();
                $conectar=new Conexion();
    
                $album->setNombre($respuesta['nombre']);
                $album->agregarAlbum($conectar);
                $msj = urlencode("Contenido cargado con éxito.");
                return header("Location:agregar-album?msj=$msj");
            }
        } catch (\Throwable $th) {
             return $th;
        }
    }

    public function editarAlbums($respuesta) {
        try {
            if (isset($respuesta['guardar'])) {
                
                $album=new Albums();
                $conectar=new Conexion();

                $album->setId($respuesta['id']);
                $album->setNombre($respuesta['nombre']);

                $album->editarAlbums($conectar);
                $msj = urlencode("Cambios realizados correctamente.");
                return header("Location:tabla-albums?msj=$msj");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function eliminarAlbum($respuesta) {
        
            $album=new Albums();
            $conectar=new Conexion();

            $album->setId($respuesta['id']);


                $album->eliminarAlbums($conectar);
                $msj = urlencode("Album eliminada correctamente.");
                return header("Location:../tabla-albums?msj=$msj");
    }
    

    public function tablaAlbums() {
        return require 'src/vistas/tablaAlbums.php';
    }
}