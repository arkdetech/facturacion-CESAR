<?php

require_once "conexion.php";
$conexion = conexion();
$var = $_GET['accion'];

if ($var == "registrar") {
    /** Registrar nuevo cliente. * */
    $c = $_POST['codigo'];
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $t = $_POST['telefono'];
    $e = $_POST['email'];
    $sql = "INSERT into cliente (codigo, nombre,apellido,telefono,email)
        values ('$c','$n','$a','$t','$e')";
    echo $result = mysqli_query($conexion, $sql);
} elseif ($var == "modificar") {
    /** Modificar información del cliente. * */
    $c = $_POST['codigo'];
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $t = $_POST['telefono'];
    $e = $_POST['email'];
    $sql = "UPDATE cliente SET nombre='$n',apellido='$a',telefono='$t',email='$e' WHERE codigo='$c'";
    echo $result = mysqli_query($conexion, $sql);
} elseif ($var == "eliminar") {
    /** Eliminar cliente. * */
    $codigo = $_POST['codigo'];
    $sql = "DELETE from cliente where codigo='$codigo'";
    echo $result = mysqli_query($conexion, $sql);
} else {
    /** Mensaje de error. * */
    echo "Error...";
}