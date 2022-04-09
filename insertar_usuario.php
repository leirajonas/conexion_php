<?php

include 'conexion.php';

extract($_POST);

/*
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ap=$_POST['ap'];
*/

/*
$nombre='nombre';
$cedula='cedula';
$contrasena='contrasena';
$telefono='telefono';
$direccion='direccion';
$ap=2;
*/

$consulta="insert into tab_usuario(nombre,cedula,contrasena,telefono,direccion,ap) values ('".$nombre."','".$cedula."','".$contrasena."','".$telefono."','".$direccion."',".$ap.")";

if(mysqli_query( $conexion , $consulta ))
{
    echo 1;
}else{
    mysqli_error();
}

mysqli_close($conexion);


?>