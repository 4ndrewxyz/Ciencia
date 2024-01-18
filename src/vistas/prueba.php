<?php
    use Alansnow\Ciencia\lib\Cache;
    use Alansnow\Ciencia\modelo\Contenido;
    use Alansnow\Ciencia\config\Conexion;

    $contenido=new Contenido();
    $conectar=new Conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>

    <?php
        $resultado = $cache->obtenerCache();
        if (!empty($registro)) {
            foreach ($resultado as $registro) {
                $contenido->setId($registro['id']);
        $contenido->setTitulo($registro['titulo_contenido']);
        $contenido->setArchivo($registro['archivo']);
        $contenido->setFecha($registro['fecha']);
        $contenido->setVistas($registro['vistas']);
        $categorias=$registro['titulo'];
        $tipo=$registro['tipo'];
        $lenguas=$registro['nombre'];
        $usuario=$registro['usuario'];
            
    ?>
    <ul>
        <li><?php echo $contenido->getId(); ?></li>
        <li><?php echo $contenido->getTitulo(); ?></li>
        <li><?php echo $contenido->getFecha(); ?></li>
        <li><?php echo $contenido->getArchivo(); ?></li>
        <li><?php echo $contenido->getVistas(); ?></li>
        <li><?php echo $categorias; ?></li>
        <li><?php echo $tipo; ?></li>
        <li><?php echo $lenguas; ?></li>
        <li><?php echo $usuario; ?></li>
    </ul>
    <?php
    }
} else {
    $resul = $contenido->obtenerTodos($conectar);
    foreach ($resul as $regi) {
        $contenido->setId($regi['id']);
        $contenido->setTitulo($regi['titulo_contenido']);
        $contenido->setArchivo($regi['archivo']);
        $contenido->setFecha($regi['fecha']);
        $contenido->setVistas($regi['vistas']);
        $categorias=$regi['titulo'];
        $tipo=$regi['tipo'];
        $lenguas=$regi['nombre'];
        $usuario=$regi['usuario'];
        ?>

        <ul>
        <li><?php echo $contenido->getId(); ?></li>
        <li><?php echo $contenido->getTitulo(); ?></li>
        <li><?php echo $contenido->getFecha(); ?></li>
        <li><?php echo $contenido->getArchivo(); ?></li>
        <li><?php echo $contenido->getVistas(); ?></li>
        <li><?php echo $categorias; ?></li>
        <li><?php echo $tipo; ?></li>
        <li><?php echo $lenguas; ?></li>
        <li><?php echo $usuario; ?></li>
    </ul>
    <?php
    }
    $cache->añadirCache($resul);
}
    ?>

  <div>
    <h1>datos de la cache</h1>
  <?php
    $resultado = $cache->obtenerCache();
    foreach ($resultado as $regis) {
        $contenido->setId($regi['id']);
        $contenido->setTitulo($regi['titulo_contenido']);
        $contenido->setArchivo($regi['archivo']);
        $contenido->setFecha($regi['fecha']);
        $contenido->setVistas($regi['vistas']);
        $categorias=$regi['titulo'];
        $tipo=$regi['tipo'];
        $lenguas=$regi['nombre'];
        $usuario=$regi['usuario'];  
    
    ?>
    <p><?php echo $contenido->getTitulo(); ?></p>
    <?php } ?>
  </div>
</body>
</html>