<?php
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $conectar = new Conexion();
  $tema = new Tema();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compromiso social</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/galeria.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/traduccion.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<header id="header" class="header">
        <div id="header-eclipse" class="nada"></div>
        <div id="header-contenido" class="header-content">
          <h1 class="text-center que-t">Galeria</h1>
          <p class="text-center que-es">Universidad Autónoma de Chiapas</p>
        </div>
      </header>

    <div class="gallery" onclick="openLightbox(event)">
        <img src="https://assets.codepen.io/210284/flower-6.jpg"
            alt="Image 1">
        <img src="https://assets.codepen.io/210284/flower-7.jpg"
            alt="Image 2">
        <img src="https://assets.codepen.io/210284/flower-8.jpg"
            alt="Image 3">
        <img src="https://assets.codepen.io/210284/flower-9.jpg"
            alt="Image 4">
        <img src="https://assets.codepen.io/210284/flower-1.jpg"
            alt="Image 5">
        <img src="https://assets.codepen.io/210284/flower-2.jpg"
            alt="Image 6">
        <img src="https://assets.codepen.io/210284/flower-3.jpg"
            alt="Image 7">
        <img src="https://assets.codepen.io/210284/flower-4.jpg"
            alt="Image 8">
        <img src="https://assets.codepen.io/210284/flower-5.jpg"
            alt="Image 9">
    </div>

    <!-- Lightbox container -->
    <div id="lightbox">
        <!-- Close button -->
        <span id="close-btn" onclick="closeLightbox()">&times;</span>

        <!-- Main lightbox image -->
        <img id="lightbox-img" src="" alt="lightbox image">

        <!-- Thumbnails container -->
        <div id="thumbnail-container">
            <!-- Thumbnails will be added dynamically using JavaScript -->
        </div>

        <!-- Previous and Next buttons -->
        <button id="prev-btn" onclick="changeImage(-1)">&lt; Anterior</button>
        <button id="next-btn" onclick="changeImage(1)">Siguiente &gt;</button>
    </div>


<?php include 'footer.php'; ?>
      
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
      <script src="src/assets/js/navbar.js"></script>
      <script src="src/assets/js/galeria.js"></script>
      <script src="src/assets/js/eclipseSeccion.js"></script>
      <script src="src/assets/js/btnSubir.js"></script>
      <script src="src/assets/js/contenidoSecciones3.js"></script>
</body>
</html>