<?php 
include("../clases/turnos.php");
$turnos=new Turnos();

$turno=$_POST["turno"];

$respuesta=$turnos->insertar($turno);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>