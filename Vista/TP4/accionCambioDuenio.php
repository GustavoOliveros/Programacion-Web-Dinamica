<?php
// Encabezado
$titulo = "Cambio de Dueño - TP 4";
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
$resultado = $objControl->cambiarDuenio($entrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        switch ($resultado["error"]) {
            case 4:
                echo mostrarError("
                Los datos están incompletos. Por favor, inténtelo otra vez.<br>
                <a href='CambioDuenio.php'>Haga clic acá para volver</a>
                ");
                break;
            case 5:
                echo mostrarError("
                Los datos son inválidos. Por favor, inténtelo otra vez.<br>
                <a href='CambioDuenio.php'>Haga clic acá para volver</a>
                ");
                break;
            case 7:
                echo mostrarError("
                Ocurrio un error al hacer el cambio o el auto ya está registrado a nombre de esa persona.<br>
                <a href='CambioDuenio.php'>Haga clic acá para volver</a>
                ");
                break;
            case 9:
                echo mostrarError('El dueño ingresado no está registrado.<br>
                <a href="NuevaPersona.php?numDNI='. $entrada["numDNI"] . '">Haga clic acá para añadirlo</a>');
                break;
            case 10:
                $entrada["patente"] = str_replace(" ","+",$entrada["patente"]);
                echo mostrarError('El auto ingresado no está registrado.<br>
                <a href="NuevoAuto.php?patente='. $entrada["patente"] . '">Haga clic acá para añadirlo</a>');
                break;
            default:
                // Todo salió bien
                echo mostrarExito("
                El cambio se realizó con éxito.
                ");
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