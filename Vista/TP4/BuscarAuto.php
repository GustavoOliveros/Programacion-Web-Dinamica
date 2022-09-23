<?php
// Encabezado
$titulo = "Buscar Autos - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

?>

<!-- Formulario -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <form action="accionBuscarAuto.php" method="get" class="needs-validation" id="form" name="form" novalidate>
            <div class="row">
                <h1 class="text-center">Búsqueda de Auto</h1>
                <div class="col-6 col-lg-3 mx-auto position-relative">
                    <input type="text" maxlength="8" placeholder="Patente" class="form-control" id="patente" name="patente" required />
                    <div class="invalid-feedback">Obligatorio.</div>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <a class="btn btn-primary mt-3 mx-1" href="index.php"><< Volver</a>
                    <input type="submit" class="btn btn-primary mt-3 mx-1" value="Buscar" />

                </div>
            </div>
        </form>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>