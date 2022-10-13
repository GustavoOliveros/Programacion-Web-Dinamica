<?php
// Encabezado
$titulo = "Ejercicio 1 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Interaccion con control
include_once "../../Util/funciones.php";
include_once "../../Control/TP1/TP1_EJ1.php";

$objControl = new TP1_EJ1();
$entrada = data_submitted();
$resultado = $objControl->visualizarResultado($entrada);
?>

<!-- Visualizacion en html -->
<div class="contenedor">
    <h2>
        <?php
        echo $resultado;
        ?>
    </h2>
    <a href="TP1_EJ1.php">Haga click acá para volver</a>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>