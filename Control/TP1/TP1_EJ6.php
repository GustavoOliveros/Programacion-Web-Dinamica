<?php
class TP1_EJ6{
    /**
     * Retorna el resultado del ejercicio
     * @param array $arreglo
     * @return string
     */
    public function visualizarResultado($arreglo){
        $resultado = "";
        $contador = 0;
        $error = false;
        $indices = array("nombre-form","apellido-form","edad-form","direccion-form","estudios","sexo");
        $estudiosVal = array("sin-estudios", "estudios-secundarios", "estudios-primarios");
        $sexoVal = array("masculino", "femenino", "otro");

        // En vez de ir una por una. Se hace repetitiva que valida una
        // por una hasta que encuentre un error o termine de validar
        while($contador < count($indices) && !$error){
            $indiceRevisar = $indices[$contador];
            if(!isset($arreglo[$indiceRevisar]) || $arreglo[$indiceRevisar] == ""){
                $error = true;
            }
            $contador++;
        }

        // Validacion edad
        if($error == false && is_numeric($arreglo["edad-form"])){
            $edad = intval($arreglo["edad-form"]);
            if($edad < 0 || $edad > 150){
                $error = true;
            }
        }else{
            $error = true;
        }

        // Validacion estudios
        if($error == false && !in_array($arreglo["estudios"], $estudiosVal)){
            $error = true;
        }

        // Validacion sexo
        if($error == false && !in_array($arreglo["sexo"], $sexoVal)){
            $error = true;
        }

        // Dado su naturaleza, Deportes no se va a validar.
        // Se asumirá que no practica ningun deporte si no llegan datos.

        // Si no hubo errores, muestra el mensaje
        if($error == true){
            $resultado = "Los datos no son válidos.";
        }else{
            if($arreglo["edad-form"] >= 18){
                $edadString = ", por lo que soy mayor de edad, ";
            }else{
                $edadString = ", por lo que soy menor de edad, ";
            }

            if ($arreglo["estudios"] == "sin-estudios") {
                $estudiosString = "No cuento con estudios.";
            } elseif ($arreglo["estudios"] == "estudios-primarios") {
                $estudiosString = "Cuento con estudios primarios";
            } else {
                $estudiosString = "Cuento con estudios secundarios";
            }

            if ($arreglo["sexo"] == "otro") {
                $stringSexo = "no me identifico con ningún género binario.";
            } else {
                $stringSexo = "me identifico con el sexo " . $arreglo["sexo"] . ".";
            }

            if(!isset($arreglo["deportes"])){
                $stringDeportes = " No practico ningún deporte.";
            }else{
                $stringDeportes = " Practico " . count($arreglo["deportes"]) . " deportes.";
            }

            $resultado = "Hola, soy " . $arreglo["nombre-form"] . " " . $arreglo["apellido-form"] .
            ", tengo " . $edad . " años". $edadString ." y vivo en " . $arreglo["direccion-form"] . ". ".
            $estudiosString . " y " . $stringSexo . $stringDeportes; 
        }

        return $resultado;
    }
}
?>