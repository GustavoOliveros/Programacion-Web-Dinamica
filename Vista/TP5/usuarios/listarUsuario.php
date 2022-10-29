<?php
// Encabezado
$titulo = "Lista de Usuarios - TP 5";
include_once "../../Estructura/encabezado.php";

// Navbar
include_once "../../Estructura/navbar.php";

// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

// Contacto con control
$objControl = new AbmUsuario();
$resultado = $objControl->buscar(NULL);

// Datos
$param = data_submitted();


?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Usuarios</h1>
        <?php
        if(isset($param["error"])){
            echo mostrarError($objControl->error($param["error"]));
        }
        if(count($resultado)>0){
            echo mostrarUsuarios($resultado);
        }else{
            echo mostrarError("No hay usuarios registrados.");
        }

        ?>
        <a class="btn btn-primary" href="../index/index.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../../Estructura/footer.php";
?>