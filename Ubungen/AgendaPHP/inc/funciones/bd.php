<?php

// credenciales de la base de datos

define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);

//comprobar si esta conectando a la base datos (respuesta 1)
echo $conn->ping();

?>
