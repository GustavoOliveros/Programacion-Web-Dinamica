<!-- Se agregó bootstrap para los estilos del footer y el header -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 2 - Tp 1</title>
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
        }

        input[type="submit"] {
            margin: 10px auto;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <h1>Horas de cursada: PWD</h1>
        <form action="horascursada.php" method="get" name="form">
            Lunes <input type="number" name="horas-lunes" value="0" min="0" step="0.5">
            Martes <input type="number" name="horas-martes" value="0" min="0" step="0.5">
            Miercoles <input type="number" name="horas-miercoles" value="0" min="0" step="0.5">
            Jueves <input type="number" name="horas-jueves" value="0" min="0" step="0.5">
            Viernes <input type="number" name="horas-viernes" value="0" min="0" step="0.5">
            <input type="submit">
        </form>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>