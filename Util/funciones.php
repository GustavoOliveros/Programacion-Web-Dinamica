<?php 

function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}

function mostrarError($contenidoError){
    return '
        <div class="col-12 col-md-7 alert alert-danger m-3 p-3 mx-auto alert-dismissible fade show" role="alert">'.
        $contenidoError .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}

function mostrarExito($contenidoExito){
    return '
        <div class="col-12 col-md-7 alert alert-success m-3 p-3 mx-auto alert-dismissible fade show" role="alert">'.
        $contenidoExito .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

spl_autoload_register(function($class_name){
    //echo "class ".$class_name ;
    $directorys = array(
         $GLOBALS['ROOT'].'Modelo/T_LU/',
         $GLOBALS['ROOT'].'Modelo/Conector/',
         $GLOBALS['ROOT'].'Control/C_LU/',
         $GLOBALS['ROOT'].'Modelo/TP5/',
         $GLOBALS['ROOT'].'Control/TP5/'
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
})

?>
