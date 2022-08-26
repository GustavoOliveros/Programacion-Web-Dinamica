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
        input{
            display: block;
            margin: 0 auto;
        }
        input[type="submit"]{
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <h1>Horas de cursada: PWD</h1>
    <form action="horascursada.php" method="get" name="form">
        Lunes <input type="number" name="horas-lunes" value="0" min="0" step="0.5">
        Martes <input type="number" name="horas-martes" value="0" min="0" step="0.5">
        Miercoles <input type="number" name="horas-miercoles" value="0" min="0" step="0.5">
        Jueves <input type="number" name="horas-jueves" value="0" min="0" step="0.5">
        Viernes <input type="number" name="horas-viernes" value="0" min="0" step="0.5">
        <input type="submit">
    </form>
</body>
</html>