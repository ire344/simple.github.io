<?php 
include ("../clases/promocion.php");
$promocion=new Promocion();
$pk_promocion=$_GET["pk_promocion"];

$resultado=$promocion->baja($pk_promocion);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>