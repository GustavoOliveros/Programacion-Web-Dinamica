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
print_r($entrada);
$objProducto = new AbmProductos();
//$nomProd['nombre'] = $entrada['nombre'];
$nomProd =  array('nombre' => $entrada['nombre']);
$producto = $objProducto->buscar($nomProd);

if($producto){
    echo "ando";
} else {
   // echo "vamos a darlo de alta <br>";
    $respuesta = $objProducto->alta($entrada);
   // echo "la respuesta del alta".$respuesta." <br>";
  //echo $respuesta. "respuesta";
    if($respuesta['resultado']){
       // print_r($objProducto);

    }
}
?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
            if($respuesta['resultado']){
                echo "NO revisar base de dato";
            } else {
                echo "Verificar los datos, no se pudo ingresar el articulo ".$respuesta['error'];
            }
           
        ?>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>