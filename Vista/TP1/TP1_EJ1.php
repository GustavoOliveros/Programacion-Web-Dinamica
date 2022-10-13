<?php
// Encabezado
$titulo = "Ejercicio 1 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Ver número</h1>
    <form action="TP1_EJ1_Resultado.php" method="get" name="form" id="form">
        <input type="number" class="bloque" name="numero-form" id="numero-form">
        <input type="submit" class="margen-10 bloque">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>