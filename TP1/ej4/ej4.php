<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4</title>
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
    <form action="saludo.php" method="get" name="form">
        Nombre: <input type="text" name="nombre-form" required>
        Apellido: <input type="text" name="apellido-form" required>
        Edad: <input type="number" min="0" max="150" name="edad-form" required>
        Dirección: <input type="text" name="direccion-form" required>
        <input type="submit">
    </form>
</body>
</html>