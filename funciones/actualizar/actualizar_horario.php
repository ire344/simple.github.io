<?php 
include("../clases/horario.php");
$horario=new Horario();

$pk_horario=$_POST['pk_horario'];
$imagen=$_POST["imagen"];
$estatus=$_POST["estatus"];

$respuesta=$horario->actualizar($pk_horario,$imagen,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>