<?php
// Encabezado
$titulo = "TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6 mb-5">
        <h1 class="text-center my-3">Autos - TP 4</h1>
        <div class="col-12 mb-3">
            <img src="../img/auto.jpg" alt="Auto" class="rounded img-fluid">
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-primary col-3" href="VerAutos.php">Listar Autos</a>
            <a class="btn btn-primary col-3" href="NuevoAuto.php">Añadir Auto</a>
            <a class="btn btn-primary col-3" href="BuscarAuto.php">Buscar Auto</a>
        </div>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-primary col-3" href="listaPersonas.php">Listar Personas</a>
            <a class="btn btn-primary col-3" href="NuevaPersona.php">Añadir Persona</a>
            <a class="btn btn-primary col-3" href="BuscarPersona.php">Buscar Persona</a>
        </div>
        <div class="col-12 text-center">
            <a class="btn btn-primary col-3" href="CambioDuenio.php">Cambiar dueño</a>
        </div>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>