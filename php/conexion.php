<?php

$conexion = mysqli_connect( "localhost", "root", "", "hackstools");

if (!$conexion) {
    die("Conexión fallida: ". mysqli_connect_error());
}  //else {
//     echo "Conexión exitosa";
// }

?>