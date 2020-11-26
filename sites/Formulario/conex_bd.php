<?php
$servidor="localhost";
$usuario="root";
$clave="root";
$baseDeDatos="formulario";

$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$conexion) {
    echo "hay un error";
}
?>
