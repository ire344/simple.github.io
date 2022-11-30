<?php 
include("../clases/municipio.php");
$municipio=new Municipio();

$pk_municipio=$_POST['pk_municipio'];
$nombre=$_POST["nombre"];
$fk_estado=$_POST["fk_estado"];

$respuesta=$municipio->actualizar($pk_municipio,$nombre,$fk_estado);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>