<?php
class TP1_EJ4{
    /**
     * Retorna el resultado del ejercicio
     * @param array $arreglo
     * @return string
     */
    public function visualizarResultado($arreglo){
        $resultado = "";
        $contador = 0;
        $error = false;
        $indices = array("nombre-form","apellido-form","edad-form","direccion-form");

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

        // Si no hubo errores, muestra el msj
        if($error == true){
            $resultado = "Los datos no son válidos.";
        }else{
            if($arreglo["edad-form"] >= 18){
                $edadString = ", por lo que soy mayor de edad, ";
            }else{
                $edadString = ", por lo que soy menor de edad, ";
            }
            $resultado = "Hola, soy " . $arreglo["nombre-form"] . " " . $arreglo["apellido-form"] .
            ", tengo " . $edad . " años". $edadString ." y vivo en " . $arreglo["direccion-form"];
        }

        return $resultado;
    }
}
?>