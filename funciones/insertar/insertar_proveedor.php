<?php 
include("../../clases/proveedor.php");
$proveedor=new Proveedor();

$nombre=$_POST["nombre"];

$respuesta=$proveedor->insertar($nombre);

if ($respuesta==true) {
	echo "Guardado";
}else{
	echo "Error";
}

?>
<br>
<a href="../../informacion_u.php"><button>Ver</button></a>