<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Fotos {

    private $id;
    private $archivos;
    private $fecha;
    private $vistas;

    public function __construct() {
        $this->vistas = "";
    }

    public function guardar($conectar, $albumId) {
        try {
            $consulta = $conectar->prepare("INSERT INTO fotos(id_album, file_path, upload_date)
                VALUES(:id_album, :file_path, NOW())");
            $consulta->bindValue(":id_album", $albumId);
            $consulta->bindValue(":file_path", $this->archivos); // Assuming archivo is the file path
            $consulta->execute();
            return true;
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
