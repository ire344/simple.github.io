<?php 
include("../clases/tarjeta.php");
$tarjeta=new Tarjeta();

$codigo=$_POST["codigo"];
$fecha=$_POST["fecha"];
$estatus=$_POST["estatus"];

$respuesta=$tarjeta->insertar($codigo,$fecha,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>