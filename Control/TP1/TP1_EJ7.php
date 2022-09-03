<?php
class TP1_EJ7
{
    /**
     * Retorna el resultado del ejercicio
     * @param array $arreglo
     * @return array|null claves: num1,num2,operador,resultado o null si ocurrió un error
     */
    public function visualizarResultado($arreglo)
    {
        $resultado = array();
        $contador = 0;
        $error = false;
        $indices = array("form-numero-uno", "form-numero-dos");
        $operadoresVal = array("MULTIPLICACION", "DIVISION", "SUMA", "RESTA");


        // En vez de ir una por una. Se hace repetitiva que valida una
        // por una hasta que encuentre un error o termine de validar
        while ($contador < count($indices) && !$error) {
            $indiceRevisar = $indices[$contador];
            if (!isset($arreglo[$indiceRevisar]) || $arreglo[$indiceRevisar] == "" || !is_numeric($arreglo[$indiceRevisar])) {
                $error = true;
            }
            $contador++;
        }

        // Validacion del operador
        if (!isset($arreglo["operador"]) || $arreglo["operador"] == "" || !in_array($arreglo["operador"], $operadoresVal)) {
            $error = true;
        }

        if ($error == false) {
            $numA = $arreglo["form-numero-uno"];
            $numB = $arreglo["form-numero-dos"];
            $operador = $arreglo["operador"];

            switch ($operador) {
                case "SUMA":
                    $resultado["resultado"] = $numA + $numB;
                    $operador = "+";
                    break;
                case "RESTA":
                    $resultado["resultado"] = $numA - $numB;
                    $operador = "-";
                    break;
                case "MULTIPLICACION":
                    $resultado["resultado"] = $numA * $numB;
                    $operador = "*";
                    break;
                case "DIVISION":
                    $operador = "/";
                    if ($numB == 0) {
                        $resultado["resultado"] = "Inválido";
                    } else {
                        $resultado["resultado"] = $numA / $numB;
                    }
                    break;
            }

            $resultado["numA"] = $numA;
            $resultado["numB"] = $numB;
            $resultado["operador"] = $operador;
        } else {
            $resultado = null;
        }

        return $resultado;
    }
}
