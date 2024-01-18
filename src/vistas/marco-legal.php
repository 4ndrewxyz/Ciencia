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
    <title>¿Qué es?</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="stylesheet" href="src/assets/css/traduccion.css">
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
          <h1 class="text-center">Marco Legal</h1>
          <p class="text-center">Universidad Autónoma de Chiapas</p>
        </div>
      </header>

      <main class="container seccion-ctn">
        <section class="row seccion">
            <div class="col-sm-12 col-md-4 col-lg-3" style="padding-bottom: 12vh;">
                <h4 class="text-center mb-5">Traducciones</h4>

                <ul id="traducciones" class="traducciones">
                    <li id="traduccion" class="traduccion"><a href="">Español</a></li>
                    <li id="traduccion" class="traduccion"><a href="">CH'ol</a></li>
                    <li id="traduccion-2" class="traduccion"><a href="">Tojol-ab'al</a></li>
                    <li id="traduccion-3" class="traduccion"><a href="">Tseltal</a></li>
                    <li id="traduccion-4" class="traduccion"><a href="">Tsotsil</a></li>
                    <li id="traduccion-5" class="traduccion"><a href="">Zoque</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-8 col-lg-9">
              <p id="txt-eclipse" class="txt-info" style="padding-top:12vh; padding-bottom: 12vh;">
                Ejemplo de marco legal
              </p>
            </div>
        </section>
      </main>

      <button id="btn-subir" class="btn-subir-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi-caret-up-fill" viewBox="0 0 16 16">
          <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
        </svg>
      </button>

<?php include 'footer.php'; ?>
      
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
      <script src="src/assets/js/navbar.js"></script>
      <script src="src/assets/js/eclipseSeccion.js"></script>
      <script src="src/assets/js/btnSubir.js"></script>
      <script src="src/assets/js/contenidoSecciones.js"></script>
</body>
</html>