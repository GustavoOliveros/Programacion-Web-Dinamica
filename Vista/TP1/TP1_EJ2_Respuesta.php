<?php
// Encabezado
$titulo = "Ejercicio 2 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Interaccion con control
include_once "../../Control/Mis_Controladores.php";
include_once "../../Control/TP1/TP1_EJ2.php";

$objControl = new TP1_EJ2();
$entrada = obtenerDatos();
$resultado = $objControl->visualizarResultado($entrada);
?>

<!-- Visualizacion en html -->
<div class="contenedor">
    <h2>
        <?php
        if($resultado == -1){
            echo "Los datos son inválidos.";
        }else{
            echo "Sus horas de cursada son " . $resultado;
        }
        ?>
    </h2>
    <a href="TP1_EJ2.php">Haga click acá para volver</a>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>