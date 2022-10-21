# Barcode Bakery - GRUPO 6


**Barcode Bakery** es una librería de pago para la generación de códigos de barras disponible en PHP. Cuentan con una prueba gratis en su paquete para generar códigos 1D.

# Instalación

## Requisitos - Versión 7.0.4

- PHP 7.4+ o PHP 8
- Extensión GD

## Paso 1
Chequear que su versión de PHP es la adecuada y la extensión GD se encuentra habilitada. Para ello debe acceder a su ```phpinfo.php```

![](https://i.imgur.com/SlTd79A.png)


La cabecera de este archivo muestra la versión de PHP instalada. Dentro de este mismo archivo, se podrá observar un módulo gd si este se encuentra habilitado.

![](https://i.imgur.com/rDGW0yI.png)


De no estar instalado, deberá pegar la siguiente línea al final de su `php.ini`:

     extension=gd
     
Alternativamente, puede buscar esa línea dentro de php.ini y quitarle el punto y coma.

![](https://i.imgur.com/OQ8Gr1S.png)

Una vez hecho esto, reinicie su apache y chequee en su `phpinfo.php` si la extensión ya se encuentra instalada. Si este el caso, ya podrá avanzar al siguiente paso.

## Paso 2
A continuación, descargue el archivo comprimido de la página de [Bakery Barcode](https://www.barcodebakery.com/en/download). Debe seleccionar la opción de PHP.

![](https://i.imgur.com/SWE9r69.png)

Ahora, extraiga su contenido. El comprimido contiene una carpeta con otras dos carpetas adentro:

- example - La demo de la librería.
- packages - Todos las clases de la librería.

A partir de ahí, ya se encontrará instalada y lista para usar.

# Tutorial de Uso

## Demo
Tal como se mencionó, la carpeta "example" contiene la demo de la librería creada por el equipo desarrollador de la misma.

La demo provee una interfaz gráfica que permite generar todo tipo de código de barras, cambiar su tamaño, color, grosor, resolución, etc. Se recomienda probarla después cada instalación para ver si la librería funciona correctamente.

![](https://i.imgur.com/Ra99fuF.png)


### ¿Cómo acceder a demo?
Solo debe ejecutar el `index.php` que se encuentra en la carpeta "example".

## Generación de códigos
Debera crear un script. En nuestro ejemplo, lo llamaremos `test.php`.

### Paso 1
Lo primero que debe incluir en su código es el `autoload.php`. Use el que viene en el directorio "vendor" ubicado dentro de "example".

     require_once "path/example/vendor/autoload.php";

> "path" debe ser reemplazado por la ruta absoluta o relativa a la carpeta example.

### Paso 2
Ahora tendrá que indicar las clases comunes que va a usar, las cuales son las siguientes:

##### BCGColor
Determina los colores empleados. Su constructor recibe tres números enteros entre 0 y 255 que representan al RGB (rojo, verde y azul).

##### BCGFontFile
(Opcional) - Determina la fuente para la etiquetas. Su constructor recibe un path hacia un archivo `.ttf` (extensión para fuentes) y el tamaño en pixeles que se va a emplear.

##### BCGLabel
(Opcional) - Se emplea para agregar etiquetas adicionales. Su constructor recibe un texto cualquiera, un objeto de tipo BCGFontFile, la posición y la alineación.

##### BCGDrawing
Renderiza el código de barras. Su constructor recibe un objeto de tipo BCGBarcode y un objeto de tipo BCGColor, el cual será el color de fondo.

Si se requieren de todas, debe agregar lo siguiente:
```
use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGFontFile;
use BarcodeBakery\Common\BCGLabel;
use BarcodeBakery\Common\BCGDrawing;
```

### Paso 3
Necesitará una de las clases que heredan de BCGBarcode, puede ver la lista completa en el sitio web de [Bakery Barcode](https://www.barcodebakery.com/en/docs/php/barcode/1d).

Este ejemplo usará BCGcode39, pero igual debería funcionar para todas las clases.

```
// Para generar codigo 39
use BarcodeBakery\Barcode\BCGcode39;
```

Sus propiedades se definirán mediante métodos de la clase BCGBarcode:

##### setScale
La escala del código de barras. Mientras más alto sea este número, mayor será la resolución del código. Si es menor a 1, retornará una excepción.

##### setThickness
La altura de las barras. Tiene un máximo de 90 y un mínimo de 20.

##### setForegroundColor
El color de las barras. Recibe un objeto de tipo BCGColor.

##### setBackgroundColor
El color de fondo. Recibe un objeto de tipo BCGColor.

##### setFont
La fuente de la etiqueta. Recibe un objeto de tipo BCGFontFile o "0" si no se desea etiqueta.

##### parse
Recibe el texto que se va a codificar y lo analiza. En caso de que el mismo no cumpla con los requisitos del código de barra que se desea generar, retornará una excepción.

##### addLabel
(Opcional) - Añade una etíqueta adicional. Recibe un objeto de tipo BCGLabel.

Estos son los más importantes, pero puede mirar más en la página web de [Bakery Barcode](https://www.barcodebakery.com/en/docs/php/barcode/barcode/api).

---
El código de ejemplo va quedando así:

```
// Colores
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

// Fuente
$font = new BCGFontFile('path/example/font/Arial.ttf', 18);

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
$code->parse("MUNDO"); // Texto a convertir
```

### Paso 4
Ya habiendo definido todas las propiedades del código en sí, toca renderizar.

Este paso va a depender de que se quiera hacer con el resultado.

#### Guardar
Si lo que se quiere es guardar el resultado en el directorio del servidor, entonces basta con colocar lo siguiente:

```
$drawing = new BCGDrawing($code, $colorWhite);
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG, 'codigo.png');
```

El método "finish" de la clase BCGDrawing recibe el formato (PNG O JPG) y el nombre que tendrá el resultado. Posteriormente, "finaliza" la generación.

Una vez ejecutado, el resultado guardará en el directorio donde se encuentra el `test.php` creado.

#### Mostrar
Si se pretende mostrar, entonces previo a ejecutar "finish", deberemos que el header es de tipo imagen:

```
$drawing = new BCGDrawing($code, $colorWhite);
header('Content-Type: image/png');
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
```

Para poder mostrarlo en otra página, puede utilizar una etiqueta "img".

```
<img src="test.php">
```

---

### Resultado final:

![](https://i.imgur.com/uVMiwWU.png)

---

### Código completo:

```
<?php
require_once "path/example/vendor/autoload.php";

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
$font = new BCGFontFile('path/example/font/Arial.ttf', 54);

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
// header('Content-Type: image/png'); // Agregar si se quiere mostrar
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG, 'codigo.png'); // Quitar segundo parámetro si no quiere que se guarde
?>
```

## Manejo de errores
La clase BCGDrawing puede recibir una excepción por parámetro y renderizarla en imagen:

Ejemplo:
![](https://i.imgur.com/1XKjpJF.png)

Para lograr esto, se emplea un "try" y "catch". Si ocurre una excepción, se envia al método "drawException". De este modo, siempre el script va a dar como resultado una imagen.

Código tomado de la demo:
```
<?php
require __DIR__ . '/../vendor/autoload.php';

use BarcodeBakery\Common\BCGColor;
use BarcodeBakery\Common\BCGDrawing;
use BarcodeBakery\Common\BCGFontFile;
use BarcodeBakery\Barcode\BCGcodabar;

// Loading Font
$font = new BCGFontFile(__DIR__ . '/../font/Arial.ttf', 18);

// Don't forget to sanitize user inputs
$text = isset($_GET['text']) ? $_GET['text'] : 'A12345B';

// The arguments are R, G, B for color.
$colorBlack = new BCGColor(0, 0, 0);
$colorWhite = new BCGColor(255, 255, 255);

$drawException = null;
$barcode = null;
try {
    $code = new BCGcodabar();

    // Uncomment when using the commercial version
    ////$code->useCommercialVersion();

    $code->setScale(2); // Resolution
    $code->setThickness(30); // Thickness
    $code->setForegroundColor($colorBlack); // Color of bars
    $code->setBackgroundColor($colorWhite); // Color of spaces
    $code->setFont($font); // Font (or 0)
    $code->parse($text); // Text
    $barcode = $code;
} catch (Exception $exception) {
    $drawException = $exception;
}

$drawing = new BCGDrawing($barcode, $colorWhite);
if ($drawException) {
    $drawing->drawException($drawException);
}

// Header that says it is an image (remove it if you save the barcode to a file)
header('Content-Type: image/png');
header('Content-Disposition: inline; filename="barcode.png"');

// Draw (or save) the image into PNG format.
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);

```