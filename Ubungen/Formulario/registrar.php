<?php
include "conex_bd.php";

if (isset($_POST['mandalo']) ) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $insertarDatos = "INSERT INTO usuarios (nombre, email) VALUES('$nombre', '$email')";
    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

    $verificarUsuarioRepetido = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombre' ");
    if (mysqli_num_rows($verificarUsuarioRepetido) > 0) {
        echo "<script>
                alert('El usuario ya esta registrado');
                window.history.go(-1);
            </script>";
        exit();
    }

    if (!$ejecutarInsertar) {
        echo "Error perro";
    }else{
        echo 'Registrado';
    }
}

mysqli_close($conexion);
?>
