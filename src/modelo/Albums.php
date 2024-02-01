<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Albums {

    private $id;
    private $nombre;
    private $descripcion;


    public function agregarAlbum($conectar) {
        try {
            var_dump($this->nombre);
            $consulta=$conectar->prepare("INSERT INTO albums(nombre, descripcion)
            VALUES(:nombre, :descripcion)");
            $consulta->bindValue(":nombre",$this->nombre);
            $consulta->bindValue(":descripcion",$this->descripcion);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }  


    public function editarAlbums($conectar) {
        try {
            $consulta=$conectar->prepare("UPDATE albums SET nombre=:nombre, descripcion=:descripcion WHERE id=:id");          
            $consulta->bindValue(":id",$this->id);
            $consulta->bindValue(":nombre",$this->nombre);      
            $consulta->bindValue(":descripcion",$this->descripcion);                                          
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public function eliminarAlbums($conectar) {
        try {
            $consulta = $conectar->prepare("DELETE FROM albums WHERE id=:id");
            $consulta->bindValue(":id", $this->id);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerAlbums($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,nombre,descripcion FROM albums"); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();          
        } catch (Exception $e) {
            return 0;
        }
    }

    // Otras funciones similares a las originales según sea necesario

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

    public function setDescripcion($descripcion) {
         $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
}
