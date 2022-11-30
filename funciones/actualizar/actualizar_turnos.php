<?php 
include("../clases/turnos.php");
$turnos=new Turnos();

$pk_turno=$_POST['pk_turno'];
$turno=$_POST["turno"];

$respuesta=$turnos->actualizar($pk_turno,$turno);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>