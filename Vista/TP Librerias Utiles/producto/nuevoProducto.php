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
        <form action="../accion/accionNuevoProducto.php" method="post" class="needs-validation" id="form" name="form" novalidate>
            <h1 class="text-center">Añadir Producto</h1>
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="existencia" class="form-label">Existencia</label>
                    <input type="number" class="form-control" id="existencia" name="existencia" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="tipoCodigoBarras" class="form-label">Tipo de Código de Barra</label>
                    <select name="tipoCodigoBarras" class="form-select" id="tipoCodigoBarras" required>
                        <option value="" default>Seleccione uno</option>
                        <option value="128">Código 128</option>
                        <option value="128">Código 128</option>
                        <option value="128">Código 128</option>
                        <option value="128">Código 128</option>
                        <option value="128">Código 128</option>
                        <option value="128">Código 128</option>
                    </select>
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto position-relative">
                    <label for="codigoBarras" class="form-label">N° de Código de Barra</label>
                    <input type="number" class="form-control" id="codigoBarras" name="codigoBarras" required />
                    <div class="invalid-feedback">
                        Dato inválido.
                    </div>
                </div>
                <div class="col-12">

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

<?php
// Footer
include_once "../../Estructura/footer.php";
?>