<?php 
include("../clases/telefono.php");
$telefono=new Telefono();

$pk_telefono=$_POST['pk_telefono'];
$ruta_doc=$_POST["ruta_doc"];
$dato=$_POST["dato"];
$estatus=$_POST["estatus"];

$respuesta=$telefono->actualizar($pk_telefono,$ruta_doc,$dato,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>