<?php 
include("../clases/venta.php");
$venta=new Venta();

$fk_producto=$_POST["fk_producto"];
$fk_usuario=$_POST["fk_usuario"];

$respuesta=$venta->insertar($fk_producto,$fk_usuario);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>