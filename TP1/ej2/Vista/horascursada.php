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
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../../../Estructura/navbar.php";
    ?>
    <br><br>
    <div class="contenedor">
        <?php
        if ($_GET) {
            $cargaDiaria = [];
            foreach ($_GET as $horas) {
                $cargaDiaria[] = $horas;
            }
            $suma = array_sum($cargaDiaria);
            echo "La carga horaria de Programación Web Dinámica es <b>" . $suma . "</b>";
        } else {
            echo "No se recibieron datos";
        }
        ?>
        <br><a href="index.php">Volver</a>
    </div>
    <?php
    include_once "../../../Estructura/footer.php";
    ?>
    <script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>