<?php
// Encabezado
$titulo = "TP 5";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

?>

<!-- Contenido -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6 mb-5">
        <h1 class="text-center my-3">Login - TP 5</h1>
        <div class="col-12 mb-3">
            <img src="../../img/login.png" alt="Auto" class="rounded img-fluid">
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-primary col-3" href="../login/login.php">Iniciar Sesión</a>
        </div>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>