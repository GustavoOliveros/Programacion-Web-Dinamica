<?php
// Ejercicio 6 –

// Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
// numero de patente de un auto y un numero de documento de una persona - LISTO

// estos datos deberán ser enviados a una página “accionCambioDuenio.php” 
// en donde se realice cambio del dueño del auto de la patente ingresada en el formulario.

// Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
// cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
// antes generada, no se puede acceder directamente a las clases del ORM.

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
                    <div class="invalid-feedback">Ingrese DNI válido.</div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <input type="text" maxlength="10" placeholder="Patente del auto" class="form-control" id="patente" name="patente" required />
                    <div class="invalid-feedback">Obligatorio.</div>
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