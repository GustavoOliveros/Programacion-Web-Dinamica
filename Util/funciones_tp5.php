<?php
/**
 * Muestra un arreglo de Usuarios en html
 * @param array $arregloUsuarios
 * @return string
 */
function mostrarUsuarios($arregloUsuarios)
{
    $tabla = '<div class="table-responsive"><table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Identificador</th>
                        <th scope="col">Username</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($arregloUsuarios as $objUsuario) {
        if($objUsuario->getDeshabilitado() == "0000-00-00 00:00:00"){
            $tabla .= '<tr>' .
            '<td>' . $objUsuario->getId() . '</td>' .
            '<td>' . $objUsuario->getNombre() . '</td>' .
            '<td>' . $objUsuario->getMail() . '</td>' .
            '<td>
            <a href="abmUsuario.php?id='. $objUsuario->getId() .'&accion=editar" class="btn btn-primary">Editar</a>
            <a href="abmUsuario.php?id='. $objUsuario->getId() .'&accion=borrar" class="btn btn-danger">Borrar</a>
            </td></tr>';
        }else{
            $tabla .= '<tr>' .
            '<td class="table-danger">' . $objUsuario->getId() . '</td>' .
            '<td class="table-danger">' . $objUsuario->getNombre() . '</td>' .
            '<td class="table-danger">' . $objUsuario->getMail() . '</td>' .
            '<td class="table-danger">
            <a href="abmUsuario.php?id='. $objUsuario->getId() .'&accion=activar" class="btn btn-primary">Activar</a>
            </td></tr>';
        }
    }
    $tabla .= "</tbody></table></div>";


    return $tabla;
}

/**
 * Retorna un mensaje de error
 * @param int $codError
 * @return string
 */
function getError($codError){
    $arreglo = [
        "Hubo un error el envío de datos. Por favor, inténtelo de nuevo.", // Error 0
        "El usuario o contraseña son inválidos.", // Error 1
        "El usuario está deshabilitado.", // Error 2
        "Se cerró su sesión. Por favor, ingrese sus credenciales nuevamente.", // Error 3
        "La acción no pudo concretarse. Por favor, inténtelo de nuevo." // Error 4
    ];

    if($codError >= count($arreglo) || $codError < 0){
        $mensaje = "Ocurrió un error desconocido. Por favor, inténtelo de nuevo.";
    }else{
        $mensaje = $arreglo[$codError];
    }

    return $mensaje;
}

?>