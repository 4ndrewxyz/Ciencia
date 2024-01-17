<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Usuario {

    private int $id;
    private string $rol;
    private string $clave;

    public function __construct(private string $usuario = '') {
        
    }

    public function guardar($conectar) {
        try {
            $consulta=$conectar->prepare("INSERT INTO administradores(usuario,clave,rol)
            VALUES(:usuario,:clave,:rol)");
            $consulta->bindValue(":usuario",$this->usuario);
            $consulta->bindValue(":clave",$this->clave);
            $consulta->bindValue(":rol",$this->rol);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function autenticado($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,usuario,clave,rol FROM administradores WHERE 
            usuario=:usuario");
            $consulta->bindValue(":usuario",$this->usuario); 
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

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getUsuario() {
        return $this->usuario; 
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function getClave() {
        return $this->clave; 
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function getRol() {
        return $this->rol; 
    }
}