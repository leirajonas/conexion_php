<?php

include 'conexion.php';
date_default_timezone_set('America/Guayaquil');

$hora=date("Y-m-d h-i-s a");


/// poner fecha

extract($_POST);
/*
$tipo="alexander";
$departamento="1";
$comentario="asda";
$id_usuario=3;
*/
// como poner el id
$consulta="insert into tab_incidencias
(fecha,tipo,departamento,comentario,id_usuarios) values 
('$hora','$tipo','$departamento','$comentario',?)";

$sentencia=$conexion->prepare($consulta);
$sentencia->bind_param('i', $id_usuarios);

if($sentencia->execute()){
    echo 1;
}else{
    echo $sentencia->error;
}



?>