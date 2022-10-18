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

// Datos
$param = data_submitted();
$entrada = "";

if(isset($param["codigoBarras"]) && $param["codigoBarras"]<>null){
    $entrada = $param["codigoBarras"];
}

?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="row d-flex align-items-center justify-content-center col-12 my-5">
        <div class="col-3 text-center">
                <h4>Código de barras - 128</h4>
                <img src="codBarras128.php?codigoBarras=<?php echo $entrada ?>" alt="" class="img-fluid">
        </div>
        <div class="col-3 text-center">
                <h4>Código de barras - EAN-13</h4>
                <img src="codBarrasEAN13.php?codigoBarras=<?php echo $entrada ?>" alt="" class="img-fluid">
        </div>
        <div class="col-3 text-center">
                <h4>Código de barras - 128</h4>
                <img src="codBarras128.php?codigoBarras=<?php echo $entrada ?>" alt="" class="img-fluid">
        </div>
    </div>
    <a href="../producto/listarProducto.php" class="btn btn-primary text-start"><< Volver</a>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>