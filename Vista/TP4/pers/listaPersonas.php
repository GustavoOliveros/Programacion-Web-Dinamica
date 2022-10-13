<?php
// Encabezado
$titulo = "Listar Personas - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

// Funciones especificas del tp4
include_once "../../Util/funciones_tp4.php";

// Contacto con control
$objControl = new C_Persona();
$resultado = $objControl->listar();
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Personas</h1>
        <?php
        if($resultado["error"] == ""){
            echo mostrarPersonas($resultado["result"], true);
        }else{
            echo mostrarError("No hay personas registradas.");
        }

        ?>
        <a class="btn btn-primary" href="index.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>