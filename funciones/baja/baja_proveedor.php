<?php 
include ("../clases/proveedor.php");
$proveedor=new Proveedor();
$pk_proveedor=$_GET["pk_proveedor"];

$resultado=$proveedor->baja($pk_proveedor);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>