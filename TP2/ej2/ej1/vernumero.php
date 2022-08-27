<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css" />
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js" defer></script>
    <title>Ver número</title>
</head>

<body>
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
        <a href="ej1.html">Volver al inicio</a>
    </div>

</body>

</html>