<?php

use JetBrains\PhpStorm\ArrayShape;

class C_TP3_EJ3
{
    /**
     * Visualiza el resultado
     */
    public function visualizarResultado($arregloEntrada)
    {
        $resultado["result"] = null;
        $resultado["error"] = null;
        $contador = 0;
        $indices = array("titulo", "actores", "director", "guion",
        "produccion", "anio", "nacionalidad", "genero", "duracion", "edad-recomendada");

        $dir = "../../Control/Archivos/";

        if ($_FILES['poster']['error'] <= 0) {
            if ($_FILES['poster']['type'] == "image/png" || $_FILES['poster']['type'] == "image/jpeg") {
                if (!copy($_FILES['poster']['tmp_name'], $dir . $_FILES['poster']['name'])) {
                    // Error al copiar
                    $resultado["error"] = "1";
                } else {
                    $arregloEntrada["poster"] = $dir . $_FILES['poster']['name'];
                }
            } else {
                // Error de tipo de archivo
                $resultado["error"] = "2";
            }
        } else {
            // Error al subir
            $resultado["error"] = "3";
        }

        while($contador < count($indices) && is_null($resultado["error"])){
            $indiceRevisar = $indices[$contador];
            if(!isset($arregloEntrada[$indiceRevisar])){
                // Alguno de los campos no llegó
                $resultado["error"] = "4";
            }
            $contador++;
        }

        // Validación anio
        if(is_null($resultado["error"])){
            $anio = intval($arregloEntrada["anio"]);
            if(!is_numeric($arregloEntrada["anio"]) || $anio < 0 || $anio > 9999){
                // Datos inválidos
                $resultado["error"] = "5";
            }
        }

        // Validación duracion
        if(is_null($resultado["error"])){
            $duracion = intval($arregloEntrada["duracion"]);
            if(!is_numeric($arregloEntrada["duracion"]) || $duracion < 0 || $duracion > 999){
                // Datos inválidos
                $resultado["error"] = "5";
            }
        }

        // Si no se produjeron errores, retorna el arreglo de entrada
        if(is_null($resultado["error"])){
            $resultado["result"] = $arregloEntrada;
        }
        return $resultado;
    }
}
