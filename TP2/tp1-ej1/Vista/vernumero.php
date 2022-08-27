<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 1 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="alert alert-success col-12 col-md-6 col-xxl-4 p-4 mt-3 mx-auto">
        <h1>
            <?php
            if ($_GET) {
                $numero = $_GET["num"];
                if ($numero > 0) {
                    echo "El número es positivo.";
                } elseif ($numero == 0) {
                    echo "El número es cero.";
                } else {
                    echo "El número es negativo.";
                }
            } else {
                echo "No se recibieron datos.";
            }
            ?>
        </h1>
        <a href="index.php">Volver</a>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>