<?php
// Encabezado
$titulo = "Ejercicio 5 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Datos</h1>
    <form action="TP1_EJ5_Respuesta.php" method="get" name="form" id="form">
        Nombre: <input type="text" name="nombre-form" id="apellido-form" required>
        Apellido: <input type="text" name="apellido-form" id="apellido-form" required>
        Edad: <input type="number" min="0" max="150" name="edad-form" id="edad-form" required>
        Dirección: <input type="text" name="direccion-form" id="direccion-form" required>
        Estudios<br>
        <input type="radio" name="estudios" id="estudios-1" value="sin-estudios" required>Sin estudios<br>
        <input type="radio" name="estudios" id="estudios-2" value="estudios-primarios" required>Primarios<br>
        <input type="radio" name="estudios" id="estudios-3" value="estudios-secundarios" required>Secundarios
        <br>Sexo<br>
        <input type="radio" name="sexo" id="sexo-1" value="masculino" required>Masculino<br>
        <input type="radio" name="sexo" id="sexo-2" value="femenino" required>Femenino<br>
        <input type="radio" name="sexo" id="sexo-3" value="otro" required>Otro

        <input type="submit">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>