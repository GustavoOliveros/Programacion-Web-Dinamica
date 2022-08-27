<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - TP 1</title>
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
            if ($_GET) {
                if ($_GET["edad-form"] >= 18) {
                    $edadString =  "Soy mayor de edad";
                } else {
                    $edadString = "Soy menor de edad";
                }

                if ($_GET["estudios"] == "sin-estudios") {
                    $estudiosString = "No cuento con estudios.";
                } elseif ($_GET["estudios"] == "estudios-primarios") {
                    $estudiosString = "Cuento con estudios primarios";
                } else {
                    $estudiosString = "Cuento con estudios secundarios";
                }


                if ($_GET["sexo"] == "otro") {
                    $stringSexo = "No me identifico con ningún género binario.";
                } else {
                    $stringSexo = "Me identifico con el sexo " . $_GET["sexo"];
                }

                echo "Hola, yo soy <strong>" . $_GET["nombre-form"] . "
            " . $_GET["apellido-form"] . ". " . $edadString . "</strong>, tengo <strong>" .
                    $_GET["edad-form"] . "</strong> años y vivo en <strong>" .
                    $_GET["direccion-form"] . ".</strong><br>";
                echo "<b>" . $estudiosString . "</b><br>";
                echo "<b>" . $stringSexo . "</b><br>";
                if (!empty($_GET["deportes"])) {
                    echo "Practico <b>" . count($_GET["deportes"]) . "</b> deportes.";
                } else {
                    echo "No practico ningún deporte.";
                }
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