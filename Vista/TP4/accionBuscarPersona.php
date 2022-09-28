<?php
// Encabezado
$titulo = "Buscar Persona - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Control
include_once "../../configuracion.php";

// Funciones tp4
include_once "../../Util/funciones_tp4.php";

// Contacto con control
$objControl = new C_Persona();
$entrada = data_submitted();
$resultado = $objControl->buscar($entrada);

?>
<!-- Resultado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <?php
        switch ($resultado["error"]) {
            case 4:
                echo mostrarError("
                Ocurrió un error al enviar al dato. Por favor, inténtelo otra vez.<br>
                <a href='BuscarPersona.php'>Haga clic acá para volver</a>
                ");
                break;
            case 5:
                echo mostrarError("
                El número de DNI es inválido.<br>
                <a href='BuscarPersona.php'>Haga clic acá para volver</a>
                ");
                break;
            case 404:
                echo mostrarError('
                No se encontró a la persona solicitada.<br>
                <a href="NuevaPersona.php?numDNI='. $entrada["numDNI"] . '">Haga clic acá para añadirlo</a>');
                break;
            default:
                // Todo salió bien
                echo '
                    <form action="ActualizarDatosPersona.php" method="post" class="needs-validation" id="form" name="form" novalidate>
                        <h1 class="text-center">Editar Persona</h1>
                        <div class="row">
                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="numDNI" class="form-label">Número de DNI</label>
                                <input type="number" min="0" max="999999999" class="form-control" id="numDNI" name="numDNI" value="'. $resultado["result"]->getNumDNI() .'" readonly />
                                <div class="invalid-feedback">
                                    Número de DNI inválido<br>Debe contener solo números (9 caracteres max.)
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" value="'. $resultado["result"]->getNombre() .'" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{1,50}" required />
                                <div class="invalid-feedback">
                                    Nombre inválido.<br>Debe contener solo letras (50 caracteres max.)
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" value="'. $resultado["result"]->getApellido() .'" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{1,50}" required />
                                <div class="invalid-feedback">
                                    Apellido inválido.<br>Debe contener solo letras (50 caracteres max.)
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNac" name="fechaNac" min="1900-01-01" value="'. $resultado["result"]->getFechaNac() .'" max="2006-12-31" required />
                                <div class="invalid-feedback">
                                    Fecha de nacimiento inválida.<br>Debe ser mayor a 16 años.
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="domicilio" class="form-label">Domicilio</label>
                                <input type="text" maxlength="200" class="form-control" id="domicilio" name="domicilio" value="'. $resultado["result"]->getDomicilio() .'" required />
                                <div class="invalid-feedback">
                                    Domicilio inválido.
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 mx-auto position-relative">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" maxlength="11" minlength="11" class="form-control" id="telefono" name="telefono" value="'. $resultado["result"]->getTelefono() .'" pattern="[0-9]\d\d[-][0-9]\d\d\d\d\d\d" required />
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
                    </form>';
                break;
        }
        ?>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>