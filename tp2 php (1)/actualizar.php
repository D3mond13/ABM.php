<?php
include ("conexion.php");


$id = $_POST['id'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];

//asd//
$actualizar = "UPDATE usuario SET id = '$id', mail='$mail', usuario='$usuario' WHERE id = '$id'";

$resultado = $conexion->query($actualizar);

if ($resultado){
    echo"<script>alert('Se han actualizado los cambios correctamente, actualize la pagina para ver los cambios'); window.location='tabla.php';</script>";
 } else{
     echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
 }

?>