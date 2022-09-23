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

    /**
     * Da de alta una persona
     * @param array $entrada
     * @return object
     */
    public function alta($entrada){
        $resultado["result"] = null;
        $resultado["error"] = null;
        $contador = 0;

        $indices = array("numDNI", "nombre", "apellido", "domicilio", "telefono", "fechaNac");

        while($contador < count($indices) && is_null($resultado["error"])){
            $indiceRevisar = $indices[$contador];
            if(!isset($entrada[$indiceRevisar])){
                // Alguno de los campos no llegó
                $resultado["error"] = "4";
            }
            $contador++;
        }

        // Validacion DNI
        if(is_null($resultado["error"]) && strlen($entrada["numDNI"]) > 9 || !is_numeric($entrada["numDNI"])){
            // Datos inválidos
            $resultado["error"] = 5; 
        }

        // Validacion Nombre, Apellido, Domicilio y Telefono
        if(is_null($resultado["error"]) && strlen($entrada["nombre"]) > 50){
            $resultado["error"] = 5;
        }
        if(is_null($resultado["error"]) && strlen($entrada["apellido"]) > 50){
            $resultado["error"] = 5;
        }
        if(is_null($resultado["error"]) && strlen($entrada["domicilio"]) > 200){
            $resultado["error"] = 5;
        }
        if(is_null($resultado["error"]) && strlen($entrada["telefono"]) > 20){
            $resultado["error"] = 5;
        }

        // FechaNac
        $regex = "/\s+(?:19\d{2}|20[01][0-9]|2006)[-/.](?:0[1-9]|1[012])[-/.](?:0[1-9]|[12][0-9]|3[01])\b/";
        if(is_null($resultado["error"]) && !preg_match($regex, $entrada["fechaNac"])){
            $resultado["error"] = 5;
        }


        if(is_null($resultado["error"])){
            // Todo salio bien
            $objPersona = new Persona();
            $objPersona->cargar(
                $entrada["numDNI"], $entrada["apellido"], $entrada["nombre"], $entrada["fechaNac"], $entrada["telefono"], $entrada["domicilio"]);
            if($objPersona->insertar()){
                $resultado["result"] = $objPersona;
            }else{
                // Error al insertar
                $resultado["error"] = 7;
            }
        }

        return $resultado;
    }
}
