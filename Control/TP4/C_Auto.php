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
        }else{
            $entrada["patente"] = strtoupper($entrada["patente"]);
        }

        if(is_null($resultado["error"]) && strlen($entrada["patente"]) > 10){
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

    /**
     * Da de alta un auto
     * @param array $entrada
     * @return object
     */
    public function alta($entrada)
    {
        $resultado["result"] = null;
        $resultado["error"] = null;
        $contador = 0;

        $indices = array("patente", "modelo", "marca", "numDNI");

        while ($contador < count($indices) && is_null($resultado["error"])) {
            $indiceRevisar = $indices[$contador];
            if (!isset($entrada[$indiceRevisar])) {
                // Alguno de los campos no llegó
                $resultado["error"] = "4";
            }
            $contador++;
        }

        // Validacion DNI
        if(is_null($resultado["error"])){
            if (strlen($entrada["numDNI"]) <= 9 && is_numeric($entrada["numDNI"])) {
                $objPersona = new Persona();
                if(!$objPersona->buscarPersona($entrada["numDNI"])){
                    // No encontró dueño
                    $resultado["error"] = 9;
                }
            }else{
                $resultado["error"] = 5;
            }
        }
        
        // Valida patente y revisa si esta registrado
        if(is_null($resultado["error"])){
            if (strlen($entrada["patente"]) <= 10) {
                $objAuto = new Auto();
                if($objAuto->buscarAuto(strtoupper($entrada["patente"]))){
                    $resultado["error"] = 8;
                    $resultado["result"] = $objAuto;
                }
            }else{
                $resultado["error"] = 5;
            }
        }
    

        // Validacion del resto
        if (is_null($resultado["error"]) && strlen($entrada["marca"]) > 50) {
            $resultado["error"] = 5;
        }
        if (is_null($resultado["error"]) && (strlen($entrada["modelo"]) > 11 || !is_numeric($entrada["modelo"]))) {
            $resultado["error"] = 5;
        }

        if (is_null($resultado["error"])) {
            // Todo salio bien
            $objAuto = new Auto();
            $objAuto->cargar(strtoupper($entrada["patente"]), $entrada["marca"], $entrada["modelo"], $objPersona);
            if ($objAuto->insertar()) {
                $resultado["result"] = $objAuto;
            } else {
                // Error al insertar
                $resultado["error"] = 7;
            }
        }

        return $resultado;
    }

    /**
     * Cambia el dueño de un auto
     * @param array $entrada
     * @return array
     */
    public function cambiarDuenio($entrada){
        $resultado["result"] = null;
        $resultado["error"] = null;
        $contador = 0;

        $indices = array("patente", "numDNI");

        while ($contador < count($indices) && is_null($resultado["error"])) {
            $indiceRevisar = $indices[$contador];
            if (!isset($entrada[$indiceRevisar])) {
                // Alguno de los campos no llegó
                $resultado["error"] = "4";
            }
            $contador++;
        }

        // Validacion DNI
        if(is_null($resultado["error"])){
            if (strlen($entrada["numDNI"]) <= 9 && is_numeric($entrada["numDNI"])) {
                $objPersona = new Persona();
                if(!$objPersona->buscarPersona($entrada["numDNI"])){
                    // No encontró dueño
                    $resultado["error"] = 9;
                }
            }else{
                $resultado["error"] = 5;
            }
        }
        
        // Valida patente y revisa si esta registrado
        if(is_null($resultado["error"])){
            if (strlen($entrada["patente"]) <= 10) {
                $objAuto = new Auto();
                if(!$objAuto->buscarAuto(strtoupper($entrada["patente"]))){
                    // No encontró auto
                    $resultado["error"] = 10;
                }
            }else{
                $resultado["error"] = 5;
            }
        }

        if (is_null($resultado["error"])) {
            // Todo salio bien
            $objAuto->setObjPersonaDuenio($objPersona);
            if ($objAuto->modificar()) {
                $resultado["result"] = $objAuto;
            } else {
                // Error al insertar
                $resultado["error"] = 7;
            }
        }

        return $resultado;
    }
}
