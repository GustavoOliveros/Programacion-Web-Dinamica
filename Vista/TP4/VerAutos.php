<?php
// Encabezado
$titulo = "Ver Autos - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

// Función para mostrar el arreglo
/**
 * Muestra el arreglo de autos en html
 * @param $arregloAutos
 * @return string
 */
function mostrarAutos($arregloAutos)
{
    $tabla = '<table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Nombre del Dueñ@</th>
                        <th scope="col">Apellido del Dueñ@</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($arregloAutos as $objAuto) {
        $tabla .= '<tr>' .
            '<td>' . $objAuto->getPatente() . '</td>' .
            '<td>' . $objAuto->getModelo() . '</td>' .
            '<td>' . $objAuto->getMarca() . '</td>' .
            '<td>' . $objAuto->getObjPersonaDuenio()->getNombre() . '</td>' .
            '<td>' . $objAuto->getObjPersonaDuenio()->getApellido() . '</td></tr>';
    }
    $tabla .= "</tbody></table>";


    return $tabla;
}

// Contacto con control
$objControl = new C_TP4();
$resultado = $objControl->listarAutos();
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Autos</h1>
        <?php
        if($resultado["error"] == ""){
            echo mostrarAutos($resultado["result"]);
        }else{
            echo mostrarError("No hay autos registrados.");
        }

        ?>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>