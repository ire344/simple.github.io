<?php 
include("../clases/estado.php");
$estado=new Estado();

$nombre=$_POST["nombre"];

$respuesta=$estado->insertar($nombre);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>