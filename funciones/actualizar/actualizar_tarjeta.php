<?php 
include("../clases/tarjeta.php");
$tarjeta=new Tarjeta();

$pk_tarjeta=$_POST['pk_tarjeta'];
$codigo=$_POST["codigo"];
$fecha=$_POST["fecha"];
$estatus=$_POST["estatus"];

$respuesta=$tarjeta->actualizar($pk_tarjeta,$codigo,$fecha,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>