<?php
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $bd = "facturacion";
    $password = "";
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    return $conexion;
}
if (conexion()) {
    
} else {
    echo "No conectado";
}