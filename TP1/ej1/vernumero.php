<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver numero</title>
</head>
<body>
    <?php
        if($_GET){
            $numero = $_GET["numero_form"];
            if($numero > 0){
                echo "El número es positivo.";
            }elseif($numero == 0){
                echo "El número es cero.";
            }else{
                echo "El número es negativo.";
            }
        }else{
            echo "No se recibieron datos.";
        }
    ?>
    <a href="ej1.php">Volver al inicio</a>
    
</body>
</html>