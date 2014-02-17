<?php 

include ("conexion.php");

if ($_POST['nombre']) { 
$nombre = $_POST['nombre'];
} 
	if ($_POST['apellido']) { 
	$apellido = $_POST['apellido'];
	} 
		if ($_POST['usuario']) {
		$user = $_POST['usuario'];
		}
			if ($_POST['password']) {
			$password = $_POST['password'];
			} else { 
			echo "Mensaje de error";
			}

$query = "INSERT INTO usuarios(nombre, apellido, usuario, password) VALUES('$nombre', '$apellido', '$user', '$password')";

if(mysql_query($query))$q=1;
else $q=0;

if($q==1){
		$result = mysql_result($q, 0);
		echo "Usuario registrado";
		header("Location: subir.html");
} else
		echo "El usuario no se pudo registrar";


?>