<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 6 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="alert alert-success col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto">
        <h2>
            <?php
            if ($_POST) {
                if ($_POST["edad-form"] >= 18) {
                    $edadString = "por lo que soy <strong>mayor de edad</strong>";
                } else {
                    $edadString = "por lo que soy <strong>menor de edad</strong>";
                }

                if ($_POST["estudios"] == "sin-estudios") {
                    $estudiosString = "<strong>No</strong> cuento con estudios";
                } elseif ($_POST["estudios"] == "estudios-primarios") {
                    $estudiosString = "Cuento con <strong>estudios primarios</strong>";
                } else {
                    $estudiosString = "Cuento con <strong>estudios secundarios</strong>";
                }


                if ($_POST["sexo"] == "otro") {
                    $stringSexo = "<strong>no</strong> me identifico con ningún género binario";
                } else {
                    $stringSexo = "me identifico con el sexo <strong>" . $_POST["sexo"] . "</strong>";
                }

                if (!empty($_POST["deportes"])) {
                    $stringDeportes = "Practico <strong>" . count($_POST["deportes"]) . "</strong> deportes.";
                } else {
                    $stringDeportes = "No practico <strong>ningún</strong> deporte.";
                }

                echo "Hola, soy <strong>" . $_POST["nombre-form"] . " " . $_POST["apellido-form"] . "</strong>, tengo <strong>" . $_POST["edad-form"] . "</strong> años, " . $edadString . ", y vivo en <strong>" . $_POST["direccion-form"] . "</strong>. " . $estudiosString . " y " . $stringSexo . ". " . $stringDeportes;
            } else {
                echo "No se recibieron datos";
            }

            ?>
        </h2>
        <a href="../Vista/index.php">Volver</a>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>