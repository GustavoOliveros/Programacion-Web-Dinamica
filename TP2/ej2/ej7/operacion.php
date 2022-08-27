<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Operacion</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css" />
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js" defer></script>
</head>

<body>
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
                $resultado = "Inválido";
            } else {
                $resultado = $numA / $numB;
            }
            break;
    }
    if ($numB == 0 && $operador == "/") {
        echo "<div class='alert alert-danger col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto'>
        <h1>" . $numA . $operador . $numB . " = " . $resultado . "</h1>
        <p style='color:red'>El denominador no puede ser igual a cero</p>";
    }else{
        echo "<div class='alert alert-success col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto'>
        <h1>" . $numA . $operador . $numB . " = " . $resultado . "</h1>";
    }
    echo "<a href='ej7.html'>Volver a inicio</a></div>";
    ?>
</body>

</html>