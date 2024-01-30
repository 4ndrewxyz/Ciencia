<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;
use Alansnow\Ciencia\config\Conexion;

class Fotos {

    private $id;
    private $archivos;
    private $fecha;
    private $vistas;
    private $id_album;
    private $upload_date;

    public function __construct() {
        $this->vistas = "";
    }

    public function guardar($conectar, $albumId) {
        try {
            $consulta = $conectar->prepare("INSERT INTO fotos(id_album, archivo, upload_date)
            VALUES(:id_album, :archivo, NOW())");
            $consulta->bindValue(":id_album", $albumId);
            $consulta->bindValue(":archivo", $this->archivos); // Assuming archivo is the file path
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerFotos($conectar) {
        try {
            $consulta = $conectar->prepare("
                SELECT f.id, f.id_album, f.archivo, a.nombre AS nombre_album
                FROM fotos f
                JOIN albums a ON f.id_album = a.id
            "); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();          
        } catch (Exception $e) {
            return 0;
        }
    }

    




    public function eliminarFoto($conectar) {
        try { 
            $consulta = $conectar->prepare('DELETE FROM fotos WHERE id=:id');
            $consulta->bindValue(":id", $this->id);
            $consulta->execute();
            return true;
            var_dump($this->id);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerArchivos($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT archivo FROM fotos WHERE id=:id"); 
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

    public function setArchivos($archivos) {
        $this->archivos = $archivos;
    }

    public function getArchivos() {
        return $this->archivos; 
    }

    public function setAlbumName($album_name) {
        $this->$album_name = $album_name;
    }

    public function setIdAlbum($id_album) {
        $this->id_album = $id_album;
    }

    public function getIdAlbum() {
        return $this->id_album;
    }


    public function setUploadDate($upload_date) {
        $this->upload_date = $upload_date;
    }

    public function getUploadDate() {
        return $this->upload_date;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getFecha() {
        return $this->fecha; 
    }

    public function setVistas($vistas) {
        $this->vistas = $vistas;
    }

    public function getVistas() {
        return $this->vistas; 
    }
}
?>
