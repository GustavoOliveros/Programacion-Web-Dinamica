<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>Ejercicio 2 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include_once "../Estructura/navbar.php";
    ?>
    <div class="alert alert-success col-12 col-md-6 col-xxl-4 p-4 mt-3 mx-auto">
        <h1>
            <?php
            if ($_GET) {
                $cargaDiaria = [];
                foreach ($_GET as $horas) {
                    $cargaDiaria[] = $horas;
                }
                $suma = array_sum($cargaDiaria);
                if ($suma != 1) {
                    echo "La carga horaria de Programación Web Dinámica es de <b>" . $suma . " horas</b>";
                } else {
                    echo "La carga horaria de Programación Web Dinámica es de <b>" . $suma . " hora</b>";
                }
            } else {
                echo "No se recibieron datos";
            }
            ?>
        </h1>
        <a href="TP1_EJ2.php">Volver</a>
    </div>
    <?php
    include_once "../Estructura/footer.php";
    ?>
    <script src="../lib/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>

</html>