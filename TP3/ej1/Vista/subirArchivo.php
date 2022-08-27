<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Archivo</title>
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">


        <?php
        // directorio
        $dir = "/archivos/";

        // Variables
        $esValido = false;
        $i = 0;

        // formatos aceptados
        $formatosValidos = ["application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/pdf"];

        if ($_FILES['archivo']['error'] <= 0) {

            // tipos validos doc y pdf
            while ($i < count($formatosValidos) && !$esValido) {
                if ($formatosValidos[$i] == $_FILES['archivo']['type']) {
                    $esValido = true;
                }
                $i++;
            }

            if ($esValido) {
                // tamaño max 2mb
                if (($_FILES['archivo']['size'] / 1000) / 1000 > 1.5) {
                    // guardar el archivo y mensaje de exito con un link al mismo
                    echo 'EXITO: <a href="'. $_FILES['archivo']. '">Descarge su archivo aquí</a>';
                }else{
                    // mensaje de error por archivo muy grande
                    echo "El archivo es demasiado grande.";
                }
            }else{
                // mensaje de error por tipo de archivo no valido
                echo "Tipo de archivo inválido: El archivo debe ser .docx, .doc o .pdf.";
            }
        } else {
            echo "Ocurrió un error en la subida del archivo.";
        }

        ?>
        <br>
        <a href="ej1.html">Volver a inicio</a>
    </div>

    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>