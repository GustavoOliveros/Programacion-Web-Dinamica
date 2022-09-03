<?php
/**
 * Encapsulamiento del post y el get
 */
function obtenerDatos(){
    // Se asigna el post o el get a una variable
    $aux = array();
    if(!empty($_GET)){
        $aux = $_GET;
    }else if(!empty($_POST)){
        $aux = $_POST;
    }
    
    // Se revisa si hay valores vacios. Si existen, se le asignan null.
    if(count($aux) > 0){
        foreach($aux as $indice => $valor){
            if($valor == ""){
                $aux[$indice] = null;
            }
        }
    }

    return $aux;
}
?>