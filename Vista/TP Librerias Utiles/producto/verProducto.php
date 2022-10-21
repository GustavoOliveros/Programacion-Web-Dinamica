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
if (isset($param["codigoBarras"]) && $param["codigoBarras"] != null) {
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
        <div class="row col-12 d-flex align-items-center justify-content-center">
            <div class="col-12 d-flex align-items-center justify-content-center flex-column p-4">
                <h2 id="nombre">'. $resultado[0]->getNombre() .'</h2>
                <h3 class="fw-light">Existencia: <span class="fw-semibold">'.$resultado[0]->getExistencia().'</span></h3>
                <h3 class="fw-light">Código: <span class="fw-semibold" id="codigo">'.$resultado[0]->getCodigoBarras().'</span></h3>
            </div>
            <hr>
            <div class="form-check mb-3 d-flex align-items-center justify-content-center">
                <input type="checkbox" name="boton-label" id="boton-label" class="form-check-input">
                <label for="boton-label" class="form-check-label">¿Desea agregar una etiqueta con el nombre del producto al código?</label>
            </div>
            <hr>
        </div>
        <div class="row col-12 d-flex align-items-center justify-content-center">
            <div class="col-12 d-flex align-items-center justify-content-center flex-column rounded">
                <h4 class="mb-4">Seleccione el tipo de código de barras</h4>
                <div class="row col-12 mb-4">
                    <div class="card-group">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/C128.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código 128</h5>
                                <p class="card-text">Soporta todos los caracteres excepto "&".</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=C128-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/CO93.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código 93</h5>
                                <p class="card-text">Soporta números, letras, - . $ / + % [SPACE] + ASCII 0-127</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=CO93-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/CO39.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código 39</h5>
                                <p class="card-text">Soporta números, letras, - . $ / + % [SPACE].</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=CO39-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mb-4">
                    <div class="card-group">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/CO11.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código 11</h5>
                                <p class="card-text">Soporta números y -</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=CO11-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/CBAR.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código CODABAR</h5>
                                <p class="card-text">Soporta números, A B C D - $ : / . +.<br>Debe comenzar y terminar con una letra.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=CBAR-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/EA08.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código EAN-8</h5>
                                <p class="card-text">Soporta solo números.<br>Requiere 7 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=EA08-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mb-4">
                    <div class="card-group">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/EA13.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código EAN-13</h5>
                                <p class="card-text">Soporta solo números<br>Requiere de 12 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=EA13-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/ISBN10.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código ISBN-10</h5>
                                <p class="card-text">Soporta solo números.<br>Requiere 9 o 10 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=ISBN-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/ISBN13.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código ISBN-13</h5>
                                <p class="card-text">Soporta solo números.<br>Requiere 12 o 13 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=ISBN-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mb-4">
                    <div class="card-group">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/UPCA.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código UPC-A</h5>
                                <p class="card-text">Soporta solo números.<br>Requiere 11 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=UPCA-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/UPCE.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código UPC-E</h5>
                                <p class="card-text">Soporta solo números<br>Requiere de 6 caracteres.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=UPCE-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../../img/CMSI.png" class="card-img-top p-3" alt="Código de barras de ejemplo">
                            <div class="card-body">
                                <h5 class="card-title">Código MSI PLESSEY</h5>
                                <p class="card-text">Soporta solo números.</p>
                                <a href="../codBarras/codBarras.php?codigoBarras=CMSI-'. $resultado[0]->getCodigoBarras() .'" class="btn btn-primary">Generar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo mostrarError("No se encontró el producto.");
        }

        ?>
        <!-- INTERFAZ -->
        
        </div>






        <a class="btn btn-primary my-3" href="listarProducto.php">
            << Volver</a>
    </div>
</main>
<script src="../../js/verproducto.js"></script>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>