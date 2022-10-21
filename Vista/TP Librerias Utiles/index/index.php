<?php
// Encabezado
$titulo = "TP - Librerías Útiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6 mb-5">
        <h1 class="text-center my-3">Código de Barras<br>- TP Librerías Útiles</h1>
        <div class="col-12 mb-3 d-flex align-items-center justify-content-center">
            <img src="../../img/codBarras.jpg" alt="Auto" class="rounded img-fluid shadow text-center mb-3">
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-primary col-5" href="../producto/listarProducto.php">Listar</a>
            <a class="btn btn-primary col-5" href="../producto/buscarProducto.php">Buscar</a>
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-success col-5" href="https://github.com/GustavoOliveros/Programacion-Web-Dinamica/blob/master/Vista/TP%20Librerias%20Utiles/readme.md" target="_blank">Tutorial</a>
            <a class="btn btn-success col-5" href="../../../Util/phpbarcode/barcodegen.1d-php.v7.0.4/example/index.php" target="_blank">Demo</a>
        </div>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>