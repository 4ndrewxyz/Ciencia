<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Tema {

    private $id;
    private $nombre;

    public function agregarTema($conectar)
    {
        try {
            $consulta=$conectar->prepare("INSERT INTO temas(nombre)
            VALUES(:nombre)");
            $consulta->bindValue(":nombre",$this->nombre);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editar($conectar)
    {
        try {
            $consulta=$conectar->prepare("UPDATE temas SET nombre=:nombre WHERE id=:id");          
            $consulta->bindValue(":id",$this->id);
            $consulta->bindValue(":nombre",$this->nombre);                        
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public function eliminar($conectar)
    {
        try {
            $consulta=$conectar->prepare("DELETE FROM temas WHERE id=:id");  
            $consulta->bindValue(":id",$this->id);        
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function obtenerTemas($conectar)
    {
        try {
            $consulta=$conectar->prepare("SELECT id,nombre FROM temas"); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();          
        } catch (Exception $e) {
            return 0;
        }
    }

    public function obtenerTemaId($id,$conectar)
    {
        try {
            $consulta=$conectar->prepare("SELECT id,nombre FROM temas WHERE id=:id"); 
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetch();          
        } catch (Exception $e) {
            return 0;
        }
    }

    public function existeCategoria($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT tema_id FROM categorias WHERE tema_id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id; 
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre; 
    }
}