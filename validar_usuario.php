<?php
include 'conexion.php';

/*
$cedula="0955454244";
$contrasena="0955454244";
*/

/*
$cedula=$_POST['cedula'];
$contrasena=$_POST['contrasena'];
*/

extract($_POST);

if(!($sentencia=$conexion->prepare("SELECT * FROM tab_usuario WHERE cedula =? and contrasena =?")))
    echo "Error: ", $conexion->error;

$sentencia->bind_param('ss',$cedula,$contrasena);

$sentencia->execute();


$resultado = $sentencia->get_result();

if ($fila = $resultado->fetch_assoc()) {
           echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}

$sentencia->close();
$conexion->close();
?>