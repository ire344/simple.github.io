<?php 
include("../clases/venta.php");
$venta=new Venta();

$pk_venta=$_POST['pk_venta'];
$fk_producto=$_POST["fk_producto"];
$fk_usuario=$_POST["fk_usuario"];

$respuesta=$venta->actualizar($pk_venta,$fk_producto,$fk_usuario);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>