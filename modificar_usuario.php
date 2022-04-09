<?php

include 'conexion.php';

extract($_POST);

/*
$nombre='nombre';
$cedula='0955454244';
$contrasena='contrasena';
$telefono='telefono';
$direccion='direccion';
$ap=2;
*/

$consulta="update tab_usuario set nombre = '".$nombre."', 
                                  
                                  contrasena = '".$contrasena."',
                                  telefono = '".$telefono."',
                                  direccion = '".$direccion."',
                                  ap = ".$ap."
                                  where cedula = ".$cedula;
                                  
if(mysqli_query($conexion,$consulta))
{
    echo 1;
}else{
     die (mysqli_error());
}

mysqli_close($conexion);

?>