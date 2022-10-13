<?php
// Encabezado
$titulo = "TP Librerias Utiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Control
include_once "../../../configuracion.php";

// Funciones tp4
include_once "../../../Util/funciones.php";

// Contacto con control
$resp = false;
$entrada = data_submitted();

$objProducto = new AbmProductos();
$nomProd['nombre'] = $entrada['nombre'];
$producto = $objProducto->buscar($nomProd);

if($producto){
    echo "ando";
} else {
    
    if($objProducto->alta($entrada)){
        print_r($objProducto);
    }
}
?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
            if($resp){
                echo "NO revisar base de dato";
            } else {
                echo "revisar base de dato";
            }
           
        ?>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>