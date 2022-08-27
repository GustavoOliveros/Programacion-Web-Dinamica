<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 3 - Tp 3</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <?php
    // directorio
    $dir = "../Archivos/";

    if ($_FILES['poster']['error'] <= 0) {
        if ($_FILES['poster']['type'] == "image/png" || $_FILES['poster']['type'] == "image/jpeg") {
            if (!copy($_FILES['poster']['tmp_name'], $dir . $_FILES['poster']['name'])) {
                echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
                    Hubo un error al guardar el póster.
                    </div>';
            } else {
                $poster = '<img class="image-fluid" src="../Archivos/'.$_FILES['poster']['name'].'"></img>';
            }
        } else {
            echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            El póster debe ser .jpg o .png
            </div>';
        }
    } else {
        echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            Ocurrió un error en la subida del póster
            </div>';
    }

    if ($_POST) {
        echo '<div class="col-12 col-md-7 alert alert-success m-3 p-3 mx-auto">';
        echo '<h1 class="my-4">La película introducida es </h1><div class="row">';

        if(!empty($poster)){
            echo '<div class="col-12 col-xxl-4 d-flex align-items-center justify-content-center">'.$poster.'</div>';
        }
        echo '<div class="col-12 col-xxl-8 d-flex align-items-center justify-content-start"><p><strong>Titulo: </strong>' . $_POST["titulo"] . "<br>";
        echo "<strong>Actores: </strong>" . $_POST["actores"] . "<br>";
        echo "<strong>Director: </strong>" . $_POST["director"] . "<br>";
        echo "<strong>Guión: </strong>" . $_POST["guion"] . "<br>";
        echo "<strong>Producción: </strong>" . $_POST["produccion"] . "<br>";
        echo "<strong>Año: </strong>" . $_POST["anio"] . "<br>";
        echo "<strong>Nacionalidad: </strong>" . $_POST["nacionalidad"] . "<br>";
        echo "<strong>Género: </strong>" . $_POST["genero"] . "<br>";
        echo "<strong>Duración: </strong>" . $_POST["duracion"] . "<br>";
        echo "<strong>Restricción de Edad: </strong>" . $_POST["edad-recomendada"] . "</p></div></div></div>";
    } else {
        echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            No se recibieron datos
            </div>';
    }

    ?>

    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelector(".alert").innerHTML += '<br><br><a href="../Vista/index.php">Volver</a>';
    </script>
</body>

</html>