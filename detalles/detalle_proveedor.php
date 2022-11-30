<?php 
include ("../clases/proveedor.php");
$proveedor=new Proveedor();
$id=$_GET["proveedor"];
$respuesta=$proveedor->mostrarPorId($pk_proveedor);
$datos=mysqli_fetch_assoc($respuesta);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	img{
		width: 200px;
		height: 300px;
	}
</style>
<body>
	<div>
		<h2><?=$datos['nombre']?></h2>
	</div>
</body>
</html>