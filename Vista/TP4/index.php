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
    <div class="col-12 col-md-6">
        <h1 class="text-center">Autos</h1>
        <div class="col-12 text-center mb-3">
            <a class="btn btn-primary col-3" href="VerAutos.php">Listar Autos</a>
            <a class="btn btn-primary col-3" href="NuevoAuto.php">Añadir Auto</a>
            <a class="btn btn-primary col-3" href="BuscarAuto.php">Buscar Auto</a>
        </div>
        <div class="col-12 text-center">
            <a class="btn btn-primary col-3" href="listaPersonas.php">Listar Personas</a>
            <a class="btn btn-primary col-3" href="NuevaPersona.php">Añadir Personas</a>
            <a class="btn btn-primary col-3" href="BuscarPersona.php">Buscar Persona</a>
        </div>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>