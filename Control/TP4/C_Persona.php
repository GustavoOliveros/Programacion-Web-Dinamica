<?php

class C_Persona{
     /**
     * Retorna un arreglo con todos las personas
     * @return array
     */
    public function listar(){
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

        if(!isset($entrada["dni"])){
            // Alguno de los campos no llegó
            $resultado["error"] = 4;
        }

        if(is_null($resultado["error"]) && strlen($entrada["dni"]) > 9 || !is_numeric($entrada["dni"])){
            // Datos inválidos
            $resultado["error"] = 5; 
        }

        if(is_null($resultado["error"])){
            $objPersona = new Persona();
            if($objPersona->buscarPersona($entrada["dni"])){
                // Si encontró
                $resultado["result"] = $objPersona;
            }else{
                // Sino encontró
                $resultado["error"] = 404;
            }
        }

        return $resultado;
    }
}
