<?php 
include("../clases/empleado.php");
$empleado=new Empleado();

$pk_empleado=$_POST['pk_empleado'];
$nombre_ap=$_POST["nombre_ap"];
$numero=$_POST["numero"];
$foto=$_POST["foto"];
$fk_direccion=$_POST["fk_direccion"];
$fk_referencias=$_POST["fk_referencias"];
$fk_turno=$_POST["fk_turno"];
$estatus=$_POST["estatus"];

$respuesta=$empleado->actualizar($pk_empleado,$nombre_ap,$numero,$foto,$fk_direccion,$fk_referencias,$fk_turno,$estatus);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>