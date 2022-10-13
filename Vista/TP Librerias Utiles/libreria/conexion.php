<?php

$mysqli = new mysqli("localhost","root","password","codigoBarra"); // servidor, usuario, contraseña, tabla.

    if (mysqli_connect_error()){
        echo 'Conexion Fallida: ', mysqli_connect_error();
        exit();
    } 

?>