<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Lenguas {

    private $id;
    private $nombre;

    public function agregarLengua($conectar) {
        try {
            $consulta=$conectar->prepare("INSERT INTO lenguas(nombre)
            VALUES(:nombre)");
            $consulta->bindValue(":nombre",$this->nombre);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editar($conectar) {
        try {
            $consulta=$conectar->prepare("UPDATE lenguas SET nombre=:nombre WHERE id=:id");          
            $consulta->bindValue(":id",$this->id);
            $consulta->bindValue(":nombre",$this->nombre);                        
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public function eliminar($conectar) {
        try {
            $consulta=$conectar->prepare("DELETE FROM lenguas WHERE id=:id");  
            $consulta->bindValue(":id",$this->id);        
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function existeCategoria($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT lengua_id FROM categorias WHERE lengua_id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function existeContenido($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT lengua_id FROM contenido WHERE lengua_id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerLenguas($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,nombre FROM lenguas"); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();          
        } catch (Exception $e) {
            return 0;
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