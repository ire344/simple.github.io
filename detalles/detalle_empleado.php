<?php 
include ("../clases/empleado.php");
$empleado=new Empleado();
$id=$_GET["empleado"];
$respuesta=$empleado->mostrarPorId($pk_empleado);
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
		<h2><?=$datos['nombre_ap']?></h2>
		<img src="<?=$datos['foto']?>">
	</div>
</body>
</html>