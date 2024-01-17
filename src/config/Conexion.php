<?php

namespace Alansnow\Ciencia\config;
use PDO;
use Exception;
class Conexion extends PDO{
    private $hostBD='localhost';
    private $nombreBD='cacc_unach';
    private $usuarioBD='root';
    private $passwordBD='';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
        
    }
}