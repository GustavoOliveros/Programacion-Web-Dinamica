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
            <a class="btn btn-primary col-5" href="../libreria/listar.php">Listar</a>
            <a class="btn btn-primary col-5" href="../libreria/index.php">Añadir</a>
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-success col-10" href="tutorial.php">Tutorial</a>
        </div>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>