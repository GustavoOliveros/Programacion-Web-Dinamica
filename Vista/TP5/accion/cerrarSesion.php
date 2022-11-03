<?php
// Configuración
include_once "../../../configuracion.php";

// Funciones tp5
include_once "../../../Util/funciones_tp5.php";

$session = new Session();

$session->cerrar();

header("Location:../login/login.php?exito=1");


?>