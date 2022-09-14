<?php
// Encabezado
$titulo = "Ejercicio 6 - TP 1";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="contenedor">
    <h1>Datos</h1>
    <form action="TP1_EJ6_Resultado.php" method="get" name="form">
        Nombre: <input type="text" class="bloque" name="nombre-form" id="apellido-form" required>
        Apellido: <input type="text" class="bloque" name="apellido-form" id="apellido-form" required>
        Edad: <input type="number" class="bloque" min="0" max="150" name="edad-form" id="edad-form" required>
        Dirección: <input type="text" class="bloque" name="direccion-form" id="direccion-form" required>
        
        Estudios<br>
        <input type="radio" class="check-inline" name="estudios" id="estudios-1" value="sin-estudios" required>Sin estudios<br>
        <input type="radio" class="check-inline" name="estudios" id="estudios-2" value="estudios-primarios" required>Primarios<br>
        <input type="radio" class="check-inline" name="estudios" id="estudios-3" value="estudios-secundarios" required>Secundarios

        <br>Sexo<br>
        <input type="radio" class="check-inline" name="sexo" id="sexo-1" value="masculino" required>Masculino<br>
        <input type="radio" class="check-inline" name="sexo" id="sexo-2" value="femenino" required>Femenino<br>
        <input type="radio" class="check-inline" name="sexo" id="sexo-3" value="otro" required>Otro<br>

        Deportes que practica<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-1" value="Futbol">Futbol<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-2" value="Basket">Basket<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-3" value="Voley">Voley<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-4" value="Hockey">Hockey<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-5" value="Golf">Golf<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-6" value="Natación">Natación<br>
        <input type="checkbox" class="check-inline" name="deportes[]" id="deportes-7" value="Atletismo">Atletismo

        <input type="submit" class="bloque">
    </form>
</div>

<?php
// Footer
include_once "../Estructura/footer.php";
?>