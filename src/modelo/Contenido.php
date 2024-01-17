<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Contenido {

    private $id;
    private $titulo;
    private $archivo;
    private $fecha;
    private $vistas;

    public function __construct() {
        $this->vistas = "";
    }

    public function guardar($conectar,$categoriaId,$lenguaId,$usuarioId) {
        try {
            $consulta=$conectar->prepare("INSERT INTO contenido(titulo_contenido,archivo,fecha,vistas,categoria_id,lengua_id,usuario_id)
            VALUES(:titulo,:archivo,NOW(),:vistas,:categoria_id,:lengua_id,:usuario_id)");
            $consulta->bindValue(":titulo",$this->titulo);
            $consulta->bindValue(":archivo",$this->archivo);
            $consulta->bindValue(":vistas",$this->vistas);
            $consulta->bindValue(":categoria_id",$categoriaId);
            $consulta->bindValue(":lengua_id",$lenguaId);
            $consulta->bindValue(":usuario_id",$usuarioId);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        } 
    }

    public function editar($conectar,$categoriaId,$lenguaId,$usuarioId) {
        try {
            $consulta=$conectar->prepare("UPDATE contenido SET titulo_contenido=:titulo,archivo=:archivo,categoria_id=:categoria_id,lengua_id=:lengua_id,usuario_id=:usuario_id WHERE id=:id");          
            $consulta->bindValue(":titulo",$this->titulo);
            $consulta->bindValue(":archivo",$this->archivo);
            $consulta->bindValue(":categoria_id",$categoriaId);
            $consulta->bindValue(":lengua_id",$lenguaId);
            $consulta->bindValue(":usuario_id",$usuarioId);
            $consulta->bindValue(":id",$this->id);                          
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public function eliminar($conectar) {
        try {
            $consulta=$conectar->prepare("DELETE FROM contenido WHERE id=:id");  
            $consulta->bindValue(":id",$this->id);        
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerTodos($conectar) {
        try {
            $consulta = $conectar->prepare("
                SELECT c.id, c.titulo_contenido, c.fecha,  c.archivo, c.vistas, 
                    k.titulo AS titulo, k.tipo AS tipo, l.nombre AS nombre, a.usuario AS usuario
                FROM contenido c
                JOIN categorias k ON c.categoria_id = k.id
                JOIN lenguas l ON c.lengua_id = l.id
                JOIN administradores a ON c.usuario_id = a.id
            "); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function obtenerArchivo($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT archivo FROM contenido WHERE id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerId($conectar,$id) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo_contenido,archivo,fecha,vistas FROM contenido WHERE categoria_id=:categoria_id"); 
            $consulta->bindValue(":categoria_id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerVistaId($conectar,$id) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo_contenido,archivo,fecha,vistas FROM contenido WHERE id=:id"); 
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function editarVistas($conectar,$nuevaVista,$id) {
        try {
            $consulta=$conectar->prepare("UPDATE contenido SET vistas=:vistas WHERE id=:id");          
            $consulta->bindValue(":vistas",$nuevaVista);
            $consulta->bindValue(":id",$id);                       
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function obtenerVistas($conectar,$id) {
        try {
            $consulta=$conectar->prepare("SELECT vistas FROM contenido WHERE id=:id"); 
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function ultimosContenidos($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo_contenido,archivo,fecha FROM contenido ORDER BY fecha DESC LIMIT 3");
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

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo; 
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getArchivo() {
        return $this->archivo; 
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