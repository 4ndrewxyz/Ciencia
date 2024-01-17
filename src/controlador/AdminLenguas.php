<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\modelo\Lenguas;

class AdminLenguas {

    public function adminLenguas() {
        return require 'src/vistas/adminLenguas.php';
    }

    public function agregarLenguas($respuesta) {
        try {
            if (isset($respuesta['agregar'])) {
                $lenguas=new Lenguas();
                $conectar=new Conexion();
    
                $lenguas->setNombre($respuesta['nombre']);
                $lenguas->agregarLengua($conectar);
                $msj = urlencode("Contenido cargado con éxito.");
                return header("Location:agregar-lenguas?msj=$msj");
            }
        } catch (\Throwable $th) {
             return $th;
        }
    }

    public function editarLenguas($respuesta) {
        try {
            if (isset($respuesta['guardar'])) {
                
                $lenguas=new Lenguas();
                $conectar=new Conexion();

                $lenguas->setId($respuesta['id']);
                $lenguas->setNombre($respuesta['nombre']);

                $lenguas->editar($conectar);
                $msj = urlencode("Cambios realizados correctamente.");
                return header("Location:tabla-lenguas?msj=$msj");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function eliminarLenguas($respuesta) {
        try {
            $lengua=new Lenguas();
            $conectar=new Conexion();

            $lengua->setId($respuesta['id']);
            $existeCategoria=$lengua->existeCategoria($conectar);
            $existeContenido=$lengua->existeContenido($conectar);

            if (count($existeCategoria)>=1) {
                $msj = urlencode("La lengua está asociado a una categoría, primero elimine o edite la categoría.");
                return header("Location:../tabla-lenguas?msj=$msj");
            }
            elseif (count($existeContenido)>=1) {
                $msj = urlencode("La lengua está asociado a un contenido, primero elimine o edite el contenido.");
                return header("Location:../tabla-lenguas?msj=$msj");
            }
            else {
                $lengua->eliminar($conectar);
                $msj = urlencode("Lengua eliminada correctamente.");
                return header("Location:../tabla-lenguas?msj=$msj");
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function tablaLenguas() {
        return require 'src/vistas/tablaLenguas.php';
    }
}