<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 6</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            box-sizing: border-box;
            text-align: center;
        }

        input {
            display: block;
            margin: 0 auto;
            width: 200px;
        }

        input[type="submit"] {
            margin-top: 5px;
            width: 100px;
        }

        input[type="radio"] {
            display: inline;
            margin: 0;
            width: 20px;
        }

        input[type="checkbox"] {
            display: inline;
            margin: 0;
            width: 20px;
        }
    </style>
</head>

<body>
    <form action="saludo.php" method="get" name="form">
        Nombre: <input type="text" name="nombre-form" required>
        Apellido: <input type="text" name="apellido-form" required>
        Edad: <input type="number" min="0" max="150" name="edad-form" required>
        Dirección: <input type="text" name="direccion-form" required>
        Estudios<br>
        <input type="radio" name="estudios" value="sin-estudios" required>Sin estudios<br>
        <input type="radio" name="estudios" value="estudios-primarios" required>Primarios<br>
        <input type="radio" name="estudios" value="estudios-secundarios" required>Secundarios
        <br>Sexo<br>
        <input type="radio" name="sexo" value="masculino" required>Masculino<br>
        <input type="radio" name="sexo" value="femenino" required>Femenino<br>
        <input type="radio" name="sexo" value="otro" required>Otro<br>
        Deportes que practica<br>
        <input type="checkbox" name="deportes[]" value="Futbol">Futbol<br>
        <input type="checkbox" name="deportes[]" value="Basket">Basket<br>
        <input type="checkbox" name="deportes[]" value="Voley">Voley<br>
        <input type="checkbox" name="deportes[]" value="Hockey">Hockey<br>
        <input type="checkbox" name="deportes[]" value="Golf">Golf<br>
        <input type="checkbox" name="deportes[]" value="Natación">Natación<br>
        <input type="checkbox" name="deportes[]" value="Atletismo">Atletismo

        <input type="submit">
    </form>
</body>

</html>