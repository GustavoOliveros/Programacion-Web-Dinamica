<!-- Se agregó bootstrap para los estilos del footer y el header -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 8 - TP 1</title>
    <style>
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <div class="contenedor">
        <h1>Cine Cinem@s</h1>
        <h2>Calcule el precio de su entrada</h2>
        <form action="../Control/entradas.php" method="post">
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
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>