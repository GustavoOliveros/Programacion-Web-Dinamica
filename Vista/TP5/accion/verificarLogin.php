<?php
// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

// Datos
$param = data_submitted();
if(!isset($param["nombre"]) || !isset($param["pass"])){
    header("Location:../login/login.php?error=0");
}

// Contacto con control
$session = new Session();
$resultado = $session->iniciar($param["nombre"], $param["pass"]);

if($resultado["respuesta"]){
    header("Location:../paginaSegura/paginaSegura.php");
}else{
    $session->cerrar();
    header("Location:../login/login.php?error=".$resultado["error"]);
}

?>