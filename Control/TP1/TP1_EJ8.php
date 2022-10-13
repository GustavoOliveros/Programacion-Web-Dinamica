<?php
class TP1_EJ8
{
    /**
     * Retorna el resultado del ejercicio
     * @param array $arreglo
     * @return int -1 si hay error
     */
    public function visualizarResultado($arreglo)
    {
        $error = false;
        $resultado = -1;

        if(!isset($arreglo["edad"]) || $arreglo["edad"] == "" || !is_numeric($arreglo["edad"])){
            $error = true;
        }else if($arreglo["edad"] < 0 || $arreglo["edad"] > 150){
            $error = true;
        }

        if($error == false){
            $arreglo["edad"] = intval($arreglo["edad"]);
            if ($arreglo["edad"] < 12) {
                $resultado = 160;
            } else if (isset($arreglo["esEstudiante"]) && $arreglo["esEstudiante"] == "on") {
                $resultado = 180;
            } else {
                $resultado = 300;
            }
        }

        return $resultado;
    }
}
