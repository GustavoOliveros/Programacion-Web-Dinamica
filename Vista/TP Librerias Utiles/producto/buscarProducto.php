<?php
// Encabezado
$titulo = "TP Librerias Utiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

$entrada = data_submitted();

?>

<!-- Formulario -->
<main class="container-fluid d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <form action="../producto/verProducto.php" method="get" class="needs-validation" id="form" name="form" novalidate>
            <h1 class="text-center">Buscar Producto</h1>
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="codigoBarras" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigoBarras" name="codigoBarras" required />
                    <div class="invalid-feedback">
                        Obligatorio.
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 d-flex justify-content-center">
                <a class="btn btn-primary mt-3 mx-1" href="../index/index.php">
                    << Volver</a>
                        <input type="submit" class="btn btn-primary mt-3 mx-1" />

            </div>
        </form>
    </div>
</main>
<script src="../../js/codigoBarra.js"></script>
<?php
// Footer
include_once "../../Estructura/footer.php";
?>