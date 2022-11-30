<?php 
include("../clases/direccion.php");
$direccion=new Direccion();

$calle=$_POST["calle"];
$colonia=$_POST["colonia"];
$numero=$_POST["numero"];
$estatus=$_POST["estatus"];

$respuesta=$direccion->insertar($calle,$colonia,$numero,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>