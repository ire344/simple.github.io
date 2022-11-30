<?php 
include ("../clases/email.php");
$email=new Email();
$pk_email=$_GET["pk_email"];

$resultado=$email->baja($pk_email);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>