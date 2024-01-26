<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\modelo\Fotos;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\lib\Archivos;

class AdminFotos {

    public function adminFotos() {
        return require 'src/vistas/adminFotos.php';
    }

    public function agregarFotos($respuesta, $ruta) {
        try {
            if (isset($respuesta['subir'])) {
            
                session_start();
                $fotos = new Fotos();
                $conectar = new Conexion();
    
                $fotos->setArchivos($ruta['archivo']['name']);
                $albumId = $respuesta['album_id'];
                $usuarioId = $_SESSION['id'];
                $tipo_archivo = $ruta['archivo']['type'];
    
                if (strpos($tipo_archivo, "img") || strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png") || strpos($tipo_archivo, "mp4") || strpos($tipo_archivo, "mp3") || strpos($tipo_archivo, "pdf")) {
                    
                    $archivo = $fotos->getArchivos();
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombreSinExtension = pathinfo($archivo, PATHINFO_FILENAME);
                    $nombreEncriptado = sha1($nombreSinExtension . uniqid()) . '.' . $extension;
                    $fotos->setArchivos($nombreEncriptado);
                    Archivos::subir($tipo_archivo, $nombreEncriptado, $ruta);
                    
                    // Use the Fotos model to save the photo to the database
                    $result = $fotos->guardar($conectar, $albumId);
                    
                    if ($result === true) {
                        $msj = urlencode("Contenido cargado con éxito.");
                        return header("Location:agregar-fotos?msj=$msj");
                    } else {
                        // Handle the error from the model
                        return $result;
                    }
                }
    
                else {
                    $msj = urlencode("Archivo no permitido. Por favor, consulte las extensiones permitidas.");
                    return header("Location:agregar-contenido?msj=$msj");
                }
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }



    public function tablaContenido() {
        return require 'src/vistas/tablaContenido.php';
    }
}