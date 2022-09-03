<?php
// Encabezado
$titulo = "Ejercicio 1 con JQuery - TP 2";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";
?>

<!-- Formulario -->
<div class="container d-flex justify-content-center align-items-center">
    <form action="" method="post" name="form" id="form" class="col-lg-5 col-md-8 col-12 p-4 mt-3 bg-light rounded-3 shadow" novalidate>
        <h1 class="text-center mb-5" style="font-size: 2rem">
            Formulario de prueba con JQuery
        </h1>
        <div class="row mb-3 d-flex justify-content-center align-items-center">
            <div class="col-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required />
                <div class="invalid-feedback">Ingrese su e-mail</div>
            </div>
        </div>
        <div class="row mb-5 d-flex justify-content-center align-items-center">
            <div class="col-12">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required />
                <div class="invalid-feedback">Ingrese su nombre</div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6 text-center">
                <input type="submit" class="btn btn-warning col-12" />
            </div>
        </div>
    </form>
</div>
<script src="../lib/jquery-3.6.0.slim.min.js"></script>
<script src="../lib/jquery-validation-1.19.5/dist/jquery.validate.js"></script>
<script src="../js/TP2_EJ1_JQUERY.js"></script>
<?php
// Footer
include_once "../Estructura/footer.php";
?>