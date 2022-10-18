<?php
// Encabezado
$titulo = "TP Librerias Utiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Control
include_once "../../../configuracion.php";

// Funciones
include_once "../../../Util/funciones_tp_lu.php";

// Contacto con control
$resp = false;
$entrada = data_submitted();
$objProducto = new AbmProductos();
$respuesta = $objProducto->alta($entrada);
?>

<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
            if($respuesta['resultado']){
                echo mostrarExito("Se ingresó con éxito.");
                echo mostrarProductos(array($respuesta["obj"]));
                echo '<a href="../index/index.php" class="btn btn-primary text-start"><< Volver</a>';
            } else {
                echo mostrarError("Verificar los datos, no se pudo ingresar el articulo ".$respuesta['error']
            . '.<br><a href="../index/index.php">Volver a intentar</a>');
            }
           
        ?>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>