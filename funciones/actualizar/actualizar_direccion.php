<?php 
include("../clases/direccion.php");
$direccion=new Direccion();

$pk_direccion=$_POST['pk_direccion'];
$calle=$_POST["calle"];
$colonia=$_POST["colonia"];
$numero=$_POST["numero"];
$estatus=$_POST["estatus"];

$respuesta=$direccion->actualizar($pk_direccion,$calle,$colonia,$numero,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>