<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - TP 1</title>
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <style>
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <br><br>
        <p>
            <?php
            $numA = $_GET["form-numero-uno"];
            $numB = $_GET["form-numero-dos"];
            $operador = $_GET["operador"];

            switch ($operador) {
                case "SUMA":
                    $resultado = $numA + $numB;
                    $operador = "+";
                    break;
                case "RESTA":
                    $resultado = $numA - $numB;
                    $operador = "-";
                    break;
                case "MULTIPLICACION":
                    $resultado = $numA * $numB;
                    $operador = "*";
                    break;
                case "DIVISION":
                    $operador = "/";
                    if ($numB == 0) {
                        echo "El denominador no puede ser igual a cero";
                        $resultado = "Inválido";
                    } else {
                        $resultado = $numA / $numB;
                    }
                    break;
            }

            echo "<p>" . $numA . $operador . $numB . " = " . $resultado . "</p>";
            ?>
        </p>
        <br>
        <a href="index.php">Volver</a>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>