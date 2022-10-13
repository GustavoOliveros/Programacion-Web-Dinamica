<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 3 - Tp 2</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../Estructura/navbar.php";
    ?>

    <?php
    // """Base de datos"""
    $usuarios[] = ["username" => "gustavo83012", "password" => "ines0001"];
    $usuarios[] = ["username" => "thecatgamer", "password" => "gusa0003"];
    $usuarios[] = ["username" => "inesmol2", "password" => "naranja03"];
    $usuarios[] = ["username" => "dragonknight23", "password" => "messi2022"];
    $usuarios[] = ["username" => "looper_001", "password" => "clubbuho22"];

    // Variables especiales
    $contador = 0;
    $encontro = false;
    $accesoConcedido = false;

    // Manejo del POST
    if ($_POST) {
        // Verificación del usuario
        while ($contador < count($usuarios) && !$encontro) {
            if ($usuarios[$contador]["username"] == strtolower($_POST["username"])) {
                if ($usuarios[$contador]["password"] == $_POST["password"]) {
                    $accesoConcedido = true;
                }
                $encontro = true;
            }
            $contador++;
        }

        if ($accesoConcedido) {
            // Codigo de bienvenida al usuario
            $nomUsuario = $_POST["username"];
            echo '<div class="container d-flex flex-column align-items-center justify-content-center vh-100">
            <h1 class="text-center"><strong>¡Bienvenido de vuelta, ' . strtoupper($nomUsuario) . '!</strong></h1>
            <a href="TP2_EJ3.php">Cerrar sesión</a>
            </div>';
        } else {
            // Alerta de error y link al formulario anterior
            echo '<div class="col-12 col-md-9 mx-auto alert alert-danger m-3" role="alert">
            No encontramos su usuario o contraseña en nuestro sistema.<br>
            <a href="TP2_EJ3.php">Haga click acá para volver</a>
            </div>';
        }
    } else {
        // Alerta de que ocurrió un fallo
        echo '<div class="col-12 col-md-9 mx-auto alert alert-danger m-3" role="alert">
        Ocurrió un fallo.<br>
        <a href="TP2_EJ3.php">Haga click acá para volver</a>
        </div>';
    }
    ?>


    <?php
    include_once "../Estructura/footer.php";
    ?>
    <script src="../lib/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>