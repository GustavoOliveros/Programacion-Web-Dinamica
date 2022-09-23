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
     * Busca un auto
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

    /**
     * Busca el listado de autos para un mismo dueño
     * @param object $objPersona
     * @return array
     */
    public function buscarPorDuenio($objPersona){
        $resultado["error"] = null;
        $resultado["result"] = null; 

        $objAuto = new Auto();
        $arregloAutos = $objAuto->listar('DniDuenio = "' . $objPersona->getNumDNI() . '"');

        if(!is_null($arregloAutos)){
            $resultado["result"] = $arregloAutos;
        }else{
            // No encontró autos registrados al nombre de la persona
            $resultado["error"] = 6;
        }

        return $resultado;
    }


}
