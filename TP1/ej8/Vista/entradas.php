<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - TP 1</title>
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <style>
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <br><br>
        <h1>Cine Cinem@s</h1>
        <p>
            <?php
            if ($_POST) {
                $edad = $_POST["edad"];
                $estudiante = $_POST["esEstudiante"];

                if ($edad < 12) {
                    $precio = 160;
                } else if ($estudiante == "true") {
                    $precio = 180;
                } else {
                    $precio = 300;
                }

                echo "<h2>Total a pagar: $" . $precio . "</h2>";
            } else {
                echo "<h2>No se recibieron datos</h2>";
            }
            ?>
        </p>
        <br>
        <a href="index.php">Volver</a>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>