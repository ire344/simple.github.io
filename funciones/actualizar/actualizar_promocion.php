<?php 
include("../clases/promocion.php");
$promocion=new Promocion();

$pk_promocion=$_POST['pk_promocion'];
$imagen=$_POST["imagen"];
$estatus=$_POST["estatus"];

$respuesta=$promocion->actualizar($pk_promocion,$imagen,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>