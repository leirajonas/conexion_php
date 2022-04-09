<?php

include 'conexion.php';

extract($_GET);

$consulta= "SELECT * from tab_usuario where cedula = '$cedula'";
$resultado= $conexion -> query($consulta);

$usuario=[];

while($fila=$resultado -> fetch_assoc()){
    $usuario[]=$fila;    
}


echo json_encode($usuario);
$resultado ->close();

?>