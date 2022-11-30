<?php 
include ("../clases/tarjeta.php");
$tarjeta=new Tarjeta();
$pk_tarjeta=$_GET["pk_tarjeta"];

$resultado=$tarjeta->baja($pk_tarjeta);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>