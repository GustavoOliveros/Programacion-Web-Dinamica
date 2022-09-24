<?php
// Encabezado
$titulo = "Buscar Autos - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../configuracion.php";

// Funciones tp4
include_once "../../Util/funciones_tp4.php";

// Contacto con control
$objControl = new C_Auto();
$entrada = data_submitted();
$resultado = $objControl->buscar($entrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        switch ($resultado["error"]) {
            case 4:
                echo mostrarError("
                Los datos están incompletos. Por favor, inténtelo otra vez.<br>
                <a href='BuscarAuto.php'>Haga clic acá para volver</a>
                ");
                break;
            case 5:
                echo mostrarError("
                Los datos son inválidos. Por favor, inténtelo otra vez.<br>
                <a href='BuscarAuto.php'>Haga clic acá para volver</a>
                ");
                break;
            case 404:
                $entrada["patente"] = str_replace(" ","+",$entrada["patente"]);
                echo mostrarError('El auto no se encontró.<br>
                <a href="NuevoAuto.php?patente='. $entrada["patente"] . '">Haga clic acá para añadirlo</a>');
                break;
            default:
                // Todo salió bien
                echo mostrarAutos(array($resultado["result"]), true);
                echo '<a href="index.php">Haga clic acá para volver</a>';
                break;
        }
        ?>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>