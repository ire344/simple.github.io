<?php 
include("../clases/proveedor.php");
$proveedor=new Proveedor();

$pk_proveedor=$_POST['pk_proveedor'];
$nombre=$_POST["nombre"];
$fk_direccion=$_POST["fk_direccion"];
$fk_telefono=$_POST["fk_telefono"];
$fk_email=$_POST["fk_email"];
$estatus=$_POST["estatus"];

$respuesta=$proveedor->actualizar($pk_proveedor,$nombre,$fk_direccion,$fk_telefono,$fk_email,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>