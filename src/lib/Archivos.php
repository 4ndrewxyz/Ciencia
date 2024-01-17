<?php

namespace Alansnow\Ciencia\lib;

class Archivos {

    public static function subir($tipo_archivo,$nombreEncriptado,$ruta){
        if (strpos($tipo_archivo, "img") or strpos($tipo_archivo, "jpg") or strpos($tipo_archivo, "jpeg") or strpos($tipo_archivo, "png") or strpos($tipo_archivo, "pdf")) {
            
            $tmp_file=$ruta['archivo']['tmp_name'];
            if (!empty($tmp_file)) {
                move_uploaded_file($tmp_file,"src/assets/multimedia/img/".$nombreEncriptado);
            }
        }
        elseif (strpos($tipo_archivo, "mp3") or strpos($tipo_archivo, "mp4") or strpos($tipo_archivo, "MP3") or strpos($tipo_archivo, "MP4")) {
            
            $tmp_file=$ruta['archivo']['tmp_name'];
            if (!empty($tmp_file)) {
                move_uploaded_file($tmp_file,"src/assets/multimedia/video/".$nombreEncriptado);
            }
        }
    }

    public static function Editar($archivoEncontrado) {
        if (strpos($archivoEncontrado, "pdf") or strpos($archivoEncontrado, "jpg") or strpos($archivoEncontrado, "png") or strpos($archivoEncontrado, "jpeg") or strpos($archivoEncontrado, "img")) {
            if (file_exists("src/assets/multimedia/img/".$archivoEncontrado)) {
                unlink("src/assets/multimedia/img/".$archivoEncontrado);
            }
      }
      elseif (strpos($archivoEncontrado, "mp3") or strpos($archivoEncontrado, "mp4")) {
        if (file_exists("src/assets/multimedia/video/".$archivoEncontrado)) {
            unlink("src/assets/multimedia/video/".$archivoEncontrado);
        }
      }
    }
}