<?php 
include ("../clases/horario.php");
$horario=new Horario();
$pk_horario=$_GET["pk_horario"];

$resultado=$horario->baja($pk_horario);

if($resultado){

	echo "Guardado";
}else{
    echo "Error";
}


 ?>