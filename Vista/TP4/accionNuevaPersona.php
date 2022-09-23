<?php
// Encabezado
$titulo = "Añadir Persona - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../configuracion.php";

// Funciones tp4
include_once "../../Util/funciones_tp4.php";

// Contacto con control
$objControl = new C_Persona();
$entrada = data_submitted();
$resultado = $objControl->alta($entrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        switch ($resultado["error"]) {
            case 4:
                echo mostrarError("
                Los datos están incompletos. Por favor, inténtelo otra vez.<br>
                <a href='NuevaPersona.php'>Haga clic acá para volver</a>
                ");
                break;
            case 5:
                echo mostrarError("
                Los datos son inválidos. Por favor, inténtelo otra vez.<br>
                <a href='NuevaPersona.php'>Haga clic acá para volver</a>
                ");
                break;
            case 7:
                echo mostrarError("
                Ocurrio un error al añadir a la persona. Por favor, inténtelo de nuevo<br>
                <a href='NuevaPersona.php'>Haga clic acá para volver</a>
                ");
                break;
            default:
                // Todo salió bien
                echo mostrarExito("
                La persona se agregó con éxito.
                ");
                echo mostrarPersonas(array($resultado["result"]), false);
                echo '<a href="NuevaPersona.php">Haga clic acá para volver</a>';
                break;
        }
        ?>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>