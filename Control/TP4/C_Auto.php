<?php

class C_Auto{
    /**
     * Retorna un arreglo con todos los autos
     * @param 
     * @return array
     */
    public function listar(){
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

    /**
     * Retorna un arreglo con todos las personas
     * @return array
     */
    public function listarPersonas(){
        $resultado["result"] = null;
        $resultado["error"] = null;

        $objPersona = new Persona();
        $arregloPersona = $objPersona->listar();

        if(!is_null($arregloPersona)){
            $resultado["result"] = $arregloPersona;
        }else{
            $resultado["error"] = 404;
        }

        return $resultado;
    }

    /**
     * Retorna un arreglo con todos los autos y el nombre y apellido de sus dueños
     * @param array $entrada
     * @return array
     */
    public function buscar($entrada){
        $resultado["result"] = null;
        $resultado["error"] = null;

        if(!isset($entrada["patente"])){
            // Alguno de los campos no llegó
            $resultado["error"] = 4;
        }

        if(is_null($resultado["error"]) && strlen($entrada["patente"]) > 8){
            // Datos inválidos
            $resultado["error"] = 5; 
        }

        if(is_null($resultado["error"])){
            $objAuto = new Auto();
            if($objAuto->buscarAuto($entrada["patente"])){
                // Si encontró
                $resultado["result"] = $objAuto;
            }else{
                // Sino encontró
                $resultado["error"] = 404;
            }
        }

        return $resultado;
    }


}


?>