<?php
// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

// Sesion
$session = new Session();
if(!$session->activa()){
    header("Location:../login/login.php?error=3");
}
$arreglo = $session->getRol();
if(!in_array("admin",$arreglo)){
    header("Location:../paginaSegura/paginaSegura.php?error=5");
}

// Datos
$param = data_submitted();

// Contacto con control
$objControl = new AbmUsuario();

// Verificaciones
if($param["accion"] != "borrar" && $param["accion"] != "editar" && $param["accion"] != "activar"){
    header("Location:listarUsuario.php?error=1");
}
if(!isset($param["id"])){
    header("Location:listarUsuario.php?error=1");
}
$resultado = $objControl->buscar($param);
if(is_null($resultado)){
    header("Location:listarUsuario.php?error=1");
}

// Encabezado
$titulo = "Modificar/Eliminar - TP 5";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

?>

<!-- Form -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center"><?php echo ucfirst($param["accion"]); ?></h1>
        <form
        action="
        <?php
        if($param["accion"] == "editar" || $param["accion"] == "activar"){echo "../accion/actualizarLogin.php";}
        else{echo "../accion/eliminarLogin.php";}
        ?>"
        method="post"
        id="form"
        name="form"
        class="needs-validation"
        novalidate
        >
            <div class="row col-12">
                <div class="col-12 col-lg-6">
                    <label for="nombre" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" value="<?php echo $resultado[0]->getNombre() ?>" required>
                    <div class="invalid-feedback">Obligatorio</div>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="mail" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" name="mail" id="mail" maxlength="50" value="<?php echo $resultado[0]->getMail() ?>" required>
                    <div class="invalid-feedback">Ingrese un correo electrónico válido</div>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="listarUsuario.php" class="btn btn-primary"><< Volver</a>
                    <input type="submit" class="btn btn-primary my-2" value="<?php echo ucfirst($param["accion"]); ?>">
                </div>
            </div>

            <input name="id" id="id" type="hidden" value="<?php echo $param["id"]; ?>" readonly required>
        </form>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>