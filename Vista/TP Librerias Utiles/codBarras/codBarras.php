<?php
// Configuración
include_once "../../../configuracion.php";

// Datos
$param = data_submitted();

// Clases comunes
use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGDrawing;
use BarcodeBakery\Common\BCGFontFile;

// Codigos de barras
use BarcodeBakery\Barcode\BCGcode128;
use BarcodeBakery\Barcode\BCGean13;
use BarcodeBakery\Barcode\BCGcodabar;
use BarcodeBakery\Barcode\BCGcode11;
use BarcodeBakery\Barcode\BCGcode39;
use BarcodeBakery\Barcode\BCGcode93;
use BarcodeBakery\Barcode\BCGean8;
use BarcodeBakery\Barcode\BCGisbn;
use BarcodeBakery\Barcode\BCGupca;
use BarcodeBakery\Barcode\BCGupce;
use BarcodeBakery\Barcode\BCGmsi;

// Excepcioness
use BarcodeBakery\Common\BCGParseException;

// Autoload
require '../../../Util/phpbarcode/barcodegen.1d-php.v7.0.4/example/vendor/autoload.php';

// Colores
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

// Tipo de codigo de barras
// En el dominio está representado por los primeros cuatro caracteres antes del guión
switch(substr($param["codigoBarras"],0,4)){
    case "EA13":
        $code = new BCGean13();
        break;
    case "EA08":
        $code = new BCGean8();
        break;
    case "C128":
        $code = new BCGcode128();
        break;
    case "CBAR":
        $code = new BCGcodabar();
        break;
    case "CO11":
        $code = new BCGcode11();
        break;
    case "CO39":
        $code = new BCGcode39();
        break;
    case "CO93":
        $code = new BCGcode93();
        break;
    case "ISBN":
        $code = new BCGisbn();
        break;
    case "UPCA":
        $code = new BCGupca();
        break;
    case "UPCE":
        $code = new BCGupce();
        break;
    case "CMSI":
        $code = new BCGmsi();
        break;
    default:
        $code = new BCGcode128();
        break;
}
$font = new BCGFontFile('../../../Util/phpbarcode/barcodegen.1d-php.v7.0.4/example/font/Arial.ttf', 18); // Fuente
$code->setScale(2); // Resolución
$code->setThickness(30); // Grosor
$code->setForegroundColor($colorBlack); // Color de las barras
$code->setBackgroundColor($colorWhite); // Color de los espacios
$code->setFont($font); // Fuente (o 0)

try{
    $code->parse(substr($param["codigoBarras"],5)); // Texto a convertir - En este caso, caracteres despues del guion
  
    $drawing = new BCGDrawing($code, $colorWhite); // Codigo y color de fondo = Codigo de Barras

    header('Content-Type: image/png'); // Header de tipo imagen

    $drawing->finish(BCGDrawing::IMG_FORMAT_PNG); // Fin de la creación de la imagen
}catch(BCGParseException $ex){
    $titulo = "TP - Librerías Útiles";
    include_once "../../Estructura/encabezado.php";
    
    // Navbar
    include_once "../../Estructura/navbar.php";
    
    // Configuración
    include_once "../../../configuracion.php";

    echo mostrarError('ERROR: El código del producto no puede ser convertido a este tipo de código de barra.<br><strong>Motivo:</strong>
    <div class="alert alert-secondary">'. $ex->getMessage() .'</div>
    
    
    <br>
    <a href="../producto/verProducto.php?codigoBarras='. substr($param["codigoBarras"],5) .'"><< Seleccionar otro</a>');

    include_once "../../Estructura/footer.php";
}

?>