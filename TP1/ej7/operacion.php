<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            box-sizing: border-box;
            text-align: center;
        }
        p{
            font-weight: 500;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <?php
        $numA = $_GET["form-numero-uno"];
        $numB = $_GET["form-numero-dos"];
        $operador = $_GET["operador"];

        switch($operador){
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
                if($numB == 0){
                    echo "El denominador no puede ser igual a cero";
                    $resultado = "Inválido";
                }else{
                    $resultado = $numA / $numB;
                }
                break;
        }

        echo "<p>" . $numA . $operador . $numB . " = " . $resultado . "</p>"; 
    ?>
    <a href="ej7.php">Volver al inicio</a>
    
</body>
</html>