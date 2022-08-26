<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            width: 100v;
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>
<body>
    <br><br>
    <?php
        if($_GET){
            $cargaDiaria = [];
            foreach($_GET as $horas){
                $cargaDiaria[] = $horas;
            }
            $suma = array_sum($cargaDiaria);
            echo "La carga horaria de Programación Web Dinámica es <b>" . $suma . "</b>";

        }else{
            echo "No se recibieron datos";
        }
    ?>
    <br><a href="ej2.php">Volver al inicio</a>
    
</body>
</html>