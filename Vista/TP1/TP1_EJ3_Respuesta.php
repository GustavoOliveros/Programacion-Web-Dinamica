<?php
// Encabezado
$titulo = "Ejercicio 3 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Interaccion con control
include_once "../../Control/Mis_Controladores.php";
include_once "../../Control/TP1/TP1_EJ3.php";

$objControl = new TP1_EJ3();
$entrada = obtenerDatos();
$resultado = $objControl->visualizarResultado($entrada);
?>

<!-- Visualizacion en html -->
<div class="contenedor">
    <h2>
        <?php
        echo $resultado;
        ?>
    </h2>
    <a href="TP1_EJ3.php">Haga click acá para volver</a>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>