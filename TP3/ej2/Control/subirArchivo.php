<?php


$dir = '/opt/lampp/htdocs/pwd/tp3/ej2/archivos/'; // Definimos Directorio donde se guarda el archivo
// Comprobamos que no se hayan producido errores
if ($_FILES['miarchivo']["error"] <= 0) {
/* echo "Nombre: " . $_FILES['miarchivo']['name'] . "<br />";
echo "Tipo: " . $_FILES['miarchivo']['type'] . "<br />";
echo "Tamaño: " . ($_FILES['miarchivo']["size"] / 1024) . " kB<br />";
echo "Carpeta temporal: " . $_FILES['miarchivo']['tmp_name']." <br />"; */

    if ($_FILES['miarchivo']['type'] == "text/plain") {
        
    
       //abro el archivo y obtengo contenido

        $direccion_Archivo= $dir.$_FILES['miarchivo']['name'];

        $gestor = fopen($direccion_Archivo, "r");

        $contenido = fread($gestor, filesize($direccion_Archivo));
        fclose($gestor); 
       
        //Buscando solucion para mostrar el contenido a un text area
        echo '<textarea name="textarea" id="textarea" cols="30" rows="10">'. $contenido. '</textarea>';

    }


// Intentamos copiar el archivo al servidor.
if (!copy($_FILES['miarchivo']['tmp_name'], $dir.$_FILES['miarchivo']['name'])) {
echo "ERROR: no se pudo cargar el archivo ";
}else{
    echo "El archivo ".$_FILES['miarchivo']['name']." se ha copiado con Éxito <br />";
}
}else
echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
