<?php
// Configuración
include_once "../../../configuracion.php";

// Datos
$param = data_submitted();

// Clases comunes
use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGFontFile;
use BarcodeBakery\Common\BCGLabel;
use BarcodeBakery\Common\BCGDrawing;


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

// Autoload
require '../../../Util/phpbarcode/barcodegen.1d-php.v7.0.4/example/vendor/autoload.php';

// Colores
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

// Tipo de codigo de barras
// En el dominio está representado por los primeros cuatro caracteres antes del guión
if(!isset($param["codigoBarras"]) || $param["codigoBarras"] == ""){
    $param["codigoBarras"] = "C128-000000000";
    $param["nombre"] = "INVALIDO";
}

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
    $font = new BCGFontFile('../../../Util/phpbarcode/barcodegen.1d-php.v7.0.4/example/font/Arial.ttf', 54); // Fuente
if(isset($param["nombre"])){
    $label = new BCGLabel($param["nombre"],$font, BCGLabel::POSITION_TOP, BCGLabel::ALIGN_CENTER);
}

$drawException = null;
$barcode = null;
try {
    $code->setScale(6); // Resolución
    $code->setThickness(30); // Altura
    $code->setForegroundColor($colorBlack); // Color de las barras
    $code->setBackgroundColor($colorWhite); // Color de los espacios
    $code->setFont($font); // Fuentes (o 0)
    $code->parse(substr($param["codigoBarras"], 5)); // Texto
    if(isset($param["nombre"])){
        $code->addLabel($label); // Etiqueta
    }


    $barcode = $code;

    // Header
    header('Content-Type: image/png');
    header('Content-Disposition: inline; filename="barcode.png"');

    // Version 7
    $drawing = new BCGDrawing($barcode, $colorWhite);

    // Versión 6:
    // $drawing = new BCGDrawing('', $colorWhite);
    // $drawing->setBarcode($barcode);
    // $drawing->draw();

    // Renderiza el código de barra como png
    $drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
} catch (Exception $exception) {    
    // Encabezado
    $titulo = "TP - Librerías Útiles";
    include_once "../../Estructura/encabezado.php";

    // Navbar
    include_once "../../Estructura/navbar.php";

    // Configuración
    include_once "../../../configuracion.php";


    $enlace = '<a href="../producto/verProducto.php?codigoBarras='. substr($param["codigoBarras"],5) . '"><< Seleccionar otro tipo</a>';

    echo mostrarError('El código no pudo ser convertido a este tipo.<br><strong>Motivo:</strong>
    <div class="alert alert-secondary">'. $exception->getMessage() .'</div>'. $enlace
    );

    // Footer
    include_once "../../Estructura/footer.php";
}





?>