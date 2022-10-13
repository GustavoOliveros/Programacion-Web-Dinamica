<?php

class TP1_EJ2{
    /**
     * Retorna el resultado del ejercicio
     * @param array $arreglo
     * @return float
     */
    public function visualizarResultado($arreglo){
        $resultado = 0;
        $contador = 0;
        $error = false;
        $indices = array("horas-lunes","horas-martes","horas-miercoles","horas-jueves","horas-viernes");

        // En vez de ir una por una. Se hace repetitiva que valida una
        // por una hasta que encuentre un error o termine de validar
        while($contador < count($indices) && !$error){
            $indiceRevisar = $indices[$contador];

            if(isset($arreglo[$indiceRevisar]) && $arreglo[$indiceRevisar] != ""){
                if(is_numeric($arreglo[$indiceRevisar]) && $arreglo[$indiceRevisar] >= 0){
                    $resultado += $arreglo[$indiceRevisar];
                }else{
                    $error = true;
                }
            }else{
                $error = true;
            }

            $contador++;
        }

        if($error){
            $resultado = -1;
        }

        return $resultado;
    }
}

?>