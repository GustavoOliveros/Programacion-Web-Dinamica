<?php
// Encabezado
$titulo = "Nueva Persona - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

$entrada = data_submitted();

?>

<!-- Formulario -->
<main class="container-fluid d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <form action="accionNuevaPersona.php" method="post" class="needs-validation" id="form" name="form" novalidate>
            <h1 class="text-center">Añadir Persona</h1>
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="numDNI" class="form-label">Número de DNI</label>
                    <input type="number" min="0" max="999999999" class="form-control" id="numDNI" name="numDNI" <?php if(isset($entrada["numDNI"])){echo "value=" . $entrada["numDNI"];} ?> required />
                    <div class="invalid-feedback">
                        Número de DNI inválido<br>Debe contener solo números (9 caracteres max.)
                    </div>
                </div>
                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" required />
                    <div class="invalid-feedback">
                        Nombre inválido.<br>Debe contener solo letras (50 caracteres max.)
                    </div>
                </div>
                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" required />
                    <div class="invalid-feedback">
                        Apellido inválido.<br>Debe contener solo letras (50 caracteres max.)
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNac" name="fechaNac" min="1900-01-01" max="2006-12-31" required />
                    <div class="invalid-feedback">
                        Fecha de nacimiento inválida.<br>Debe ser mayor a 16 años.
                    </div>
                </div>
                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" maxlength="200" class="form-control" id="domicilio" name="domicilio" required />
                    <div class="invalid-feedback">
                        Domicilio inválido.
                    </div>
                </div>

                <div class="col-12 col-lg-4 mx-auto position-relative">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" maxlength="11" minlength="11" class="form-control" id="telefono" name="telefono" pattern="[0-9]\d\d[-][0-9]\d\d\d\d\d\d" required />
                    <div class="invalid-feedback">
                        Teléfono inválido (Formato: 299-1234567)
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 d-flex justify-content-center">
                <a class="btn btn-primary mt-3 mx-1" href="index.php">
                    << Volver</a>
                        <input type="submit" class="btn btn-primary mt-3 mx-1" />

            </div>
        </form>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>