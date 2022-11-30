<?php 
include("../clases/telefono.php");
$telefono=new Telefono();

$ruta_doc=$_POST["ruta_doc"];
$dato=$_POST["dato"];
$estatus=$_POST["estatus"];

$respuesta=$telefono->insertar($ruta_doc,$dato,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>