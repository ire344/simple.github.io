<?php 
include ("../clases/empleado.php");
$empleado=new Empleado();
$pk_empleado=$_GET["pk_empleado"];

$resultado=$empleado->baja($pk_empleado);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>