<?php 
include("../clases/municipio.php");
$municipio=new Municipio();

$nombre=$_POST["nombre"];
$fk_estado=$_POST["fk_estado"];

$respuesta=$municipio->insertar($nombre,$fk_estado);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>