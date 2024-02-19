<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Visitas {

    private $visitors;
    private $IP;
    private $Time;
    
    public function obtenerVisitas($conectar) {
        try {
            $consulta = $conectar->prepare("
            SELECT COUNT(*) AS total_visitors FROM `visitantes`
            ");
    
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $result = $consulta->fetch();
            return $result;  // Return the result array      
        } catch (Exception $e) {
            return []; // Return an empty array if an exception occurs
        }
    }
    
    public function obtenerUltimaVisita($conectar) {
        try {
            $consulta = $conectar->prepare("
            SELECT MAX(Time) AS last_visit FROM `visitantes`
            ");
    
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $result = $consulta->fetch();
            return $result;  // Return the last visit timestamp     
        } catch (Exception $e) {
            return []; // Return 'N/A' if an exception occurs
        }
    }

    public function visitasHoy($conectar) {
        try {
            $consulta = $conectar->prepare("
            SELECT COUNT(*) AS visitas_hoy FROM `visitantes` WHERE DATE(Time) = CURDATE()
            ");
    
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $result = $consulta->fetch();
            return $result;  // Return the result array      
        } catch (Exception $e) {
            return []; // Return an empty array if an exception occurs
        }
    }

    public function visitasMes($conectar) {
        try{
            $consulta = $conectar->prepare("
            SELECT COUNT(*) AS visitas_mes FROM `visitantes` WHERE MONTH(Time) = MONTH(CURDATE()) AND YEAR(Time) = YEAR(CURDATE())
            ");

            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $result = $consulta->fetch();
            return $result;
        } catch (Exception $e) {
            return[];
        }
    }
    

}