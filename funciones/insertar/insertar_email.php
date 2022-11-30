<?php 
include("../clases/email.php");
$email=new Email();

$dato=$_POST["dato"];
$estatus=$_POST["estatus"];

$respuesta=$email->insertar($dato,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>