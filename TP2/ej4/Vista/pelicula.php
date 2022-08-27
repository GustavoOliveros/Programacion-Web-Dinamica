<!-- Se agregó bootstrap para los estilos del footer y el header -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 4 - Tp 2</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="col-12 my-3 col-lg-6 alert alert-success p-3 mx-auto">
        <button type="button" class="btn-close disabled position-absolute end-0 top-0 p-3" aria-label="Close" style="font-size: 0.8rem"></button>
        <?php
        if ($_GET) {
            echo '<h1 class="my-4">La película introducida es </h1>';

            echo "<p><strong>Titulo: </strong>" . $_GET["titulo"] . "<br>";
            echo "<strong>Actores: </strong>" . $_GET["actores"] . "<br>";
            echo "<strong>Director: </strong>" . $_GET["director"] . "<br>";
            echo "<strong>Guión: </strong>" . $_GET["guion"] . "<br>";
            echo "<strong>Producción: </strong>" . $_GET["produccion"] . "<br>";
            echo "<strong>Año: </strong>" . $_GET["anio"] . "<br>";
            echo "<strong>Nacionalidad: </strong>" . $_GET["nacionalidad"] . "<br>";
            echo "<strong>Género: </strong>" . $_GET["genero"] . "<br>";
            echo "<strong>Duración: </strong>" . $_GET["duracion"] . "<br>";
            echo "<strong>Restricción de Edad: </strong>" . $_GET["edad-recomendada"] . "</p>";
        } else {
            echo "<h1>No se recibieron datos</h1>";
        }

        ?>
        <a href="index.php">Volver</a>


    </div>

    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>