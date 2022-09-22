<?php
// Encabezado
$titulo = "Ejercicio 3 - TP 3";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../Control/TP3/C_TP3_EJ3.php";

$objControl = new C_TP3_EJ3();
$arrayEntrada = data_submitted();
$resultado = $objControl->visualizarResultado($arrayEntrada);
print_r($resultado);

?>

<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center">




</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>