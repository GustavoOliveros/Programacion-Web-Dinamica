<?php
/**
 * Muestra un arreglo de Personas en html
 * @param array $arregloPersonas
 * @param boolean $expandir (indica si debe incluir el campo de expansion o no)
 * @return string
 */
function mostrarPersonas($arregloPersonas, $expandir)
{
    $expansion["head"] =  "";
    $expansion["body"] = "";
 
    if($expandir){
        $expansion["head"] = '<th scope="col">Más información</th>';
    }

    $tabla = '<div class="table-responsive"><table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Número de DNI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de Nacimiento</th>'.
                        $expansion["head"] .'  
                    </tr>
                </thead>
                <tbody>';

    foreach ($arregloPersonas as $objPersona) {
        if($expandir){
            $expansion["body"] = '<td><a href="autosPersona.php?dni='. $objPersona->getNumDNI() . '">Expandir</a></td>';
        }
        $tabla .= '<tr>' .
            '<td>' . $objPersona->getNumDNI() . '</td>' .
            '<td>' . $objPersona->getNombre() . '</td>' .
            '<td>' . $objPersona->getApellido() . '</td>' .
            '<td>' . $objPersona->getDomicilio() . '</td>' .
            '<td>' . $objPersona->getTelefono() . '</td>'. 
            '<td>' . $objPersona->getFechaNac() . '</td>'.
            $expansion["body"].'</tr>';;
    }
    $tabla .= "</tbody></table></div>";


    return $tabla;
}

/**
 * Muestra el arreglo de autos en html
 * @param array $arregloAutos
 * @param boolean $expandir Agrega nombre y apellido del dueño (opcional)
 * @return string
 */
function mostrarAutos($arregloAutos, $expandir = false)
{
    $expansion["head"] =  "";
    $expansion["body"] = "";
 
    if($expandir){
        $expansion["head"] = '
        <th scope="col">Nombre del Dueñ@</th>
        <th scope="col">Apellido del Dueñ@</th>';
    }

    $tabla = '<div class="table-responsive"><table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>'.
                        $expansion["head"] . '
                    </tr>
                </thead>
                <tbody>';

    foreach ($arregloAutos as $objAuto) {
        if($expandir){
            $expansion["body"] = '<td>' . $objAuto->getObjPersonaDuenio()->getNombre() . '</td>' .
            '<td>' . $objAuto->getObjPersonaDuenio()->getApellido() . '</td>';
        }
        $tabla .= '<tr>' .
            '<td>' . $objAuto->getPatente() . '</td>' .
            '<td>' . $objAuto->getModelo() . '</td>' .
            '<td>' . $objAuto->getMarca() . '</td>' . $expansion["body"] . '</tr>';
    }
    $tabla .= "</tbody></table></div>";


    return $tabla;
}



?>