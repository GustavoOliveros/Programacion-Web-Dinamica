<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css" />
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js" defer></script>
</head>

<body>
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
        <a href="ej3.html">Volver al inicio</a>
    </div>

</body>

</html>