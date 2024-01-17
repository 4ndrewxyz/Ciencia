<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\lib\Mensajes;
use Alansnow\Ciencia\modelo\Categoria;
use Alansnow\Ciencia\lib\Archivos;

class AdminCategoria {

    public function categoriaVista() {
        return require 'src/vistas/adminCategoria.php';
    }

    public function agregarCategorias($respuesta,$ruta) {
       try {
        if (isset($respuesta['subir'])) {
            
            session_start();
            $categoria=new Categoria();
            $conectar=new Conexion();

            $categoria->setTitulo($respuesta['titulo']);
            $categoria->setDescripcion($respuesta['descripcion']);
            $categoria->setArchivo($ruta['archivo']['name']);
            $categoria->setTipo($respuesta['tipo']);
            $temaId=$respuesta['temaId'];
            $lenguaId=$respuesta['lenguaId'];
            $usuarioId=$_SESSION['id'];
            $tipo_archivo=$ruta['archivo']['type'];

            if (strpos($tipo_archivo, "img") or strpos($tipo_archivo, "jpg") or strpos($tipo_archivo, "jpeg") or strpos($tipo_archivo, "png")) {
                
                $archivo = $categoria->getArchivo();
                $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                $nombreSinExtension = pathinfo($archivo, PATHINFO_FILENAME);
                $nombreEncriptado = sha1($nombreSinExtension . uniqid()) . '.' . $extension;
                $categoria->setArchivo($nombreEncriptado);
                Archivos::subir($tipo_archivo,$nombreEncriptado,$ruta);
                $categoria->agregar($conectar,$temaId,$lenguaId,$usuarioId);
                $msj = urlencode("Contenido cargado con éxito.");
                return header("Location:agregar-categoria?msj=$msj");
            }

            else {
                
                $msj = urlencode("Archivo no permitido. Por favor, consulte las extensiones permitidas.");
                return header("Location:agregar-categoria?msj=$msj");
            }
            
        }
       } catch (\Throwable $th) {
        $msj = "Error";
        return $msj;
       }
    }

    public function editarCategoria($respuesta,$ruta) {

        try {
            if (isset($respuesta['guardar'])) {
            
                session_start();
                $categoria=new Categoria();
                $conectar=new Conexion();
    
                $categoria->setId($respuesta['id']);
                $categoria->setTitulo($respuesta['titulo']);
                $categoria->setDescripcion($respuesta['descripcion']);
                $categoria->setArchivo($ruta['archivo']['name']);
                $categoria->setTipo($respuesta['tipo']);
                $temaId=$respuesta['tema_id'];
                $lenguaId=$respuesta['lengua_id'];
                $usuarioId=$_SESSION['id'];
                $tipo_archivo=$ruta['archivo']['type'];
    
                if (strpos($tipo_archivo, "img") or strpos($tipo_archivo, "jpg") or strpos($tipo_archivo, "jpeg") or strpos($tipo_archivo, "png")) {
                    
                    $resulArchivo=$categoria->obtenerArchivo($conectar);
                    $registro=$resulArchivo[0];
                    $archivoEncontrado = $registro['archivo'];
                    if (isset($archivoEncontrado)) {
                        Archivos::Editar($archivoEncontrado);
                        $archivo=$categoria->getArchivo();
                        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                        $nombreSinExtension = pathinfo($archivo, PATHINFO_FILENAME);
                        $nombreEncriptado = sha1($nombreSinExtension . uniqid()) . '.' . $extension;
                        $categoria->setArchivo($nombreEncriptado);
                        Archivos::subir($tipo_archivo,$nombreEncriptado,$ruta);
                        $categoria->editar($conectar,$temaId,$lenguaId,$usuarioId);
                        $msj = urlencode("Contenido cargado con éxito.");
                        return header("Location:tabla-categoria?msj=$msj");
                    }
                    else {
                        $msj = urlencode("Algo salió mal.");
                        return header("Location:tabla-categoria?msj=$msj");
                    }
                }
                else {
                    $msj = urlencode("Archivo no permitido.");
                    return header("Location:tabla-categoria?msj=$msj");
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function eliminarCategoria($respuesta) {

        try {
            
                $categoria=new Categoria();
                $conectar=new Conexion();

                $categoria->setId($respuesta['id']);
                $resul=$categoria->obtenerArchivo($conectar);
                $registro=$resul[0];
                $archivoEncontrado = $registro['archivo'];

                $existe=$categoria->existe($conectar);
                if (isset($archivoEncontrado)) {
                    
                        if (count($existe)>=1) {
                            $msj = urlencode("La categoria tiene un contenido asociado, primero elimine el contenido.");
                            return header("Location:../tabla-categoria?msj=$msj");
                        }
                        else {
                            Archivos::Editar($archivoEncontrado);
                            $categoria->eliminar($conectar);
                            $msj = urlencode("Contenido eliminado correctamente.");
                            return header("Location:../tabla-categoria?msj=$msj");
                                            
                    }
                    }
        } catch (\Throwable $th) {
        
            return $th;
        }
    }

    public function tablaCategoria() {
        return require 'src/vistas/tablaCategoria.php';
    }

    public function obtenerCategorias($respuesta) {

        $id = $respuesta['id'];

        $categoria=new Categoria();
        $conectar=new Conexion();
        $resultado=$categoria->obtenerId($conectar,$id);

        if (!empty($resultado)) {

            header('Content-Type: application/json');
            echo json_encode($resultado);
        } 
        else {
            $res = array(
                "mensaje" => "Los datos no existen"
            );
            header('Content-Type: application/json');
            echo json_encode($res);
        }
    }

}