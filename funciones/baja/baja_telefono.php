<?php 
include ("../clases/telefono.php");
$telefono=new Telefono();
$pk_telefono=$_GET["pk_telefono"];

$resultado=$telefono->baja($pk_telefono);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>