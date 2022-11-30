<?php 
include("../clases/horario.php");
$horario=new Horario();

$imagen=$_POST["imagen"];

$respuesta=$horario->insertar($imagen);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>