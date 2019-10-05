<?php
session_start();

require_once 'conexion.php';
$conexion = conexion();

$usuario = $_POST['usuario'];
$clave = $_POST['documento'];

$sql = "SELECT * FROM vendedor WHERE email='$usuario' and id_vendedor='$clave'";
$resultado = mysqli_query($conexion, $sql);

$_SESSION['usuario'] = $usuario;
$_SESSION['documento'] = $clave;

$filas = mysqli_num_rows($resultado);
if ($filas > 0) {
    header("location:../vista/clientes.php");
} else {
    echo "<h1>Error de autentificación</h1>";
    echo "<a href='../vista/sesion.php'><button type='button' class='close'>VOLVER</button></a>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);