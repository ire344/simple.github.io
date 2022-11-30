<?php 
include("../../clases/producto.php");
$producto=new Producto();

$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];

$archi_avatar=$_FILES["imagen"]["tmp_name"];
$nombre_avatar=$_FILES["imagen"]["name"];

move_uploaded_file($archi_avatar,"../../$nombre_avatar");

$respuesta=$producto->insertar($nombre,$precio,$descripcion,$nombre_avatar);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

 ?>
 <a href="../../productos_u.php"><button>Ver</button></a>