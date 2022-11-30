<?php 
include("../../clases/promocion.php");
$promocion=new Promocion();

$archi_avatar=$_FILES["imagen"]["tmp_name"];
$nombre_avatar=$_FILES["imagen"]["name"];

move_uploaded_file($archi_avatar,"../../img/$nombre_avatar");

$respuesta=$promocion->insertar($nombre_avatar);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>