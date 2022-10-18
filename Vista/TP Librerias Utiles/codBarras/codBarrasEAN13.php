<?php
// Configuración
include_once "../../../configuracion.php";

// Datos
$param = data_submitted();

use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGDrawing;
use BarcodeBakery\Common\BCGFontFile;
use BarcodeBakery\Barcode\BCGean13;

require '../../../Util/phpbarcode/vendor/autoload.php';


// Colores
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

// Fuente
$font = new BCGFontFile('../../../Util/phpbarcode/font/arial.ttf', 18);

$code = new BCGean13();
$code->setScale(2); // Resolution
$code->setThickness(30); // Thickness
$code->setForegroundColor($colorBlack); // Color of bars
$code->setBackgroundColor($colorWhite); // Color of spaces
$code->setFont($font); // Font (or 0)
$code->parse($param["codigoBarras"]); // Text

$drawing = new BCGDrawing($code, $colorWhite);

header('Content-Type: image/png');
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);



?>