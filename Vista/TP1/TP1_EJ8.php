<?php
// Encabezado
$titulo = "Ejercicio 8 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Cine Cinem@s</h1>
    <h2>Calcule el precio de su entrada</h2>
    <form action="TP1_EJ8_Respuesta.php" method="get" name="form" id="form">
        <p>Ingrese su edad</p>
        <input type="number" min="0" max="150" name="edad" id="edad" required><br>
        <input type="checkbox" name="esEstudiante" id="esEstudiante">¿Es estudiante?<br><br>
        <input type="submit">
        <input type="reset">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>