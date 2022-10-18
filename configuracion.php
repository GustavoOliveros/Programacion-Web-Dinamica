<?php 

header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////
//C:\wamp64\www\PWD2\PDO
$PROYECTO ='PWD/PWD_Grupo/Programacion-Web-Dinamica';

//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

// $ROOT = "/export/home/gustavo.oliveros/public_html_lamptec/Programacion-Web-Dinamica/";

include_once($ROOT.'Util/funciones.php');

// En el include_once tiene el $root. concatenado. Consultar


// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";


$_SESSION['ROOT']=$ROOT;

?>