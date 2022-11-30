<?php 
include("../clases/referencias.php");
$referencias=new Referencias();

$pk_referencias=$_POST['pk_referencias'];
$empresa=$_POST["empresa"];
$documento=$_POST["documento"];
$fk_telefono=$_POST["fk_telefono"];
$fk_direccion=$_POST["fk_direccion"];

$respuesta=$referencias->actualizar($pk_referencias,$empresa,$documento,$fk_telefono,$fk_direccion);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>