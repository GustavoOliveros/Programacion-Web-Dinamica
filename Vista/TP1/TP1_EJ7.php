<?php
// Encabezado
$titulo = "Ejercicio 7 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Calculadora</h1>
    <form action="TP1_EJ7_Resultado.php" method="get" name="form">
        <input type="number" class="margin-reducido" name="form-numero-uno" id="form-numero-uno" required><br>
        <input type="number" class="margin-reducido" name="form-numero-dos" id="form-numero-dos" required><br>
        <select name="operador" class="margin-reducido" id="operador">
            <option default>SUMA</option>
            <option>RESTA</option>
            <option>MULTIPLICACION</option>
            <option>DIVISION</option>
        </select>
        <input type="submit" class="enviar-inline margin-reducido">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>