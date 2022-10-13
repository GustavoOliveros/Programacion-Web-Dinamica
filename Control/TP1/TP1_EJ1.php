<?php

class TP1_EJ1{
    /**
     * Retorna si el número es positivo, negativo o cero
     * @param array $entrada
     * @return string
     */
    public function visualizarResultado($entrada){
        $resultado = "No se recibieron datos válidos. Intente nuevamente.";
        if(isset($entrada["numero-form"])){
            $numero = $entrada["numero-form"];
            if($numero != "" && is_numeric($numero)){
                if($numero > 0){
                    $resultado = "El número es positivo.";
                }else if($numero == 0){
                    $resultado = "El número es cero.";
                }else if($numero < 0){
                    $resultado = "El número es negativo.";
                }
            }
        }

        return $resultado;
    }
}

?>