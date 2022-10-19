<?php
// Encabezado
$titulo = "Ver Producto - TP Librerias Utiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

// Funciones tp4
include_once "../../../Util/funciones_tp_lu.php";

// Datos
$param = data_submitted();

// Contacto con control
$objControl = new AbmProductos();

$resultado = array();
if(isset($param["codigoBarras"]) && $param["codigoBarras"]!=null){
    $resultado = $objControl->buscar($param);
}
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        if(count($resultado)>0){
            echo '
            <h1 class="text-center">INFORMACIÓN DEL PRODUCTO</h1>
            <div class="row col-12 border rounded shadow mx-auto my-3">
            <div class="col-6 d-flex align-items-center justify-content-center flex-column bg-secondary rounded">
                <h2 class="text-light"><strong>'. $resultado[0]->getNombre() .'</strong></h2>
                <h3 class="text-light fw-light">Existencia: <span class="fw-semibold">'. $resultado[0]->getExistencia() .'</span></h3>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center flex-column rounded">
                <img src="../codBarras/codBarras.php?codigoBarras='. $resultado[0]->getCodigoBarras() .'" alt="Codigo de barras" class="img-fluid my-3">
                <p class="text-center">Código de barras: '. substr($resultado[0]->getCodigoBarras(),5) .'<br>Tipo: '. substr($resultado[0]->getCodigoBarras(),0,4) .'</p>
            </div>
            </div>';
        }else{
            echo mostrarError("No se encontró el producto.");
        }

        ?>
        <a class="btn btn-primary my-3" href="listarProducto.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>