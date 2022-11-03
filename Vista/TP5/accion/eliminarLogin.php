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
    header("Location:../paginasegura/paginaSegura.php?error=1");
}

// Datos
$param = data_submitted();

// Contacto con control
$objControl = new AbmUsuario();

// Verificaciones
if(!isset($param["id"])){
    header("Location:../usuarios/listarUsuario.php?error=1");
}
$resultado = $objControl->buscar(array($param["id"]));
if(is_null($resultado)){
    header("Location:../usuarios/listarUsuario.php?error=1");
}

$param["pass"] = "";
$param["deshabilitado"] = "CURRENT_TIMESTAMP";

// Todo llegó
if($objControl->modificacion($param)){
    header("Location:../usuarios/listarUsuario.php?exito=1");
}else{
    header("Location:../usuarios/listarUsuario.php?error=2");
}


?>