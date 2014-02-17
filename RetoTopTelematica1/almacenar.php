<?php 

include ("conexion.php");

$casa= substr(md5(uniqid(rand())),0,3);

$rutaEnServidor= 'imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$casa.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$desc=$_POST['descripcion'];

$sql="INSERT INTO image (ruta,descripcion) values ('".$rutaDestino."', '".$desc."')";
$res= mysql_query($sql,$conexion);

if($res) {
	echo'Imagen subida con exito';?> <br><br>
	<li><a href="index.php">Volver a la pagina principal</a></li>
	<?php }else{
	 echo'No se pudo subir imagen';
	}	
	?>