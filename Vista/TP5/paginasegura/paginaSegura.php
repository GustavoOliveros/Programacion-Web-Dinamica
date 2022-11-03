<?php
// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

// Sesión
$session = new Session();
if(!$session->activa()){
    header("Location:../login/login.php?error=3");
}else{
    $arreglo = $session->getRol();
}

// Encabezado
$titulo = "TP 5";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

?>

<!-- Contenido -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6 mb-5">
        <h1 class="text-center my-3">¡Bienvenido, <?php echo $_SESSION["nombreUsuario"];  ?>!</h1>
        <div class="row col-12">
            <div class="col-6 mx-auto"><a href="../accion/cerrarSesion.php" class="btn btn-primary col-12">Cerrar Sesión</a></div>
            <?php
            if(in_array("admin",$arreglo)){
                echo '<div class="col-6"><a href="../usuarios/listarUsuario.php" class="btn btn-primary col-12">Administrar Usuarios</a></div>';
            }
            ?>
        </div>
    </div>
</main>
