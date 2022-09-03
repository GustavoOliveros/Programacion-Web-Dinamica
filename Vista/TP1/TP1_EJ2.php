<?php
// Encabezado
$titulo = "Ejercicio 2 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Horas de cursada: PWD</h1>
    <form action="TP1_EJ2_Respuesta.php" method="get" name="form" class="formulario">
        Lunes <input type="number" name="horas-lunes" id="horas-lunes" value="0" min="0" step="0.5">
        Martes <input type="number" name="horas-martes" id="horas-martes" value="0" min="0" step="0.5">
        Miercoles <input type="number" name="horas-miercoles" id="horas-miercoles" value="0" min="0" step="0.5">
        Jueves <input type="number" name="horas-jueves" id="horas-jueves" value="0" min="0" step="0.5">
        Viernes <input type="number" name="horas-viernes" id="horas-viernes" value="0" min="0" step="0.5">
        <input type="submit">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>