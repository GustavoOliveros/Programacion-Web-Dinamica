<?php

/**
 * Muestra un listado de productos
 * @param array $arregloProductos
 * @return string
 */
function mostrarProductos($arregloProductos){
    $tabla = '<div class="table-responsive">
                <table class="table col-12 text-center mt-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Existencia</th>
                            <th scope="col">Barcode</th>
                        </tr>
                    </thead>
                    <tbody>';
    
    foreach ($arregloProductos as $objProducto) {
        $tabla .= '<tr>'.'<td>' . $objProducto->getId() . '</td>' .
                        '<td>' . $objProducto->getNombre() . '</td>' .
                        '<td>' . $objProducto->getExistencia() . '</td>' .
                        '<td><a class="btn btn-primary" href="../codBarras/listarCodBarras.php?codigoBarras='. $objProducto->getCodigoBarras() . '">Ver...</a></td></tr>';
    }

    $tabla .= "</tbody></table></div>";

    return $tabla;
}



?>