<?php
 require_once "phpbarcode/barcodegen.1d-php.v7.0.4/example/vendor/autoload.php";

use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGFontFile;
use BarcodeBakery\Common\BCGLabel;
use BarcodeBakery\Common\BCGDrawing;

// Para generar codigo 39
use BarcodeBakery\Barcode\BCGcode39;

// Colores
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

// Fuente
$font = new BCGFontFile('phpbarcode/barcodegen.1d-php.v7.0.4/example/font/Arial.ttf', 54);

// Label
$label = new BCGLabel("HOLA",$font,BCGLabel::POSITION_TOP, BCGLabel::ALIGN_CENTER);

// Codigo de Barra
$code = new BCGcode39(); // Depende de cual se quiera usar
$code->setScale(6); // Resolución
$code->setThickness(30); // Altura
$code->setForegroundColor($colorBlack); // Color de las barras
$code->setBackgroundColor($colorWhite); // Color de los espacios
$code->setFont($font); // Fuente (o 0)
$code->addLabel($label); // Etiqueta
$code->parse("MUNDO"); // Texto 

$drawing = new BCGDrawing($code, $colorWhite);
header('Content-Type: image/png');
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);

?>