<?php
// Ejercicio 5 – Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
// todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
// “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
// antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
// link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
// no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
// control antes generada, no se puede acceder directamente a las clases del ORM.
?>

<?php
// Encabezado
$titulo = "Nuevo Auto - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

$entrada = data_submitted();

?>

<!-- Formulario -->
<main class="container-fluid d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <form action="accionNuevoAuto.php" method="post" class="needs-validation" id="form" name="form" novalidate>
            <h1 class="text-center">Añadir Auto</h1>
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="patente" class="form-label">Patente</label>
                    <input type="text" maxlength="10" class="form-control" id="patente" name="patente" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="modelo" class="form-label">Modelo (año)</label>
                    <input type="number" min="0" max="9999" class="form-control" id="modelo" name="modelo" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" maxlength="50" class="form-control" id="marca" name="marca" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="fechaNac" class="form-label">Número de DNI del Dueño</label>
                    <input type="number" min="0" max="999999999" class="form-control" id="numDNI" name="numDNI" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 d-flex justify-content-center">
                <a class="btn btn-primary mt-3 mx-1" href="index.php">
                    << Volver</a>
                        <input type="submit" class="btn btn-primary mt-3 mx-1" />

            </div>
        </form>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>