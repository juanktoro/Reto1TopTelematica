    
    <?php 
include ("conexion.php");

$categoria= $_POST['select'];
$cate= mysql_query(" SELECT * FROM image WHERE descripcion = '".$categoria."'");
while($filas= mysql_fetch_array($cate)){
	$ruta=$filas['ruta'];
	$desc=$filas['descripcion'];

 ?>

 <ins><img src="<?php echo $ruta;?>"/></ins>
 <?php } ?>