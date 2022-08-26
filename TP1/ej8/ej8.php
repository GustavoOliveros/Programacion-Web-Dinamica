<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 8</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #111;

            background-image: url("https://fondosmil.com/fondo/57381.jpg");
            background-size: cover;
            background-position: center;
            
        }
        div.container{
            color:white;
            text-align: center;
            max-width: 700px;
            margin: 80px 0;
        }
        h1{
            font-size: 70px;
            margin: 20px 0;
        }
        h2{
            text-align: left;
        }
        form input{
            display: block;
            margin: 10px auto;
        }
        form input[type="number"]{
            width: 50%;
            margin: 10px 0;
            font-size: 30px;
            background: none;
            border: none;
            border-bottom: white solid 5px;
            color: white;
            border-radius: 5px;
            outline: none;
        }
        form input[type="number"]:hover{
            background-color: rgba(0,0,0,0.5);
        }
        form input[type="radio"]{
            margin: 10px 0;
            display: inline;
            cursor: pointer;
        }
        p{
            text-align: left;
        }
        .estudiante-form{
            text-align: left;
        }
        input[type="submit"], input[type="reset"]{
            width: 50%;
            font-size: 20px;
            border-radius: 10px;
            border: none;
        }
        .container-big{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(50px);
        }

        input[type="submit"]:hover, input[type="reset"]:hover{
            background-color: black;
            color:white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container-big">
        <div class="container">
            <h1>Cine Cinem@s</h1>
            <h2>Calcule el precio de su entrada</h2>
            <form action="entradas.php" method="post">
                <p>Ingrese su edad</p>
                <input type="number" min="0" max="150" name="edad" required>
                <p>¿Es Estudiante?</p>
                <div class="estudiante-form">
                    <input type="radio" name="esEstudiante" value="true" required>&nbsp;&nbsp;Si
                </div>
                <div class="estudiante-form">
                    <input type="radio" name="esEstudiante" value="false" required>&nbsp;&nbsp;No
                </div>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>
</body>
</html>