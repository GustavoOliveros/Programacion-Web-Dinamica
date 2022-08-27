<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 1 - Tp 3</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>

    <?php
    // directorio
    $dir = "../Archivos/";

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

            if ((($_FILES['archivo']['size'] / 1024) / 1024) < 2) {
                // guardar el archivo y mensaje de exito con un link al mismo
                if(!copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])){
                    echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
                    Hubo un error al guardar el archivo.
                    </div>';
                }else{
                    echo '<div class="col-12 col-md-7 alert alert-success m-3 p-3 mx-auto">
                    <h1>¡Felicidades!</h1><a href="' . $dir . $_FILES['archivo']['name'] . '" download="' . $_FILES['archivo']['name'] .
                        '">Descarge su archivo aquí</a>
                    </div>';
                }
            } else {
                // mensaje de error por archivo muy grande
                echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
                El archivo es demasiado grande. Debe ser menor a 2MB
                </div>';
            }
        } else {
            // mensaje de error por tipo de archivo no valido
            echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            Tipo de archivo inválido: El archivo debe ser .docx, .doc o .pdf.
            </div>';
        }
    } else {
        echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            Ocurrió un error en la subida del archivo
            </div>';
    }

    ?>


    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelector(".alert").innerHTML += '<br><br><a href="index.php">Volver</a>';
    </script>
</body>

</html>