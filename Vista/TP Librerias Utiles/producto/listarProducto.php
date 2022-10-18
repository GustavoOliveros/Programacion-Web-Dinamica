<?php
// Encabezado
$titulo = "Listar - TP Librerias Utiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

// Funciones tp4
include_once "../../../Util/funciones_tp_lu.php";

// Contacto con control
$objControl = new AbmProductos();
$resultado = $objControl->buscar(null);
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Productos</h1>
        <?php
        if(count($resultado)>0){
            echo mostrarProductos($resultado);
        }else{
            echo mostrarError("No hay productos registrados.");
        }

        ?>
        <a class="btn btn-primary" href="../index/index.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>