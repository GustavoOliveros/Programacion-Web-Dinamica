<?php
// Encabezado
$titulo = "Buscar Autos - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../configuracion.php";

$objControl = new C_TP4();
$entrada = data_submitted();
$resultado = $objControl->buscar($entrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
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
            echo mostrarError("
                No se encontró el vehículo solicitado.<br>
                <a href='BuscarAuto.php'>Haga clic acá para volver</a>
            ");
            break;
        default:
            // Todo salió bien
            echo '
                <table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Nombre del Dueñ@</th>
                        <th scope="col">Apellido del Dueñ@</th>
                    </tr>
                </thead>
                <tbody> '.
                '<tr>' .
                '<td>' . $resultado["result"]->getPatente() . '</td>' .
                '<td>' . $resultado["result"]->getModelo() . '</td>' .
                '<td>' . $resultado["result"]->getMarca() . '</td>' .
                '<td>' . $resultado["result"]->getObjPersonaDuenio()->getNombre() . '</td>' .
                '<td>' . $resultado["result"]->getObjPersonaDuenio()->getApellido() . '</td></tr>
                </tbody></table>
                <a href="BuscarAuto.php">Haga clic acá para volver</a>
            ';
            break;
    }
    ?>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>