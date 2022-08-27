<!-- Se agregó bootstrap para los estilos del footer y el header -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - TP 1</title>
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <style>
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        input {
            display: block;
            margin: 0 auto;
            width: 200px;
        }

        input[type="submit"] {
            margin-top: 5px;
            width: 100px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <br><br>
        <p>
            <?php
            if ($_POST) {
                echo "Hola, yo soy <strong>" . $_POST["nombre-form"] . ", " . $_POST["apellido-form"] . "</strong> tengo <strong>" . $_POST["edad-form"] . "</strong> años y vivo en <strong>" . $_POST["direccion-form"] . "</strong>";
            } else {
                echo "No se recibieron datos";
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