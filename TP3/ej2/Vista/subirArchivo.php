<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 2 - Tp 3</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <?php
    $dir = '../Archivos/';
    // Comprobamos que no se hayan producido errores
    if ($_FILES['miarchivo']["error"] <= 0) {
        if ($_FILES['miarchivo']['type'] == "text/plain") {
            // Intentamos copiar el archivo al servidor.
            if (!copy($_FILES['miarchivo']['tmp_name'], $dir . $_FILES['miarchivo']['name'])) {
                echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
                    Hubo un error al guardar el archivo.
                    </div>';
            } else {
                //Abro el archivo y obtengo contenido
                $direccion_Archivo = $dir . $_FILES['miarchivo']['name'];
                $gestor = fopen($direccion_Archivo, "r");
                $contenido = fread($gestor, filesize($direccion_Archivo));
                fclose($gestor);

                //Muestro el contenido en el textarea
                echo '<div class="col-12 col-md-7 alert alert-success m-3 p-3 mx-auto">
                    <h1>¡Felicidades!</h1><h2>Su texto:</h2>
                    <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="10" readonly>' . $contenido . '</textarea>
                    </div>';
            }
        } else {
            echo '<div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto">
            Tipo de archivo inválido: El archivo debe ser .txt
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