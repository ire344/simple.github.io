<?php 
include ("../clases/direccion.php");
$direccion=new Direccion();
$pk_direccion=$_GET["pk_direccion"];

$resultado=$direccion->baja($pk_direccion);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>