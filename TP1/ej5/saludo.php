<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        body{
            box-sizing: border-box;
            text-align: center;
        }
        input{
            display: block;
            margin: 0 auto;
            width: 200px;
        }
        input[type="submit"]{
            margin-top: 5px;
            width: 100px;
        }
    </style>
</head>
<body>
    <br><br>
    <?php
        if($_GET){
            if($_GET["edad-form"] >= 18){
                $edadString =  "Soy mayor de edad";
            }else{
                $edadString = "Soy menor de edad";
            }

            if($_GET["estudios"] == "sin-estudios"){
                $estudiosString = "No cuento con estudios.";
            }elseif($_GET["estudios"] == "estudios-primarios"){
                $estudiosString = "Cuento con estudios primarios";
            }else{
                $estudiosString = "Cuento con estudios secundarios";
            }

            
            if($_GET["sexo"] == "otro"){
                $stringSexo = "No me identifico con ningún género binario.";
            }else{
                $stringSexo = "Me identifico con el sexo " . $_GET["sexo"];
            }

            echo "Hola, yo soy <strong>" . $_GET["nombre-form"] ."
            " . $_GET["apellido-form"] . ". " . $edadString ."</strong>, tengo <strong>" .
            $_GET["edad-form"] . "</strong> años y vivo en <strong>" .
            $_GET["direccion-form"] . ".</strong><br>";
            echo "<b>".$estudiosString."</b><br>";
            echo "<b>".$stringSexo."</b>";            
        }else{
            echo "No se recibieron datos";
        }

    ?>
    <br>
    <a href="ej5.php">Volver al inicio</a>
</body>
</html>