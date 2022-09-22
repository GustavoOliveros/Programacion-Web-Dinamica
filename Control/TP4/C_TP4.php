<?php

class C_TP4{
    // La clase espera un arreglo asociativo cuyas claves son iguales a
    // las variables instancia de la clase Auto y Persona

    /**
     * Retorna un arreglo con todos los autos y el nombre y apellido de sus dueños
     * @return array|null null si no hay autos
     */
    public function listarAutos(){
        $resultado["result"] = null;
        $resultado["error"] = null;

        $objAuto = new Auto();
        $arregloAutos = $objAuto->listar();

        if(!is_null($arregloAutos)){
            $resultado["result"] = $arregloAutos;
        }else{
            $resultado["error"] = 404;
        }

        return $resultado;
    }




}


?>