<?php
$hostname='localhost';
$database='usuarios_bd';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion -> connect_errno){
  echo" Error de conexion";

}
?>