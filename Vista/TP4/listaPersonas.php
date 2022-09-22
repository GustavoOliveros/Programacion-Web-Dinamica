<?php
// Encabezado
$titulo = "Listar Personas - TP 4";
include_once "../Estructura/encabezado.php";

// Navbar
include_once "../Estructura/navbar.php";

// Configuración
include_once "../../configuracion.php";

// Ejercicio 3 – Crear una página "listaPersonas.php" que muestre un listado con las personas que se
// encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
// los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
// generada, no se puede acceder directamente a las clases del ORM. 



// Función para mostrar el arreglo
/**
 * Muestra el arreglo de autos en html
 * @param $arregloAutos
 * @return string
 */
function mostrarPersonas($arregloPersonas)
{
    $tabla = '<table class="table col-12 text-center mt-5">
                <thead>
                    <tr>
                        <th scope="col">Número de DNI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Más información</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($arregloPersonas as $objPersona) {
        $tabla .= '<tr>' .
            '<td>' . $objPersona->getNumDNI() . '</td>' .
            '<td>' . $objPersona->getNombre() . '</td>' .
            '<td>' . $objPersona->getApellido() . '</td>' .
            '<td>' . $objPersona->getDomicilio() . '</td>' .
            '<td>' . $objPersona->getTelefono() . '</td>'. 
            '<td>' . $objPersona->getFechaNac() . '</td>'.
            '<td><a href="autosPersona.php?dni="'. $objPersona->getNumDNI() . '>Expandir</a></td></tr>';;
    }
    $tabla .= "</tbody></table>";


    return $tabla;
}

// Contacto con control
$objControl = new C_TP4();
$resultado = $objControl->listarPersonas();
?>

<!-- Listado -->
<main class="col-12 my-3 d-flex align-items-center justify-content-center flex-column">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Personas</h1>
        <?php
        if($resultado["error"] == ""){
            echo mostrarPersonas($resultado["result"]);
        }else{
            echo mostrarError("No hay personas registradas.");
        }

        ?>
        <a class="btn btn-primary" href="index.php"><< Volver</a>
    </div>
</main>

<?php
// Footer
include_once "../Estructura/footer.php";
?>