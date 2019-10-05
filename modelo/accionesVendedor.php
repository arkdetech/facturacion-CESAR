<?php

require_once "conexion.php";
$conexion = conexion();
$var = $_GET['accion'];

if ($var == "registrar") {
    /** Registrar nuevo vendedor. * */
    $v = $_POST['id_vendedor'];
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $d = $_POST['direccion'];
    $fn = $_POST['fecha_nacimiento'];
    $t = $_POST['telefono'];
    $e = $_POST['email'];
    $sql = "INSERT into vendedor (id_vendedor, nombre, apellido, direccion, fecha_nacimiento, telefono, email)
        values ('$v','$n','$a','$d','$fn','$t','$e')";
    echo $result = mysqli_query($conexion, $sql);
} elseif ($var == "modificar") {
    /** Modificar información del vendedor. * */
    $v = $_POST['id_vendedor'];
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $d = $_POST['direccion'];
    $fn = $_POST['fecha_nacimiento'];
    $t = $_POST['telefono'];
    $e = $_POST['email'];
    $sql = "UPDATE vendedor SET nombre='$n',apellido='$a', direccion='$d', fecha_nacimiento='$fn', telefono='$t',email='$e' WHERE id_vendedor='$v'";
    echo $result = mysqli_query($conexion, $sql);
} elseif ($var == "eliminar") {
    /** Eliminar vendedor. * */
    $id_vendedor = $_POST['id_vendedor'];
    $sql = "DELETE from vendedor where id_vendedor='$id_vendedor'";
    echo $result = mysqli_query($conexion, $sql);
} else {
    /** Mensaje de error. * */
    echo "Error...";
}