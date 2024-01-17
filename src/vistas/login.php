<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/loginEstilos.css">
</head>
<body>

    <main class="container d-flex justify-content-center contenedor-login">
        <div class="row shadow p-3 mb-5 bg-body-tertiary rounded contenedor-form">
            <div class="col-md-6 col-lg-6 col-xl-6 logos d-flex justify-content-center">
            <img class="img-fluid" src="src/assets/img/logo_unach_p_fondo_blanco.png" alt="">
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 form-pos">

            <form class="p-3 mb-5 bg-body-tertiary rounded formulario-login" action="autenticar" method="post">
            <div class="form-floating mb-3">
            <input type="email" name="usuario" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating mb-3">
            <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Clave</label>
            </div>
            <button type="submit" name="ingresar" class="btn btn-primary mb-3">Ingresar</button>
            <div>
            <?php
            if (isset($_GET['msj'])) {
                $alerta = urldecode($_GET['msj']);
                echo $alerta;
            }
            ?>
            </div>
            </form>

            </div>
        </div>
    </main>

    <script src="src/assets/js/bootstrap.bundle.js"></script>
</body>
</html>