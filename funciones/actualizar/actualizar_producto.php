<?php 
include("../clases/producto.php");
$producto=new Producto();

$pk_producto=$_POST['pk_producto'];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];
$imagen=$_POST["imagen"];
$fk_promocion=$_POST["fk_promocion"];

$respuesta=$producto->actualizar($pk_producto,$nombre,$precio,$descripcion,$imagen,$fk_promocion);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>