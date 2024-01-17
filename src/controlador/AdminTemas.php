<?php

namespace Alansnow\Ciencia\controlador;
use Alansnow\Ciencia\config\Conexion;
use Alansnow\Ciencia\modelo\Tema;

class AdminTemas {

    private $tema;

    public function __construct() {
        $this->tema = new Tema();
    }

    public function vistaTemas($respuesta)
    {
        return require 'src/vistas/temas.php';
    }

    public function adminTemas()
    {
        return require 'src/vistas/adminTemas.php';
    }

    public function agregarTemas($respuesta)
    {
        try {
            if (isset($respuesta['agregar'])) {
                $conectar=new Conexion();
    
                $this->tema->setNombre($respuesta['nombre']);
                $this->tema->agregarTema($conectar);
                $msj = urlencode("Contenido cargado con éxito.");
                return header("Location:agregar-temas?msj=$msj");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function editarTema($respuesta)
    {
        try {
            if (isset($respuesta['guardar'])) {
                
                $conectar=new Conexion();

                $this->tema->setId($respuesta['id']);
                $this->tema->setNombre($respuesta['nombre']);

                $this->tema->editar($conectar);
                $msj = urlencode("Cambios realizados correctamente.");
                return header("Location:tabla-temas?msj=$msj");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function eliminarTema($respuesta)
    {
        try {
            $conectar=new Conexion();

            $this->tema->setId($respuesta['id']);
            $existeCategoria=$this->tema->existeCategoria($conectar);

            if (count($existeCategoria)>=1) {
                $msj = urlencode("El tema está asociado a una categoría, primero elimine o edite la categoría.");
                return header("Location:../tabla-temas?msj=$msj");
            }
            else {
                $this->tema->eliminar($conectar);
                $msj = urlencode("Tema eliminado correctamente.");
                return header("Location:../tabla-temas?msj=$msj");
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function tablaTemas()
    {
        return require 'src/vistas/tablaTemas.php';
    }
}