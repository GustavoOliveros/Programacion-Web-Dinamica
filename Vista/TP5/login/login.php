<?php
// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

// Sesion
$session = new Session();
if($session->activa()){
    header("Location:../paginasegura/paginaSegura.php");
}

// Encabezado
$titulo = "LOGIN - TP 5";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Datos
$param = data_submitted();


?>

<!-- Contenido -->
<main class="bg-secondary vh-100 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xxl-3 rounded-3 shadow-lg p-3 text-left position-relative" style="background-color: white">
        <button type="button" class="btn-close disabled position-absolute end-0 top-0 p-3" aria-label="Close" style="font-size: 0.8rem"></button>
        <div class="row">
            <div class="col">
                <?php
                if(isset($param["error"])){
                    echo mostrarError(getError($param["error"]));
                }
                
                ?>
                <h1 class="fw-5 text-center mb-5 mt-5">Member Login</h1>
            </div>
        </div>
        <form action="../accion/verificarLogin.php" method="post" class="" name="form" id="form" novalidate>
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </span>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Username" required />
                        <div class="invalid-feedback" id="feedback-username">
                            Obligatorio
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg>
                        </span>
                        <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" pattern="^(?=.*\d).{8,16}$" required />
                        <div class="invalid-feedback" id="feedback-password">
                            Contraseña inválida
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9 mx-auto mb-5 pb-5">
                    <input type="submit" class="btn btn-success border-0 col-12" style="background-color: #01ce80" value="Login" />
                </div>
            </div>
        </form>
    </div>
</main>
<script src="../../js/login.js"></script>
<?php
// Footer
include_once "../../Estructura/footer.php";
?>