<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 7 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
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
    } else {
        echo "<div class='alert alert-success col-12 col-md-8 col-xxl-4 p-4 mt-3 mx-auto'>
        <h1>" . $numA . $operador . $numB . " = " . $resultado . "</h1>";
    }
    echo "<a href='../Vista/index.php'>Volver</a></div>";
    ?>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>