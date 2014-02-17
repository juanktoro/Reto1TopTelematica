<?php 

$conexion=mysql_connect ('localhost','root','') or die ('No hay conexion a la base de datos');
$db=mysql_select_db('imagenes', $conexion) or die ('no existe la base de datos');

 ?>