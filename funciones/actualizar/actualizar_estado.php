<?php 
include("../clases/estado.php");
$estado=new Estado();

$pk_estado=$_POST['pk_estado'];
$nombre=$_POST["nombre"];

$respuesta=$estado->actualizar($pk_estado,$nombre);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>