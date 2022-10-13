<?php
// Encabezado
$titulo = "Ver Autos - TP 4";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

// Funciones tp4
include_once "../../../Util/funciones_tp4.php";


// Contacto con control
$objControl = new C_Auto();
$resultado = $objControl->listar();
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Autos</h1>
        <?php
        if($resultado["error"] == ""){
            echo mostrarAutos($resultado["result"], true);
        }else{
            echo mostrarError("No hay autos registrados.");
        }

        ?>
        <a class="btn btn-primary" href="../ind/index.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>