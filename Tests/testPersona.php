<?php

include_once "../Modelo/Conector/BaseDatos.php";
include_once "../Modelo/TP4/Persona.php";

$objPersona = new Persona();
$objPersona->cargar("123","testmod","testmod","2000-01-01","2995889423","Buenos Aires 234, Neuquen");

if($objPersona->eliminar($objPersona)){
    echo "Se elimino con exito";
}else{
    echo "Error";
}





?>