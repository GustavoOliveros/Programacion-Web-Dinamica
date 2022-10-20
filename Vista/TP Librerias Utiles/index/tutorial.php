<?php
// Encabezado
$titulo = "TP - Librerías Útiles";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

?>

<!-- Contenido -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
   <div class="col-12 col-lg-6">
    <h1 class="text-center">BARCODE BAKERY</h1>
    <p class="alert alert-secondary"><strong>Barcode Bakery</strong> es una librería de pago para la generación de códigos de barras. Cuentan con
      una prueba gratis en su paquete de 1D.<br>
      <a href="https://www.barcodebakery.com/en/download" target="_blank">Descargar (Versión para PHP)</a>
    </p>
    <h2 class="text-start">REQUISITOS</h2>
    <ul>
      <li>PHP 7.4 o superior</li>
      <li>Extensión GD</li>
    </ul>
    <h2 class="text-start">INSTALACION</h2>
    <p>Primero que nada, se deberá chequear que tengamos la versión de PHP adecuada y la extensión GD instalada.
    Para ello deberemos acceder al phpinfo.</p>
    <p>La versión está señalada en la parte de arriba y si el GD está instalado, se podrá observar un módulo con su nombre.</p>
    <p>De no estar instalado, deberá pegar la siguiente línea al final de su php.ini:</p>
    <code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extension=gd</code><br>
    <p>A continuación, descargue el archivo comprimido de la página de bakery barcode y extraiga su contenido.
      Dentro habrán dos carpetas "example" y "package":
    </p>
    <ul>
      <li>"Example" contiene una demo que permite generar todos los códigos incluidos en la líbreria.</li>
      <li>"Package" contiene todas las clases necesarias de la líbreria.</li>
    </ul>
    <p>Una vez culminado esto, ya estará instalada.</p>
    <h2 class="text-start">USO</h2>
    En la <a href="https://www.barcodebakery.com/en/docs/php/barcode/1d" target="_blank">página web de la líbreria</a>, podemos acceder al código de cada tipo de código de barra.
    Alternativamente, puede ir al index.php ubicado en example, el cual contiene un generador.
   </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>