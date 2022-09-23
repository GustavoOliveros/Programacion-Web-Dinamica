<?php
// Encabezado
$titulo = "Persona - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../configuracion.php";

// Funciones tp4
include_once "../../Util/funciones_tp4.php";

$objControlPersona = new C_Persona();
$objControlAuto = new C_Auto();
$entrada = data_submitted();

// Recuperamos datos de la persona
$resultadoPersona = $objControlPersona->buscar($entrada);

// Obtenemos su vehiculos
if(is_null($resultadoPersona["error"])){
    $resultadoAutos = $objControlAuto->buscarPorDuenio($resultadoPersona["result"]);
    $resultado = $resultadoAutos;
}else{
    $resultado["error"] = $resultadoPersona["error"];
}

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        switch ($resultado["error"]) {
            case 4:
                echo mostrarError("
                Los datos están incompletos. Por favor, inténtelo otra vez.<br>
                <a href='listaPersonas.php'>Haga clic acá para volver</a>
            ");
                break;
            case 5:
                echo mostrarError("
                Los datos son inválidos. Por favor, inténtelo otra vez.<br>
                <a href='listaPersonas.php'>Haga clic acá para volver</a>
                ");
                break;
            case 6:
                echo mostrarError("
                La persona no tiene cargada ningún auto.
                ");
                echo mostrarPersonas(array($resultadoPersona["result"]),false);
                echo '<a class="btn btn-primary" href="listaPersonas.php"><< Volver</a>';
                break;
            case 404:
                echo mostrarError("
                No se encontró la persona solicitada.<br>
                <a href='listaPersonas.php'>Haga clic acá para volver</a>
            ");
                break;
            default:
                // Todo salió bien
                echo mostrarPersonas(array($resultadoPersona["result"]),false);
                echo mostrarAutos($resultado["result"]);
                echo '<a class="btn btn-primary" href="listaPersonas.php"><< Volver</a>';
                break;
        }
        ?>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>