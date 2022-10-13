<?php
// Encabezado
$titulo = "Ejercicio 4 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Datos</h1>
    <form action="TP1_EJ4_Respuesta.php" method="get" name="form">
        Nombre: <input type="text" class="bloque" name="nombre-form" id="nombre-form" required>
        Apellido: <input type="text" class="bloque" name="apellido-form" id="apellido-form" required>
        Edad: <input type="number" class="bloque" min="0" max="150" name="edad-form" id="edad-form" required>
        Dirección: <input type="text" class="bloque" name="direccion-form" id="direccion-form" required>
        <input type="submit" class="bloque">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>