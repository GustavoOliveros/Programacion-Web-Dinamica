<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 7</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="operacion.php" method="get" name="form">
        <input type="number" name="form-numero-uno" required><br>
        <input type="number" name="form-numero-dos" required><br>
        <select name="operador">
            <option default>SUMA</option>
            <option>RESTA</option>
            <option>MULTIPLICACION</option>
            <option>DIVISION</option>
        </select>
        <input type="submit">
    </form>

</body>

</html>