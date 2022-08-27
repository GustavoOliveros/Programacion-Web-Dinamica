<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EJ 8</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css" />
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js" defer></script>
</head>

<body>
    <div class="alert alert-success col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto">
        <h1>
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
        </h1>
        <a href="ej8.html">Hacer otra consulta</a>
    </div>
</body>

</html>