<?php 
include("../../clases/empleado.php");
$empleado=new Empleado();

$nombre_ap=$_POST["nombre_ap"];
$numero=$_POST["numero"];

$archi_avatar=$_FILES["foto"]["tmp_name"];
$nombre_avatar=$_FILES["foto"]["name"];

move_uploaded_file($archi_avatar,"../../$nombre_avatar");

$respuesta=$empleado->insertar($nombre_ap,$numero,$nombre_avatar);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>
 <br>
 <a href="../../informacion_u.php"><button>Ver</button></a>