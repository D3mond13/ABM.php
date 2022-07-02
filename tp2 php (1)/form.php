<?php
include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $pwd = $_POST['pwd'];
    $mail = $_POST['email'];
    
    mysqli_query($conexion,"INSERT INTO usuario (nombre,apellido,pwd,mail,usuario) VALUES ('$nombre','$apellido','$pwd','$mail','$usuario')");

    header("Location: tabla.php");

    ?>

