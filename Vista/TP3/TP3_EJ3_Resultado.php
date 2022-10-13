<?php
// Encabezado
$titulo = "Ejercicio 3 - TP 3";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../Util/funciones.php";
include_once "../../Control/TP3/C_TP3_EJ3.php";

$objControl = new C_TP3_EJ3();
$arrayEntrada = data_submitted();
$resultado = $objControl->visualizarResultado($arrayEntrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center">
    <?php
    switch ($resultado["error"]) {
        case 1:
            echo mostrarError("
                Ocurrió un error al copiar el archivo.<br>
                <a href='TP3_EJ3.php'>Haga clic acá para volver</a>
            ");
            break;
        case 2:
            echo mostrarError("
                El tipo de archivo no es el correcto. Debe ser .jpg o .png<br>
                <a href='TP3_EJ3.php'>Haga clic acá para volver</a>
            ");
            break;
        case 3:
            echo mostrarError("
                Ocurrió un error al subir el archivo.<br>
                <a href='TP3_EJ3.php'>Haga clic acá para volver</a>
            ");
            break;
        case 4:
            echo mostrarError("
                Los datos están incompletos. Por favor, inténtelo otra vez.<br>
                <a href='TP3_EJ3.php'>Haga clic acá para volver</a>
            ");
            break;
        case 5:
            echo mostrarError("
                Los datos son inválidos. Por favor, inténtelo otra vez.<br>
                <a href='TP3_EJ3.php'>Haga clic acá para volver</a>
            ");
            break;
        default:
            // Todo salió bien
            $poster = '<img class="img-fluid" src="../../Control/Archivos/'.$_FILES['poster']['name'].'"></img>';

            echo '<div class="col-12 col-md-7 alert alert-success m-3 p-3 mx-auto">';
            echo '<h1 class="my-4">La película introducida es </h1><div class="row">';
            echo '<div class="col-12 col-xxl-4 d-flex align-items-center justify-content-center">' . $poster . '</div>';
            echo '<div class="col-12 col-xxl-8 d-flex align-items-center justify-content-start"><p><strong>Titulo: </strong>' . $_POST["titulo"] . "<br>";
            echo "<strong>Actores: </strong>" . $_POST["actores"] . "<br>";
            echo "<strong>Director: </strong>" . $_POST["director"] . "<br>";
            echo "<strong>Guión: </strong>" . $_POST["guion"] . "<br>";
            echo "<strong>Producción: </strong>" . $_POST["produccion"] . "<br>";
            echo "<strong>Año: </strong>" . $_POST["anio"] . "<br>";
            echo "<strong>Nacionalidad: </strong>" . $_POST["nacionalidad"] . "<br>";
            echo "<strong>Género: </strong>" . $_POST["genero"] . "<br>";
            echo "<strong>Duración: </strong>" . $_POST["duracion"] . "<br>";
            echo "<strong>Restricción de Edad: </strong>" . $_POST["edad-recomendada"] . "
            <br><a href='TP3_EJ3.php'>Haga clic acá para volver</a></p></div></div></div>";
            break;
    }
    ?>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>