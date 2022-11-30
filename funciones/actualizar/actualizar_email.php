<?php 
include("../clases/email.php");
$email=new Email();

$pk_email=$_POST['pk_email'];
$dato=$_POST["dato"];
$estatus=$_POST["estatus"];

$respuesta=$email->actualizar($pk_email,$dato,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>