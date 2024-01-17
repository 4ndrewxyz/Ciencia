<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\modelo\Contenido;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\lib\Archivos;

class AdminContenido {

    public function adminContenido() {
        return require 'src/vistas/adminContenido.php';
    }

    public function agregarContenido($respuesta,$ruta) {
        try {
            if (isset($respuesta['subir'])) {
            
                session_start();
                $contenido=new Contenido();
                $conectar=new Conexion();
    
                $contenido->setTitulo($respuesta['titulo']);
                $contenido->setArchivo($ruta['archivo']['name']);
                $categoriaId=$respuesta['categoria_id'];
                $lenguaId=$respuesta['lengua_id'];
                $usuarioId=$_SESSION['id'];
                $tipo_archivo=$ruta['archivo']['type'];
    
                if (strpos($tipo_archivo, "img") or strpos($tipo_archivo, "jpg") or strpos($tipo_archivo, "jpeg") or strpos($tipo_archivo, "png") or strpos($tipo_archivo, "mp4") or strpos($tipo_archivo, "mp3") or strpos($tipo_archivo, "pdf")) {
                    
                    $archivo = $contenido->getArchivo();
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombreSinExtension = pathinfo($archivo, PATHINFO_FILENAME);
                    $nombreEncriptado = sha1($nombreSinExtension . uniqid()) . '.' . $extension;
                    $contenido->setArchivo($nombreEncriptado);
                    Archivos::subir($tipo_archivo,$nombreEncriptado,$ruta);
                    $contenido->guardar($conectar,$categoriaId,$lenguaId,$usuarioId);
                    $msj = urlencode("Contenido cargado con éxito.");
                    return header("Location:agregar-contenido?msj=$msj");
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

    public function editarContenido($respuesta,$ruta) {
        try {
            if (isset($respuesta['guardar'])) {
            
                session_start();
                $contenido=new Contenido();
                $conectar=new Conexion();
    
                $contenido->setId($respuesta['id']);
                $contenido->setTitulo($respuesta['titulo']);
                $contenido->setArchivo($ruta['archivo']['name']);
                $categoriaId=$respuesta['categoria_id'];
                $lenguaId=$respuesta['lengua_id'];
                $usuarioId=$_SESSION['id'];
                $tipo_archivo=$ruta['archivo']['type'];
    
                if (strpos($tipo_archivo, "img") or strpos($tipo_archivo, "jpg") or strpos($tipo_archivo, "jpeg") or strpos($tipo_archivo, "png") or strpos($tipo_archivo, "mp4") or strpos($tipo_archivo, "mp3") or strpos($tipo_archivo, "pdf")) {
                    
                    $resulArchivo=$contenido->obtenerArchivo($conectar);
                    $registro=$resulArchivo[0];
                    $archivoEncontrado = $registro['archivo'];
                    if (isset($archivoEncontrado)) {
                        Archivos::Editar($archivoEncontrado);
                        $archivo=$contenido->getArchivo();
                        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                        $nombreSinExtension = pathinfo($archivo, PATHINFO_FILENAME);
                        $nombreEncriptado = sha1($nombreSinExtension . uniqid()) . '.' . $extension;
                        $contenido->setArchivo($nombreEncriptado);
                        Archivos::subir($tipo_archivo,$nombreEncriptado,$ruta);
                        $contenido->editar($conectar,$categoriaId,$lenguaId,$usuarioId);
                        $msj = urlencode("Contenido cargado con éxito.");
                        return header("Location:tabla-contenido?msj=$msj");
                    }
                    else {
                        $msj = urlencode("Algo salió mal.");
                        return header("Location:tabla-contenido?msj=$msj");
                    }
                }
                else {
                    $msj = urlencode("Archivo no permitido.");
                    return header("Location:tabla-contenido?msj=$msj");
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function eliminarContenido($respuesta) {
        try {
            
            $contenido=new Contenido();
            $conectar=new Conexion();

            $contenido->setId($respuesta['id']);
            $resul=$contenido->obtenerArchivo($conectar);
            $registro=$resul[0];
            $archivoEncontrado = $registro['archivo'];

            if (isset($archivoEncontrado)) {
                Archivos::Editar($archivoEncontrado);
                $contenido->eliminar($conectar);
                $msj = urlencode("Contenido eliminado correctamente.");
                return header("Location:../tabla-contenido?msj=$msj");
            }
    } catch (\Throwable $th) {
        throw $th;
    }
    }

    public function tablaContenido() {
        return require 'src/vistas/tablaContenido.php';
    }
}