<?php

// Encabezado
$titulo = "Cambio de Dueño - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

?>

<!-- Formulario -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <form action="accionCambioDuenio.php" method="get" class="needs-validation" id="form" name="form" novalidate>
            <div class="row">
                <h1 class="text-center">Cambio de dueño</h1>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <input type="number" placeholder="Número de DNI" min="0" max="999999999" class="form-control" id="numDNI" name="numDNI" required />
                    <div class="invalid-feedback">Número de DNI inválido<br>Debe contener solo números (9 caracteres max.)</div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <input type="text" maxlength="10" placeholder="Patente del auto" class="form-control" id="patente" name="patente" pattern="^[a-zA-Z]{3}\s[0-9]{3}?$" required />
                    <div class="invalid-feedback">Patente inválida.<br>(Formato: ABC 123)</div>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <a class="btn btn-primary mt-3 mx-1" href="index.php"><< Volver</a>
                    <input type="submit" class="btn btn-primary mt-3 mx-1" />

                </div>
            </div>
        </form>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>