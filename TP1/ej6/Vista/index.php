<!-- Se agregó bootstrap para los estilos del footer y el header -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 6 - TP 1</title>
    <style>
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        input {
            display: block;
            margin: 0 auto;
            width: 200px;
        }

        input[type="radio"], input[type="checkbox"] {
            display: inline;
            margin: 0;
            width: 20px;
        }

        input[type="submit"] {
            margin-top: 5px;
            width: 100px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <form action="../Control/saludo.php" method="get" name="form"">
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
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>