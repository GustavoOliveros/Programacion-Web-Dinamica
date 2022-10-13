<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 3 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../Estructura/navbar.php";
    ?>
    <div class="alert alert-success col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto">
        <h2>
            <?php
            if ($_POST) {
                echo "Hola, soy <strong>" . $_POST["nombre-form"] . " " . $_POST["apellido-form"] . "</strong>, tengo <strong>" . $_POST["edad-form"] . "</strong> años y vivo en <strong>" . $_POST["direccion-form"] . "</strong>";
            } else {
                echo "No se recibieron datos";
            }
            ?>
        </h2>
        <a href="TP1_EJ3.php">Volver</a>
    </div>
    <?php
    include_once "../Estructura/footer.php";
    ?>
    <script src="../lib/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>