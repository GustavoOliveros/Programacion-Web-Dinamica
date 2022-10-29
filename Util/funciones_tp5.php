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
        $tabla .= '<tr>' .
            '<td>' . $objUsuario->getId() . '</td>' .
            '<td>' . $objUsuario->getNombre() . '</td>' .
            '<td>' . $objUsuario->getMail() . '</td>' .
            '<td>
            <a href="abmUsuario.php?id='. $objUsuario->getId() .'&accion=editar" class="btn btn-primary">Editar</a>
            <a href="abmUsuario.php?id='. $objUsuario->getId() .'&accion=borrar" class="btn btn-danger">Borrar</a>
            </td></tr>';
    }
    $tabla .= "</tbody></table></div>";


    return $tabla;
}


?>